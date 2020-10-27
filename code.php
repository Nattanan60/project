<?php 
include('includes/dbconfig.php');
session_start();

if(isset($_POST['save_push_data']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
    ];

   $ref = "users/";
   $postdata = $database->getReference($ref)->push($data);
}