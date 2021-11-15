<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Number Checker</title>
<style>
    body {
    background: rgb(199,206,199);
    background: linear-gradient(90deg, rgba(199,206,199,0.9538143382352942) 0%, rgba(142,142,175,1) 42%, rgba(169,208,216,1) 99%);
    text-align: center;
    margin : 0 auto 0 auto;
    width : 100%;
    margin : 20px 0px 20px 0px;
    font-family : 'Hind Madurai', sans-serif;
    font-weight : 700px;


}
.container{
    justify-content: center;
    width : 400px;
    padding : 10px;
    align-items : center;
    position : fixed;
    background-color : white;
    border-radius : 9px;
    top : 50%;
    left : 50%;
    transform: translate(-50%, -50%);
    box-shadow :8px 10px 8px black;
}
button {
    height: 40px;
            width: 150px;
            margin-top: 20px;
            align-items: center;
            background-color: white;
}
    </style>
</head>

<body>
<div class="container">
    <h1>Palindrome Number Checker</h1>
<form method="post">
Enter a Number: <input type="text" name="num" /><br>
<button type="submit" name="submit">Check</button>
</div>
</form>
<?php
if(!empty($_POST['num'])){
    $num = $_POST['num'];
     isPalindrome($num);
} else {
    echo "Please enter a number";
}

function isPalindrome($num){
    $rev = strrev($num);
    if($num == $rev){
        echo "The number $num is a Palindrome";
    }else{
        echo "The number $num is not a Palindrome";
    }
}
?>
</body>
</html>
