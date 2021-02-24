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
        return view('/Products.create',['categorias'=> $categorias
        ]);
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
        ]);

        if($request->status ==''){
           $stat = 'Activo';
        }
        
        $product =new Product;
        $product->Name = $request->Name;
        $product->Description = $request->Description;
        $product->Price = $request->Price;
        $product->Status = $stat;
        
        if ($request->hasFile('imagen_producto')){
            $file           = $request->file("imagen_producto");
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("storage/"),$nombrearchivo);
            $product->Image = $nombrearchivo;
        }
        $product->save();


        //El producto debe tenr campo categoria
        // $product= Product::create([
        //     'Name'=>$request->get('Name'),
        //     'Description'=>$request->get('Description'),
        //     'Price'=>$request->get('Price'),
        //     'Status'=>$stat,
        // ]);
        // Redireccionar al listado de productos
        return redirect('/product');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Product  $product
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Product $product)
    {
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
        return view('Products/edit',
            ['product'=> $product
        ]);
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
            'Price'=>['required', 'integer']
        ]);
    
        if ($request->hasFile('imagen_producto')){
            $file           = $request->file("imagen_producto");
            $nombrearchivo  = $file->getClientOriginalName();
            $file->move(public_path("storage/"),$nombrearchivo);
        }
        $product->update($request->all());

        $product->where('id',$product->id)
            ->update(['Image'=> $nombrearchivo]);

        return redirect('/product')->with('success','El registro se ha actualizado correctamente');
 
            // $imagen_producto= $request->file('imagen_producto');
            //     $extension = $imagen_producto->getClientOriginalExtension();
            //     Storage::disk('public')->put($imagen_producto->getFilename() .'.'.$extension,
            //     File::get($imagen_producto));
            //     $product->Image=$request->get($imagen_producto->getFilename() .'.'.$extension);

            // $product->Name=$request->get('Name');
            // $product->Description=$request->get('Description');
            // $product->Price=$request->get('Price');
            // $product->Status=$stat;
            // $product->save();
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
    
        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');  
    }
}
