$(function() {

    $('.tombolTambah').on('click', function() {
        
        $('#staticBackdropLabel').html('Tambah Data');
        $('#nama').val('');
        $('#jumlah').val('');
        $('#tanggal').val('');
        $('#detail').val('');

    })

    $('.tampilModalUbah').on('click', function() {
        
        $('#staticBackdropLabel').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/anmuk/public/manajemenpengeluaran/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/anmuk/public/manajemenpengeluaran/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama_pengeluaran);
                $('#jumlah').val(data.harga);
                $('#tanggal').val(data.tanggal);
                $('#detail').val(data.detail);
                $('#id').val(data.id);
            }
        })

    })

})