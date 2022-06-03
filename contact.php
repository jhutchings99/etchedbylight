<?php 
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $comments = $_POST['Comments'];
    $submit = $_POST['Submit'];
    $to = 'contact@etchedbylight.com';

    $message = " \n
                 From: $name\n
                 Email: $email\n
                 Subject: $subject\n
                 Message: $comments\n
                 ";


    if ($submit) {
        if (mail ($to, $subject, $message)) {
            header("Location:thankyou.html");
    }
        else {
            header("Location:error.html");
    }
    }
?>