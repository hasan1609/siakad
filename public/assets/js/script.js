// preview image
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#foto").change(function() {
    readURL(this);
});

// modal
$(document).on('click', '#btn-editjabatan', function() {
    $('.modal-body #id_jabatan').val($(this).data('id'))
    $('.modal-body #nama_jabatan').val($(this).data('nama'))
})