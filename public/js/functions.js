
function delete_product(id)
{
    swal({
        title: 'Eliminar producto',
        Text: 'Una vez eliminado, este archivo no podrá ser recuperado'+'¿Esta seguro de eliminar este producto?',
        icon: 'Warning',
        Button:['Eliminar','Cancelar'],
        dangerMode: true
    })
    .then((willDelete)=>{

        if(willDelete)
        {
            $.ajax({
                url:`/product/${id}`,
                type:'POST',
                data:
                {
                    '_token':$("meta[name=csrf-token]").attr("content"),
                    '_method':'DELETE',
                },
            success: function (result) 
            {   
                swal('Prodiucto eliminado',
                {  
                    icon:'success',
                });
                // Cuando se ejecute la función, recargar la página
                setTimeout(function()
                {
                    location.reload()
                },1000)
            }
            })
        }
    })

}
