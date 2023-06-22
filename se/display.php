<?php
//session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>event managements..</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
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
            
          .con{
            
              background-color: rgba(0, 0, 0, 0.5);
              color: #fff;
              top: 50%;
              left: 50%;
              height: 300px;
              width: 500px;
              position: absolute;
              box-sizing: border-box;
              border-radius: 10px;
              transform: translate(-50%,-50%);
              text-align:center;


           }
            
            table{
border-collapse:collapse;
margin: auto;
position:absolute;
left: 100px;
top: 150px;
background-color: rgba(0, 0, 0, 0.5);
color: #fff;
text-align: center;

}
td,th
{
text-align:center;
border: 8px solid black;
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

.navbar-custom {
  background-color: #333333; /* Your custom color */
  
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
          <br>
          <br>
          <br>
          <br>

          <div class="con">
            <br><br>
          <h2 ><b>View details</b></h2>
        <br>
          <form method="post" action="report.php">
            <label for="date">Start date:&nbsp;</label>
                  <input type="date" name="sdate" id="sdate"><br><br>
            <label for="date">End date:&emsp;</label>
                  <input type="date" name="edate" id="edate"><br><br>
            <button type="submit" class="btn btn-secondary" name="report" id="report">Generate report</button>

          </form>
        </div>
          </html>



