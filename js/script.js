$('#package').on('change', function(){
    // ambil data dari elemen option yang dipilih
    const price = $('#package option:selected').data('price');
    const namaPackage = $('#package option:selected').text();

    // tampilkan data ke elemen
    // $('[name=namaPackage]').val(namaPackage);
    $('#namaPackage').text(`${namaPackage}`);
    
    $('#total').text(`Rp ${price}`);
});