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

        $subject_to_user = "Your Query has been recieved";
        $msg_to_user = "We have recieved your query and it is being reviewed by us. We encouraged you to contact us for futher queries. We will get back to you soon";
        $headers = 'From: admin <admin@xyz.com>';
        mail( $email,$subject_to_user,$msg_to_user,$headers);

        $subject_to_admin = 'A User has submitted a query.';
        $msg_to_admin = "User $firstname $lastname has given a feedback from $email email address. The include message is: $message";
        mail('himanshu.skb.oo7@gmail.com',$subject_to_admin,$msg_to_admin,$headers);
        header( "Location: http://".$_SERVER['SERVER_NAME']."/Day3/index.php" );
    } else {
        echo 'Some Values are Undefined';
    }

} else {
    echo 'Not Connected';
}
?>