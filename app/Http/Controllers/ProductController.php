<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//Almacenaiento de mis imagenes
use Illuminate\Support\Facades\File;//Obtener la información de mis archivos

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function home()
    {
        $categorias = Categoria::all();
        $products = Product::all();
        return view('Products.index',['products'=> $products
        ,'categorias'=> $categorias]);
    }
    public function listproduct()
    {
        $products = Product::latest()->paginate(5);
        $categorias = Categoria::latest()->paginate(5);
        return view('Products.Listproduct',['products'=> $products ,'categorias'=> $categorias])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index()
    {
        $categorias = Categoria::all();
       
        $aux = Product::all(); //all hace un SELECT *FROM
        return view('/Products.index',['products'=> $aux
        ,'categorias'=> $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorias = Categoria::all();
        return view('/Products.create',['categorias'=> $categorias])
            ->with('success','El registro se ha creado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Recibir datos del formulario
        // Validar datos del formulario
        $request->validate([
            'Name'=> ['required', 'string',],
            'Description'=>['required', 'string'],
            'Price'=>['required', 'integer'],
            'categorias_id' => ['required', 'integer']

        ]);
        
        //Declarar el producto automaticamente cómo activo 
        if($request->status ==''){
           $stat = 'Activo';
        }

        //crear el producto 
        $product =new Product;
        $product->Name = $request->Name;
        $product->Description = $request->Description;
        $product->Price = $request->Price;
        $product->Status = $stat;
        $product->categorias_id=$request->categorias_id;


        //recibir la imagen con su nombre y extension
        if ($request->hasFile('imagen_producto')){
            $file           = $request->file("imagen_producto");
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("storage/"),$nombrearchivo);
            $product->Image = $nombrearchivo;
        }
        $product->save();

        return redirect('/listproduct');

    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Product $product)
    {
        $categorias = Categoria::all();

        return view('/Products.show',['products'=> $product
        ]);
    }
   

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Product $product)
     {
        $categorias = Categoria::all();
        return view('Products/edit',['product'=> $product,'categorias'=> $categorias]);
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {        
        $request->validate([
            'Name'=> ['required', 'string',],
            'Description'=>['required', 'string'],
            'Price'=>['required', 'integer'],
            'categorias_id' => ['required', 'integer']
        ]);
    
        if ($request->hasFile('imagen_producto')){
            $file           = $request->file("imagen_producto");
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("storage/"),$nombrearchivo);
        }
        $product->update($request->all());

        $product->where('id',$product->id)
            ->update(['Image'=> $nombrearchivo]);

        return redirect('listproduct')->with('success','El registro se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect()->route('listadoproductos')
            ->with('success','Producto eliminado correctamente');
        

    }
}
