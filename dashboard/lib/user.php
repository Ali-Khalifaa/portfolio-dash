<?php

function AddNewUser($name,$email,$password){
    $connectio = mysqli_connect("localhost","root","","portfolio-dash");

    $insert_query = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    
    mysqli_query($connectio,$insert_query);
    
    $res = mysqli_affected_rows($connectio);

    if ($res == 1) {
        return true ;
    }else{
        return false ;
    }
}


function login($email,$password){
    $connectio = mysqli_connect("localhost","root","","portfolio-dash");
    $select_query = "SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'";
    
   $query = mysqli_query($connectio,$select_query);

   $res = mysqli_fetch_assoc($query);

   return $res;
}