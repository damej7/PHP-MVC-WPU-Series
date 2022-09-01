// console.log("OK");

$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });
  $(".tampilModalEdit").on("click", function () {
    // console.log("OK");
    $("#judulModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/wpuphpmvc/public/mahasiswa/edit"
    );
    const id = $(this).data("id");
    // console.log(id);
    // data : {id : id} id kiri adalah nama, id kanan adalah isi data.
    $.ajax({
      url: "http://localhost/wpuphpmvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        // console.log(data);
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
