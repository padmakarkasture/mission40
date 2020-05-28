<?php
include("connect.php");
$year=$_GET["year"];
$sem=$_GET["sem"];
$branch=$_GET["branch"];
$sub=$_GET["sub"];
$qc=mysqli_query($con,"select chaptname from demo2 where year='$year' AND sem='$sem' AND branch='$branch' AND sub='$sub' ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>pdf</title>
    <style>
          html {
  scroll-behavior: smooth;
}
      body{
        background-color: #ff9d00;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg stroke='%23000' stroke-width='68.2' stroke-opacity='0.09' %3E%3Ccircle fill='%23ff9d00' cx='0' cy='0' r='1800'/%3E%3Ccircle fill='%23fb8d17' cx='0' cy='0' r='1700'/%3E%3Ccircle fill='%23f47d24' cx='0' cy='0' r='1600'/%3E%3Ccircle fill='%23ed6e2d' cx='0' cy='0' r='1500'/%3E%3Ccircle fill='%23e35f34' cx='0' cy='0' r='1400'/%3E%3Ccircle fill='%23d85239' cx='0' cy='0' r='1300'/%3E%3Ccircle fill='%23cc453e' cx='0' cy='0' r='1200'/%3E%3Ccircle fill='%23be3941' cx='0' cy='0' r='1100'/%3E%3Ccircle fill='%23b02f43' cx='0' cy='0' r='1000'/%3E%3Ccircle fill='%23a02644' cx='0' cy='0' r='900'/%3E%3Ccircle fill='%23901e44' cx='0' cy='0' r='800'/%3E%3Ccircle fill='%23801843' cx='0' cy='0' r='700'/%3E%3Ccircle fill='%236f1341' cx='0' cy='0' r='600'/%3E%3Ccircle fill='%235e0f3d' cx='0' cy='0' r='500'/%3E%3Ccircle fill='%234e0c38' cx='0' cy='0' r='400'/%3E%3Ccircle fill='%233e0933' cx='0' cy='0' r='300'/%3E%3Ccircle fill='%232e062c' cx='0' cy='0' r='200'/%3E%3Ccircle fill='%23210024' cx='0' cy='0' r='100'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
      }
      h1{
          color:white;
      }
      .container{
          padding-top:100px;
      }
    </style>
</head>
<body>
  <header>
      <div class="fixed-top">  <nav class="navbar sticky-top     navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">chapters menu</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php
          while($row=mysqli_fetch_array($qc)){
              ?>
            <li class="nav-item active">
              <a class="nav-link"  href="#<?php echo $row['chaptname']; ?>"><?php echo $row['chaptname']; ?> <span class="sr-only">(current)</span></a>
            </li>
          <?php } ?>
          </ul>
      
        
      </nav>
          </div>
      </div>
    <section>
        <div class="container">
        <?php
        $qc=mysqli_query($con,"select chaptname from demo2 where year='$year' AND sem='$sem' AND branch='$branch' AND sub='$sub' ");
    if($qc){
    while($row=mysqli_fetch_array($qc)){
        echo" <div id='".$row['chaptname']."'>
        <h1>";
        echo $row['chaptname'];
        echo "</h1></div>

        ";
      
      $ql="select link from demo2 where  year='$year' AND sem='$sem' AND branch='$branch' AND sub='$sub' AND chaptname='$row[chaptname]' ";
      $res1=mysqli_query($con,$ql);
      while($row2=mysqli_fetch_array($res1)){
          echo $row2['link'];


          }
    }

}?>

</div>

    </section>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>