<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host="localhost";
$user="root";
$password="";
$db="ruzlanpanda";
$connec= new mysqli($host,$user,$password,$db);
if($connec->connect_error){
    die($connec->connect_error);
}