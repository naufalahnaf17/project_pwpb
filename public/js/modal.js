$('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_spesialis = button.data('spesialis')
    var id_spesialis = button.data('id')
    var modal = $(this)
    modal.find('.modal-body #nama_spesialis').val(nama_spesialis)
    modal.find('.modal-body #id_spesialis').val(id_spesialis)


})

$('#delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_spesialis = button.data('spesialis')
    var id_spesialis = button.data('id_spesialis')
    console.log(id_spesialis)
    var modal = $(this)
    modal.find('.modal-body').html("Apakah yakin anda akan menghapus data Spesialis <b> " + nama_spesialis + "</b>")
    modal.find('.modal-footer #id_spesialis').val(id_spesialis)

})

$('#editGedung').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_gedung = button.data('nama_gedung')
    var id_gedung = button.data('id_gedung')
    console.log(id_gedung)
    var modal = $(this)
    modal.find('.modal-body #nama_gedung').val(nama_gedung)
    modal.find('.modal-body #id_gedung').val(id_gedung)

})
$('#deleteGedung').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var nama_gedung = button.data('nama_gedung')
    var id_gedung = button.data('id_gedung')
    console.log(id_gedung)
    var modal = $(this)
    modal.find('.modal-body').html("Apakah yakin anda akan menghapus data <b> " + nama_gedung + "</b>")
    modal.find('.modal-footer #id_gedung').val(id_gedung)

})
