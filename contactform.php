<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo ="deyanoklaasen@outlook.com";
    $headers = "From: ".$mailFrom;


    mail();
}