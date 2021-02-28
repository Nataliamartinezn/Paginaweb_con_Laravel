$('.delete-confirm').click(function(event) {
  var form =  $(this).closest("form");
  var name = $(this).data("name");
  event.preventDefault();
  swal({
      title: `¿Desea eliminar el producto ${name}?`,
      text: "Si lo elimina, este no podrá ser recuperado.",
      icon: "warning",
      buttons: true,
      dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      form.submit();
    }
  });
});

