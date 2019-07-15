<?php
include 'connect_to_db.php';
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$message= $_POST['message'];

if($connection) {
    if (isset($firstname) && isset($lastname) && isset($email) && isset($message)) {
        $sql = "insert into Contact_Us_Form (first_name,last_name,email,message) values ('$firstname','$lastname','$email','$message')";
        mysqli_query($connection, 'use FrontEnd');
        mysqli_query($connection, $sql);

        $subject = 'no-reply';
        $msg = 'Thanks for your valuable feedback.';
        $headers = 'From: noreply@company.com';

//        $ret= mail('himanshu.skb.oo7@gmail.com','no-reply','Thanks');
//        echo ""+$ret;
//        header( "Location: http://".$_SERVER['SERVER_NAME']."/Day3/index.html" );
    } else {
        echo 'Some Values are Undefined';
    }

} else {
    echo 'Not Connected';
}
?>