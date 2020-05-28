<?php 

include("connect.php");
if(isset($_POST['submit'])){

    $year=$_POST['year'];
    $branch=$_POST['branch'];
    $sub=$_POST['sub'];
    $sem=$_POST['sem'];
    $chptname=$_POST['chaptname'];
    $link=$_POST['link'];
    $password=$_POST['password'];
    if($password!='chalnigh'){

    echo "password error";
    echo "<a href='admin.php'>go back</a>";


    } else {
$q="INSERT INTO `demo2`( `year`, `branch`,`sem`, `sub`, `link`, `chaptname`) VALUES ( '$year', '$branch','$sem','$sub','$link', ' $chptname')";
$res=mysqli_query($con,$q);  
header("Location:admin.php");
    }
    


}

?>