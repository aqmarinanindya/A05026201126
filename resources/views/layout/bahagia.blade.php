<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<style>
    .w3-container-1{
        text-align: right;
        margin-left: 200px;
        margin-right : 20px;
        margin-bottom : 60px;
        padding : 20px;

    }
    img {
        border-radius : 60px;
    }
    .w3-container-2 {
        margin-left : 20px;
        margin-bottom : 60px;
    }
    footer {
        text-align : center;
        background-color : black;
        color : white;
        font-weight : bold;
        padding : 40px;
    }
    h3{
        margin-left : 20px;
    }
</style>
<body>
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
        <h3>Menu</h3>
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>

        <a href="/pegawai" class="w3-bar-item w3-button">Data pegawai</a>
        <a href="/absen" class="w3-bar-item w3-button">Data Absensi</a>
        <a href="/mutasi" class="w3-bar-item w3-button">Data Mutasi</a>
        <a href="#" class="w3-bar-item w3-button">Minggu Depan</a>
        <a href="#" class="w3-bar-item w3-button">Praktikum</a>
      </div>

      <div class="w3-main" style="margin-left:200px">
      <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>

    <div class="w3-container-1">
          <img src="https://media-exp1.licdn.com/dms/image/C4E03AQFcfkKsxmHAiw/profile-displayphoto-shrink_200_200/0/1638981859957?e=1644451200&v=beta&t=Zql8oKvWVbqNUukZiRNfm9AefeBRSzyomeKXyvDKYLk" width=100px>
          <p>Aqmarina Nindya Wardono</p>
          <p>5026201126</p>
        </div>
        </div>


      <div class="w3-container-2" >

        @section('konten')
        @show
      </div>
    </div>

      <script>
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
      }

      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
      }
      </script>

<footer>
    <p>Hak Cipta oleh<br>
    5026201126 - Aqmarina Nindya Wardono</p>
  </footer>





</body>

</html>

