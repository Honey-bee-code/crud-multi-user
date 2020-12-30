$(document).ready(function()
    {
        $('#example').DataTable();
    });

function reset() {
    document.getElementById("err_nama_mahasiswa").innerHTML = "";
    document.getElementById("err_alamat").innerHTML = "";
    document.getElementById("err_jurusan").innerHTML = "";
    document.getElementById("err_tanggal_masuk").innerHTML = "";
    document.getElementById("err_jenkel").innerHTML = "";
}

$(document).on('click', '.edit_data', function(){
    $('html, body').animate({scrollTop: 0}, 'slow');
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "get_data.php",
        data: {id:id},
        dataType: 'json',
        success: function(response) {
            reset();
            $('html, body').animate({scrollTop: 30}, 'slow');
            document.getElementById("id").value = response.id;
            document.getElementById("nama_mahasiswa").value = response.nama_mahasiswa;
            document.getElementById("tanggal_masuk").value = response.tgl_masuk;
            document.getElementById("alamat").value = response.alamat;
            document.getElementById("jurusan").value = response.jurusan;
            if (response.jenis_kelamin=="Laki-laki") {
                document.getElementById("jenkel1").checked = true;
            } else {
                document.getElementById("jenkel2").checked = true;
            }
        }, error: function(response) {
            console.log(response.responseText);
        }
    });
});

$(document).on('click', '.hapus_data', function(){
    var id = $(this).attr('id');
    var yakin = confirm("Yakinkah Anda?");
    if (yakin){
    $.ajax({
        type: 'POST',
        url: "hapus_data.php",
        data: {id:id},
        success: function() {
            $('.data').load("data.php");
        }, error: function(response) {
            console.log(responseText);
        }
    });
 } else {
     return ;
    } 
});