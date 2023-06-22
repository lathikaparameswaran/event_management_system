<?php?>
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
              background-color: rgba(255, 255, 255, 0.5);
              
            }

            table{
              width: 90%;
border-collapse:collapse;
margin: auto;
position:absolute;
left: 5%;
top: 30%;
background-color: rgba(0, 0, 0, 0.5);
color: #fff;
text-align: center;

}
td,th
{
text-align:center;
border: 3px solid black;
  border-collapse: collapse;
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

  </body>
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
          
          
</body>
  </html>

  <div class="con">
<h1 style="color: #404040;"><b>Report</b></h1>
</div>

<?php
  include "connection.php";

error_reporting(E_ERROR | E_PARSE);




$sdate=$_POST['sdate'];
$edate=$_POST['edate'];

$a=1;

//$_SESSION['start'] = $sdate;
//$_SESSION['end'] = $edate;
if(isset($_POST['report']))
{
   

  if(!empty($sdate) && !empty($edate))
  {
  	
      $sql="SELECT * from login_details where event_date between '$sdate' and '$edate' ";
$result = $con->query($sql);

// Check for errors
if (!$result) {
    die("Failed to retrieve data from MySQL: " . $con->error);
              }
else
{
  
  if (mysqli_num_rows($result) == 0) {

    

    ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  There are no events happening in these dates.
  </div>
<?php
  
    
  }
else
{
echo "<center>";
echo "<table >";
echo "<tr><th>ID </th><th>Name </th> <th>Phone Number </th> <th>Event date </th>  <th>Event name </th> <th>Count </th> <th>Plan </th></tr>";

// Loop through the result set and display the data
while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>"  .  $a      . "</td>";
  echo "<td>"  .  $row["name"]    . "</td>";
  echo "<td>"  .  $row["phnum"]   . "</td>";
  echo "<td>"  .  $row["event_date"] . "</td>";
  echo "<td>"  .  $row["event_name"] . "</td>";
  echo "<td>"  .  $row["count"]   . "</td>";
  echo "<td>"  .  $row["plan"]    . "</td>";
   
    echo "<br>";
   echo "</tr>";
   $a=$a+1;

}

echo "</table>";
echo "<br><br><br><br>";


}


echo "</center>";

$con->close();
}


}
//when both dates are empty

else if(empty($sdate) && empty($edate))
{
      $sql="SELECT * from login_details ";
$result = $con->query($sql);

// Check for errors
if (!$result) {
    die("Failed to retrieve data from MySQL: " . $con->error);
              }
else
{
  
  if (mysqli_num_rows($result) == 0) {

    

    ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  There are no events happening in these dates.
  </div>
<?php
  
    
  }
else
{
echo "<center>";
echo "<table >";
echo "<tr><th>ID </th><th>Name </th> <th>Phone Number </th> <th>Event date </th>  <th>Event name </th> <th>Count </th> <th>Plan </th></tr>";

// Loop through the result set and display the data
while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>"  .  $a      . "</td>";
  echo "<td>"  .  $row["name"]    . "</td>";
  echo "<td>"  .  $row["phnum"]   . "</td>";
  echo "<td>"  .  $row["event_date"] . "</td>";
  echo "<td>"  .  $row["event_name"] . "</td>";
  echo "<td>"  .  $row["count"]   . "</td>";
  echo "<td>"  .  $row["plan"]    . "</td>";
   
    echo "<br>";
   echo "</tr>";
   $a=$a+1;

}

echo "</table>";
echo "<br><br><br><br>";


}


echo "</center>";

$con->close();
}

}

//when end date is empty
else if(!empty($sdate))
{

      $sql="SELECT * from login_details where event_date >='$sdate'  ";
$result = $con->query($sql);

// Check for errors
if (!$result) {
    die("Failed to retrieve data from MySQL: " . $con->error);
              }
else
{
  
  if (mysqli_num_rows($result) == 0) {

    

    ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  There are no events happening in these dates.
  </div>
<?php
  
    
  }
else
{
echo "<center>";
echo "<table >";
echo "<tr><th>ID </th><th>Name </th> <th>Phone Number </th> <th>Event date </th>  <th>Event name </th> <th>Count </th> <th>Plan </th></tr>";

// Loop through the result set and display the data
while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>"  .  $a      . "</td>";
  echo "<td>"  .  $row["name"]    . "</td>";
  echo "<td>"  .  $row["phnum"]   . "</td>";
  echo "<td>"  .  $row["event_date"] . "</td>";
  echo "<td>"  .  $row["event_name"] . "</td>";
  echo "<td>"  .  $row["count"]   . "</td>";
  echo "<td>"  .  $row["plan"]    . "</td>";
   
    echo "<br>";
   echo "</tr>";
   $a=$a+1;

}

echo "</table>";
echo "<br><br><br><br>";


}


echo "</center>";

$con->close();
}

}

//when start date is empty
else if(!empty($edate))
{
      $sql="SELECT * from login_details where event_date <= '$edate' ";
$result = $con->query($sql);

// Check for errors
if (!$result) {
    die("Failed to retrieve data from MySQL: " . $con->error);
              }
else
{
  
  if (mysqli_num_rows($result) == 0) {

    

    ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  There are no events happening in these dates.
  </div>
<?php
  
    
  }
else
{
echo "<center>";
echo "<table >";
echo "<tr><th>ID </th><th>Name </th> <th>Phone Number </th> <th>Event date </th>  <th>Event name </th> <th>Count </th> <th>Plan </th></tr>";

// Loop through the result set and display the data
while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>"  .  $a      . "</td>";
  echo "<td>"  .  $row["name"]    . "</td>";
  echo "<td>"  .  $row["phnum"]   . "</td>";
  echo "<td>"  .  $row["event_date"] . "</td>";
  echo "<td>"  .  $row["event_name"] . "</td>";
  echo "<td>"  .  $row["count"]   . "</td>";
  echo "<td>"  .  $row["plan"]    . "</td>";
   
    echo "<br>";
   echo "</tr>";
   $a=$a+1;

}

echo "</table>";
echo "<br><br><br><br>";


}


echo "</center>";

$con->close();
}

}

else
{
  
  ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  Enter valid start and end date.
  </div>
<?php
  
}


}





//$sdate=$_SESSION['start'] ;
//$edate=$_SESSION['end'] ;
// Run a SQL query to retrieve data from the database
//$sql = "SELECT id,name,phnum,event_date,event_name,count,plan from login_details where between '$sdate' and '$edate' ";

?>





