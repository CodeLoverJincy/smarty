<?php
class userclass
{
	function register ($name,$address,$gender,$email,$password)
    {
        $enc=md5($password);
        $qry="insert into form(name,address,gender,email,password)values('".$name."','".$address."','".$gender."','".$email."','".$enc."')";
        $exe=mysql_query($qry); 
        if($exe)
        {
            echo"<script> alert ('Registration successful')</script>";
        }
    else
        {
        echo"<script>alert('Registration unsuccessful')</script>";
        }
    }
function fetchdata()
    {
    $qry="select * from form";
    $exe=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
        {
        $arr[]=$rr;
        }
    return $arr;
    }
    function delete_data($id)
    {
        $qry="DELETE from form WHERE id='".$id."'";
        $exe=mysql_query($qry);
        if($exe)
        {
            echo"<script>alert('deletion success, dattebayo')
            window.location.href='table.php'</script>";
        }
        else
        {
            echo"<script>alert('deletion unsuccess')
            window.location.href='table.php'</script>";

        }
    }
}
?>