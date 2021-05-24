<?php
if(isset( $_POST['submit'])) {
    $name = $_POST['name'];
    $mailForm = $_POST['email'];
    $message = $_POST['message'];



$mailTO = "nicolasphan@hotmail.fr";
$headers = "From: ".$mailForm;
$txt = "you have a message".$name".\n\n".$message;

mail($mailTO, $name, $txt, $headers);

header("Location: Index.html?MessageSent");

 }
?>