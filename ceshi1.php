
<?php
//第一种链接mysql数据库的代码方式；
$con = mysqli_connect('localhost','root','rootroot');
if(!$con)
{
    echo "link failly";
}
else
{
   // echo "link successfully";
   // echo $_POST[gonghao];

    mysqli_select_db($con,"finance");
    $sql="insert into yuangonginf(gonghao,name,address) values ('$_POST[gonghao]','$_POST[name]', '$_POST[address]')";

    //if(!mysqli_query($con,"insert into yuangonginf(gonghao,name,address) values ('1002','lisi', 'Wuhan,BayiRoad')"))
    if(!mysqli_query($con, $sql))
    {
        die('Error:'.mysqli_error($con));
    }
    else
    {
        echo "One record added";
        mysqli_close($con);
    }

}