


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>admin page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="mission 40 admin" name="keywords">
  <meta content="" name="description">

     <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css form -->
    <link rel="stylesheet" href="css2/style.css">

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body>
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
                        <form action="insertadmin.php" method="POST" class="register-form">
<select name="year" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
    <option value=""selected disabled>YEAR</option>
    <option value="fy">first</option>
    <option value="sy">second</option>
    <option value="ty">third</option>
    <option value="btech">final</option>
    <option value="mtechfy">mtech fy</option>
    <option value="mtechsy">mtech sy</option>
    
    
  </select>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"  required name="branch">
    <option value="" selected disabled>BRANCH</option>
    <option value="it">it</option>
    <option value="first-year-all-branches">first year all</option>
    <option value="mech">mechanical</option>
    <option value="instru">instru</option>
    <option value="textile">textile</option>
    <option value="productn">production</option>
    <option value="chem">chemical</option>
    <option value="electrical">electrical</option>
    
    <option value="civil">civil</option>
    <option value="cse">cse</option>
    <option value="extc">extc</option></select>
    <select name="sem" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
    <option value="" selected disabled>semister</option>
    <option value="1">Struct A/sem1</option>
    <option value="2">Struct B/sem2</option>
    </select>
    <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name" ></i></label>
                                <input type="text" name="sub" id="your_name" placeholder="subject" required/>
                 
  <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="chaptname" id="your_name" placeholder="chapter-name "required/>
                            </div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name" ></i></label>
                                <input type="text" name="link" id="your_name" placeholder="iframe Link width 100% height 100px" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name" ></i></label>
                                <input type="password" name="password" id="your_name" placeholder="password" required/>
                            </div>
    
                           
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Proceed"/>
                            </div>"
                        </form>
                      
                    </div>
                </div>
            </div>
        </section>

    </div>
    
</body>
</html>
