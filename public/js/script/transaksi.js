$(function() {

    $('.tombolTambah').on('click', function() {
        
        $('#staticBackdropLabel').html('Tambah Data');
        $('#barangpesanan').val('');
        $('#namapemesan').val('');
        $('#jml').val('');
        $('#dipesan').val('');
        $('#diterima').val('');
        $('#harga').val('');

    })

    $('.tampilModalUbah').on('click', function() {
        
        $('#staticBackdropLabel').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/anmuk/public/manajementransaksi/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/anmuk/public/manajementransaksi/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#barangpesanan').val(data.pesanan);
                $('#jml').val(data.jumlah_transaksi);
                $('#namapemesan').val(data.nama_pelanggan);
                $('#dipesan').val(data.waktu_masuk);
                $('#diterima').val(data.waktu_diterima);
                $('#harga').val(data.total_harga);
                $('#id').val(data.kode_pesanan);
            }
        })

    })

})