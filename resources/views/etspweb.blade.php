<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Data Barang</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .container{
            padding : 16px;
            width : 500px;
            align-content: center;
            margin : auto;
        }
        input {
            width : 100%;
            padding : 15px;
            margin : 5px 0 22px 0;
            display : inline-block;
            border: none;
            background: rgb(248, 248, 248);
        }
        select{
            width : 100%;
            padding : 15px;
            margin : 5px 0 22px 0;
            display : inline-block;
            border: none;
            background: rgb(248, 248, 248);
        }
        h1 {
            text-align : center;
        }
        .btn {
            background-color : blue;
            color : white;
            padding : 16px 20px;
            border : none;
            margin : 8px 0;
            cursor : pointer;
            width : 100% ;
            opacity : 0.9;
        }
        .btn:hover{
            opacity : 1;
        }
        .error{
            color : red;

        }
    </style>
</head>
<body>
    <p>Aqmarina Nindya Wardono</p>
    <p>Nindy</p>
    <p>5026201126</p>
    <div class="container">
        <h1>Form Input Data Barang</h1>
        <form id="databarang" action="https://www.instagram.com/aqmarinanindya/">
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" id="nama" name="nama" placeholder="" class="form-control" minlength="10" required>
            <span class="error" id="errornama"></span>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" id="harga" name="harga" placeholder="" class="form-control"  min="5000" required>
            <span class="error" id="errorharga"></span>
        </div>
        <div class="form-group">
            <label>Jenis Barang</label>
            <select name="jenis" id="jenis" class="form-control" required>

                <option value="1">Makanan</option>
                <option value="2">Minuman</option>
                <option value="3">Non Mamin</option>
            </select></span>
        </div>
        <div class="form-group">
            <label>Kode Barcode</label>
            <input type="number" id="barcode" name="barcode" placeholder="" class="form-control" minlength="10" pattern required>
            <span class="error" id="errorbarcode"></span>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        </form>

    </div>
</body>
<script type="text/javascript" language="javascript">
$(function(){
    $("#errornama").hide();
    $("#errorharga").hide();
    $("#errorbarcode").hide();

    var error_nama = false;
    var error_harga = false;
    var error_barcode = false;

    $("#nama").focusout(function(){
        check_nama();
    });
    $("#harga").focusout(function(){
        check_harga();
    });
    $("#barcode").focusout(function(){
        check_barcode();
    });

    function check_nama(){
        var nama_length = $("#nama").val().length;
        if (nama_length < 10) {
            $("#errornama").html("minimal 10 karakter");
            $("#errornama").show();
            error_nama=true;
        } else {
            $("#errornama").hide();
        }
    }
    function check_harga(){
        var harga_val = $("#harga").val();
        if (harga_val < 5000) {
            $("#errorharga").html("minimal 5000");
            $("#errorharga").show();
            error_harga=true;
        } else {
            $("#errorharga").hide();
        }
    }
    function check_barcode(){
        var barcode_length = $("#barcode").val().length;
        if (barcode_length < 10) {
            $("#errorbarcode").html("minimal 10 digit angka");
            $("#errorbarcode").show();
            error_barcode=true;
        } else {
            $("#errorbarcode").hide();
        }
    }
    $("#databarang").submit(function(){
        error_nama = false;
         error_harga = false;
        error_barcode = false;

        check_nama();
        check_harga();
        check_barcode();

        if (error_nama == false && error_harga == false && error_barcode == false) {
            return true;
        }else {
            return false;
        }
    });


});
    // function formValidation(){
    //     var nama = document.getElementById('nama').value;
    //     if (nama.length < 10){
    //             document.getElementById('errornama').innerHTML="**Nama barang harus minimal 10 karakter**"
    //     }
    // }
</script>
</html>
