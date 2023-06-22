<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>event managements..</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


       
        
         <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">


        <style>
            body{
                background-image:url("https://www.brides.com/thmb/mM05rrms1vCKNavAr8UGFNZvHMQ=/3279x3279/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__brides__proteus__5bb64a4ab2e7ef506361bb51__11-57fb9d6a4fbb4a43a0cad00bcc7fb6c9.jpeg"); 
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size:cover ;
                background-position: center;
                color: azure;
                text-align: center;
                margin: 0%;
                padding: 0%;
                font-family:Verdana, Geneva, Tahoma, sans-serif;
            }
            
           
            .login-form{
              width: 340px;
              height: 240px;
              background-color: rgba(0,0,0,0.5);
              border-radius: 5px;
              color: #fff;
              top: 50%;
              left: 50%;
              position: absolute;
              box-sizing: border-box;
              transform: translate(-50%,-50%);
            }

            
            <!--container-->
          .bcontainer {
            margin-right: auto;
            margin-left: auto;
            width: 250px;
            box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
            height: 300px;
            border-radius: 5px;
            backdrop-filter: blur(14px);
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px;
            text-align: center;
        }

        .alert {
  align-content: center;
  width: 20%;
  background-color: #f44336; /* Red */
  color: white;
  margin-left: 40%;
  margin-top: 0px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}


footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  background-color: #333;
  color: #fff;
  padding: 20px;
  display: flex;
  justify-content: space-between;
}

footer {
  background-color: #333333;
  color: #fff;
  padding: 20px;
  display: flex;
  justify-content: space-between;
}

.social-media-icons a {
  color: #fff;
  font-size: 20px;
  margin-right: 10px;
  transition: color 0.3s;
}

.social-media-icons a:hover {
  color: #1abc9c;
}

.footer-links a {
  color: #fff;
  margin-right: 10px;
  text-decoration: none;
  transition: color 0.3s;
}

.footer-links a:hover {
  color: #fbb03b;
}


.navbar-custom {
  background-color: #333333; /* Your custom color */
  
}


.required::before {
    content: "*";
    color: red;
    margin-right: 5px;
  }

            
        </style>
    </head>
    <body>
      <div>
        <div>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <div class="container">
              <a class="navbar-brand" href="#"><b><i>Ethereal Events</i></b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link "  href="home.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="portfolio.html">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pricing.html">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php" >Login & Book</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
          <br><br><br>

          <!--forms-->
         <div>
          <div class="bcontainer">
            <center>
              <div class="login-form">
                <br>
                <h4><b>LOGIN HERE</b></h4>
                <br>
            <form method='post' action="" >
              <label for="id"><span class="required"></span>Admin Id: </label>
              <input type="text" id="id" name="id"><br><br>
              <label for="pswd"><span class="required"></span>Password:</label>
              <input type="password" id="pswd" name="pswd"><br><br>
              <!--label for="submit"> Submit</label-->
              <button type="submit" class="btn btn-secondary" id="submit" onclick="success()" name="submit">Submit</button>
            </form>
              </div>
            


          </center>
          </div>
        </div>
     </div>   

<footer>
  <div class="social-media-icons">
    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
  </div>

 
  <div class="footer-links">
    <a href="home.html">Home</a>
    <a href="portfolio.html">Portfolio</a>
    <a href="pricing.html">Pricing</a>
    <a href="login.php">Login & Book</a>
     <a href="admin.php">Admin</a>
  </div>
</footer>
      

</body>
</html>         

<?php


error_reporting(E_ERROR | E_PARSE);
$uname=$_POST['id'];
$pswd=$_POST['pswd'];

if(isset($_POST['submit']))
{
if($uname=='parlat' && $pswd=='12345')
{
  
?>
  <script>
  window.location.href = "adminprocess.php";
</script>
<?php
  $_SESSION['loggedin']=true;
  //exit();
  }

  else
  {
    if(empty($uname) || empty($pswd))
    {

    if (empty($pswd) && empty($uname)) {
      ?>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Enter username and password ..
    </div>
<?php
    } 
    elseif(empty($uname))
    {
      ?>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Enter username..
    </div>
<?php
    }
    else {
      ?>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Enter password..
    </div>
<?php
    }
     
    }
    
    else
    {
    $loginFailed=false;
    }
  }
}

if(isset($loginFailed)) {

  ?>

    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Invalid username and password..
    </div>
    
<?php
  
  }

?>




