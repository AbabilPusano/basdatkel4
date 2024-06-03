$(function() {

    $('.tombolTambah').on('click', function() {
        
        $('#staticBackdropLabel').html('Tambah Data');
        $('#gambarfile').val('');
        $('#nama').val('');
        $('#deskripsi').val('');
        $('#harga').val('');

    })

    $('.tampilModalUbah').on('click', function() {
        
        $('#staticBackdropLabel').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/anmuk/public/manajemenproduk/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/anmuk/public/manajemenproduk/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                // $('#gambarfile').val(data.gambar);
                $('#nama').val(data.nama_produk);
                $('#deskripsi').val(data.deskripsi);
                $('#harga').val(data.harga);
                $('#id').val(data.id);
            }
        })

    })

})