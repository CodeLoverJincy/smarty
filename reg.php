<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['name'])AND($_POST['name'])!=null) 
{
if(isset($_POST['address'])AND($_POST['address'])!=null)
{
if(isset($_POST['gender'])AND($_POST['gender'])!=null) 
{
if(isset($_POST['email'])AND($_POST['email'])!=null)
{
if(isset($_POST['password'])AND($_POST['password'])!=null)
{
    $name=trim($_POST['name']); 
    $address=trim($_POST['address']);
    $gender=trim($_POST['gender']);  
    $email=trim($_POST['email']); 
    $password=trim($_POST['password']);
    $obj->register($name,$address,$gender,$email,$password);
}
else 
echo"<script> alert ('password is empty')</script>";
}  
else 
echo"<script> alert ('email is empty')</script>";
}
else 
echo"<script> alert ('gender is empty')</script>";
}
else 
echo"<script> alert ('address is empty')</script>";
}
else 
echo"<script> alert ('name is empty')</script>";
}
$smartyObj->display ('reg.tpl');
?>