<?php
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $city = $_POST['City'];

    $host = 'localhost';
    $user ='root';
    $pass = '';
    $dbname ='testt';

    $connect = mysqli_connect($host, $user, $pass,$dbname);

    $sql = "INSERT into practice(name,email,city) values ('$name','$email', '$city')";

    mysqli_query($connect, $sql);
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $host = 'localhost';
    $user ='root';
    $pass = '';
    $dbname ='testt';

    $conn = mysqli_connect($host, $user, $pass,$dbname);

    $sql1 = "DELETE FROM `practice` WHERE `ID` = $id";

    mysqli_query($conn, $sql1);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <style>

    </style>

<form action="#" method ="POST" >
     <table>
     <tr>
            <td>ID:</td>
            <td><input type="number" name="id"></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="Email"></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="City"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="submit"></td> 
            <td><input type="submit" value="delete" name="delete"></td>
        </tr>
     </table>
</form>
    
</body>
</html>
