<?php
include("connect.php");
$year=$_POST["year"];

$branch=$_POST["branch"];
$sem=$_POST["sem"];
if($branch=='first-year-all-branches'){
	$q1=mysqli_query($con,"SELECT distinct sub from demo2 where  branch='$branch' AND sem='$sem'");
	
}else {
$q1=mysqli_query($con,"SELECT distinct sub from demo2 where branch='$branch' AND year='$year' AND sem='$sem'");

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>subjects</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="stylesheet" type="text/css" href="csssub/main.css">
<!--===============================================================================================-->
</head>
<body>


	

				
<?php 
if(mysqli_num_rows($q1) > 0){
	?>
    <div class="container-contact100">
		<div class="wrap-contact100">
		
				<span class="contact100-form-title">
					choose 
				</span>
<?php
while($row=mysqli_fetch_array($q1)){
	

?>
			
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<?php
						 echo "<a target='_blank' href='last.php?year=".$year."&branch=".$branch."&sem=".$sem."&sub=".$row['sub']."'>";
						?>
						<button  class="contact100-form-btn">
							<span>
						<?php 	echo $row['sub']; ?>
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button><a>
					</div>
				</div>
				


<?php } }else{
    ?>
       <div class="container-contact100">
		<div class="wrap-contact100">
		
				<span class="contact100-form-title">
					sorry!! <br>1.we will update soon <br> 2.try another sem/year <br>
				</span>
    	<div class="container-contact100-form-btn">
        <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
               
        </div>
    </div>
    

    <?php
}?>








			</form>
		</div>
	</div>



<!--===============================================================================================-->

	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->



	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

