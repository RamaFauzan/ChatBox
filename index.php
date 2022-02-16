<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Chat Box</title>
</head>

<body>
    <form action="" method="post" id="FORM_ID">


        <main class="content">
            <div class="container p-0">

                <h1 class="h3 mb-3">Messages</h1>

                <div class="card">
                    <div class="row g-0">
                        <div class="col-12 col-lg-5 col-xl-3 border-right">

                            <div class="px-4 d-none d-md-block">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <input type="text" class="form-control my-3" name="nama_chat" id="nama_chat"
                                            list="dataSiswa" placeholder="Masukan nama..">
                                    </div>
                                </div>
                                List Mahasiswa
                                <hr>
                            </div>
                            <div id="data_mahasiswa">

                            </div>


                            <hr class="d-block d-lg-none mt-1 mb-0">
                        </div>
                        <div class="col-12 col-lg-7 col-xl-9" id="Dion" class="tabcontent">
                            <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                <div class="d-flex align-items-center py-1">
                                    <div class="position-relative">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                            class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1 pl-3">
                                        <strong>Group Chat</strong>
                                        <div class="text-muted small"><em>Active</em></div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-lg mr-1 px-3"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-phone feather-lg">
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                </path>
                                            </svg></button>
                                        <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-video feather-lg">
                                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                            </svg></button>
                                        <button class="btn btn-light border btn-lg px-3"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal feather-lg">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="chat-messages p-4" id="dataChat">
                                </div>
                            </div>

                            <div class="flex-grow-0 py-3 px-4 border-top">
                                <div class="input-group">
                                    <input type="text" name="isi_chat" id="isi_chat" class="form-control"
                                        placeholder="Type your message">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
    <datalist id="dataSiswa">


    </datalist>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$.ajax({
    url: "getMahasiswa.php",

    success: function(data) {
        var hasil = JSON.parse(data);
        $('#data_mahasiswa').html("");
        var html = "";
        var htmls = "";

        var i = 1;
        if (hasil.length > 0) {
            $.each(hasil, function(key, val) {


                html += '<a href="#"  class="list-group-item list-group-item-action border-0">' +
                    '<div class="d-flex align-items-start">' +
                    '<img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">' +
                    '<div class="flex-grow-1 ml-3">' +
                    val.nama_mahasiswa +
                    '<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>' +
                    '</div>' +
                    '</div>' +
                    '</a>';


                htmls += '<option value="' + val.nama_mahasiswa + '" >' + val.nama_mahasiswa +
                    '</option>';

            });
        }


        $('#data_mahasiswa').html(html);
        $('#dataSiswa').html(htmls);
    }
});






$.ajax({
    url: "getChat.php",


    success: function(data) {
        var hasil = JSON.parse(data);
        $('#dataChat').html("");
        var html = "";
        if (hasil.length > 0) {
            $.each(hasil, function(key, val) {

		var tanggal = val.tgl_chat.split(' ');



                html += '<div class="chat-message-right pb-4">' +
                    '<div>' +
                    '<img src="https://bootdey.com/img/Content/avatar/avatar1.png"class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">' +
                    '<div class="text-muted small text-nowrap mt-2">'+tanggal[1]+'</div>' +
                    '</div>' +
                    '<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">' +
                    '<div class="font-weight-bold mb-1">' + val.nama_chat + '</div>' +
                    val.isi_chat +
                    '</div>' +
                    '</div>';


            })
        }
        $('#dataChat').html(html);
    }

});




$(document).ready(function() {
    $("#FORM_ID").submit(function() {
        var name = $("#nama_chat").val();
        var isi = $("#isi_chat").val();

        $.ajax({
            type: "POST",
            url: "addChat.php",
            data: "nama_chat=" + name + "&isi_chat=" + isi,
            success: function(data) {
                alert("sucess");
            }
        });


    });
});
</script>

</html>