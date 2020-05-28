

<!DOCTYPE html>
<html lang="en">
<head>
 <title> mission40  sggs question papers and notes at one place </title>
 <link rel="canonical" href="mission40.ga/#khalija/" />
<!-- Global site tag (gtag.js) - Google Analytics -->

<link rel="icon" href="icon.ico">
<meta http-equiv = "content-language" content = "en">
<meta name="google-site-verification" content="RYXHnVcihM7I75dGfgTKd56dNCkZ4JHh0CaxK2ss_JI" />
  <meta charset="utf-8">
 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="this is home page of mission 40 of sggs site">
  <meta name="keywords" content="mission 40,mission fourty,mission forty,sggs,sggs question papers,">
  <meta name="author" content="padmakar kasture">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Font Icon -->


    <!-- Main css form -->
    <link rel="stylesheet" href="css2/style.css">

  

  <!-- Google Fonts -->
 

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<style>
  html {
  scroll-behavior: smooth;
}
footer{
  text-align: center;
  padding-top: 10px;
  padding-bottom: 30px;
  color:white;
  background-color:black;
  border-color: orange;

}
.foot{

}
</style>
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

     

     
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <main id="hero">

    <div class="hero-container">
      <h1>Welcome to MISSION 40 . GA</h1>
      <h2>question papers , notes at one place(http://mission40.ga)</h2>
      <a href="#khalija" class="btn-get-started">Click Me</a>
    </div>
  </main><!-- #hero -->



    <div class="main">

   
        <!-- Sing in  Form -->
        <section class="sign-in" id="khalija">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">CHOOSE</h2>
                        <form action="subject.php" method="POST" class="register-form" id="login-form">
                         <select name="year" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
    <option value="" selected disabled>YEAR</option>
    <option value="fy">first year</option>
    <option value="sy">second year</option>
    <option value="ty">Third year</option>
    <option value="btech">final year</option>
  </select>
  <select name="branch" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
    <option value="" selected disabled>BRANCH</option>
   

    <?php 
    include("connect.php");
    $res1=mysqli_query($con,'select distinct branch from demo2');
       while( $br = mysqli_fetch_array($res1)){
        echo $br['branch'];
        
    echo "<option value=". $br['branch'].">". $br['branch']."</option>";
      
    }
    ?>
  
    
  </select>
    <select name="sem" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
    <option value="" selected disabled>SEMISTER</option>
    <option value="1">struct A/sem1</option>
    <option value="2">struct B/sem2</option>
 
  </select>
    
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Proceed"/>
                            </div>
                        </form>
                      
                    </div>
                </div>
            </div>
           
           

        </section>
     
    </div>
  








 
    <!-- JS -->
   
</body>
</html>