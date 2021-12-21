<?php
    $con = mysqli_connect('localhost', 'root');
    if($con)
    {
        echo "Connection Successfull!";
    }else{
        echo "No Connection!";
    }

    mysqli_select_db($con, 'luxury_rentals');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $model = $_POST['model'];
    $days = $_POST['days'];
    $city = $_POST['city'];
    $comments = $_POST['comments'];

    $query = "INSERT into contact_data (name, email, mobile, model, days, city, comments) 
            values ('$name','$email','$mobile','$model','$days','$city','$comments')";

    
    mysqli_query($con, $query);

    header('location:contacts.php');
?>