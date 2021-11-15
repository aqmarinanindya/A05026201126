<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

    <style>
        * {
            box-sizing: border-box
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            width: 500px;
            align-content: center;
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password],
        input[type=tel],
        input[type=email],
        input[type=number] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus,
        input[type=tel]:focus,
        input[type=email]:focus,
        input[type=number]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        form {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>




</head>

<body>
    <div class="container">
        <h1>REGISTRATION FORM</h1>
        <form name="regform" action="https://www.instagram.com/aqmarinanindya/" onsubmit="return formValidation()">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" name="name" placeholder="Enter full name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" id="address" name="address" placeholder="Enter full address" class="form-control"
                    required>
            </div>
            <div class="form-group">
                <label>E-mail Address</label>
                <input type="email" id="email" name="email" placeholder="Enter active e-mail" class="form-control"
                    required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="pwd" placeholder="Enter a password" class="form-control"
                    minlength="8" maxlength="16" required>
            </div>
            <div class="form-group">
                <label>Telephone</label>
                <small id="telpHelp" class="form-text text-muted">Enter number with minimum 7 digits</small>
                <input type="tel" id="telephone" name="telephone" placeholder="Enter telephone number"
                    class="form-control" minlength="7" pattern="[0-9]*$" required>
            </div>
            <div class="form-group">
                <label>SELECT YOUR COURSE</label><br>
                <select name="course" id="course" class="form-control" required>
                    <option value=""></option>
                    <option value="1">BTECH</option>
                    <option value="2">BBA</option>
                    <option value="3">BCA</option>
                    <option value="4">B.COM</option>
                    <option value="5">GEEKFORGEEKS</option>
                </select>
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <small id="zipHelp" class="form-text text-muted">Enter 6 digit number</small>
                <input type="number" id="zipcode" name="zipcode" placeholder="Enter zip code" class="form-control"
                    pattern="[0-9]{6}*$" maxlength="6" required>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</body>
<script>
    const name = document.getElementById("name");
    var zipcode = document.getElementById('zipcode').value;
    const course = document.getElementById("course");
    function formValidation() {

        var letters = /^[a-zA-Z\s]*$/;
        var digit = /^\d{6}$/;

        if (name.value.match(letters)) {
            return true;
        }
        else {
            alert("Name should contain letters only");
            name.focus();
            return false;
        }
        if (course.value === "") {
            alert("Please select your course!");
            return false;
        }
        if (zipcode.length != 6) {
            alert("Zip code must be 6 characters long number!");
            zipcode.focus();
            return false;
        }

    }

</script>


</html>
