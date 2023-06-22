
<!DOCTYPE html>
<html>
    <head>
        <title>event management-portfolio</title>
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
             #image {
        height: 200px;
        width: 200px;
        background: url("/https://th.bing.com/th/id/OIP.cjorQdNtnmgbtYGjzziokwHaLF?pid=ImgDet&w=1600&h=2396&rs=1");
        background-size: 200px 200px;
             }
            body
            {
                
                background-image:url("https://www.brides.com/thmb/mM05rrms1vCKNavAr8UGFNZvHMQ=/3279x3279/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__brides__proteus__5bb64a4ab2e7ef506361bb51__11-57fb9d6a4fbb4a43a0cad00bcc7fb6c9.jpeg") ;
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
              width: 500px;
              height: 400px;
              background-color: rgba(0, 0, 0, 0.5);
              color: #fff;
              top: 50%;
              left: 50%;
              position: absolute;
              box-sizing: border-box;
              border-radius: 10px;
              transform: translate(-50%,-50%);
              text-align:center;
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
  background-color: red; /* Red */
  color: white;
  margin-left: 40%;
  margin-top: 0px;
 
}

.message {
  position: absolute;
  align-content: center;
  width: 20%;
  background-color: green; /* Red */
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


.required::before {
    content: "*";
    color: red;
    margin-right: 5px;
  }

footer {
  background-color: #333333;
  color: #fff;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  position: fixed;
  bottom: 0%;
  width: 100%;
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
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <div class="container">
              <a class="navbar-brand" href="#"><b><i>Ethereal Events</i></b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link"  href="home.html" >Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="portfolio.html">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pricing.html">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php"  >Login & Book</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <center>
            <div class="bcontainer">
            <br>
            <br>
          
          <div class="login-form">
            <br>
            <h4>
              <b>CONTACT US</b>           
           </h4>
           <br>

          <form  action=" " method="post"  >
                <p>
                <label for="name"><span class="required"></span>Name:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;</label>
                <input type="text" id="name" name="name"><br>
                </p>

                <p>
                <label for="ph"><span class="required"></span>Phone Number:&emsp;&emsp;</label>
                <input type="number" name="ph" id="ph" maxlength="10"><br>
                </p>

                <p>
                <label for="e_name"><span class="required"></span>Name of the event:</label>
                <input type="text" name="e_name" id="e_name"><br>
                </p>

                <p>
                  <label for="date"><span class="required"></span>Date of the event:&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;</label>
                  <input type="date" name="date" id="date"><br>
                  </p>
                  
                <p>
                <label for="count"><span class="required"></span>No. of attendees:&emsp;</label>
                <input type="number" id="count" min="15" name="count"><br>
                </p>

                <p>
                <label for="price" ><span class="required"></span>Select the plan:&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </label>
                <select name="plan" id="price">
                  <option value="basic plan">Basic Plan</option>
                  <option value="premium plan">Premium Plan</option>
                </select>
                <br>
                </p>

                <button type="submit"  class="btn btn-secondary" name="submit" id="sub">Submit</button>&emsp;&emsp;
                <button type="reset" class="btn btn-secondary" name="rst" id="rst">Reset</button>
                
                
           
          </form>
          </div>
        </div>
        </center>
        

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
include("connection.php");


  $name=$_POST['name'];
  $ph=$_POST['ph'];
  $e_name=$_POST['e_name'];
  $date=$_POST['date'];
  $count=$_POST['count'];
  $plan=$_POST['plan'];



if(isset($_POST['submit']))
{
  if(!empty($name) && !empty($ph)  && !empty($e_name) && !empty($date) && !empty($count) && !empty($plan))
  {
    $query="insert into login_details values('','$name',$ph,'$date','$e_name', $count ,'$plan','')";
    $res=mysqli_query($con,$query);

  if($res)
  {
    
?>

    <div class="message">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Your details have been submitted.You will get a confirmation call within a week
    </div>
<?php
    
  }
  else
  {
    ?>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Connection Unsuccessfull.
    </div>
    <?php
    
  }
}
  else
  {
    ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  All fields must be entered..
  </div>
<?php
    
  }
  
}



