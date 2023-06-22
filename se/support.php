<?php


error_reporting(E_ERROR | E_PARSE);
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];

if(isset($_POST['report']))
{
   

  if(!empty($sdate) && !empty($edate))
  {
      include "connection.php";
// Run a SQL query to retrieve data from the database
$sql = "SELECT * FROM login_details";
$result = $con->query($sql);

// Check for errors
if (!$result) {
    die("Failed to retrieve data from MySQL: " . $con->error);
}
else
{
  
  ?>
  <h1><b>User Details</b></h1>
  <?php
echo "<center>";
echo "<table >";
echo "<tr><th>ID </th><th>Name </th> <th>Phone Number </th> <th>Event date </th>  <th>Event name </th> <th>Count </th> <th>Plan </th><th>Booking Status</th></tr>";
// Loop through the result set and display the data
while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>" .  $row["id"] . "</td>";
  echo "<td>"  .  $row["name"] . "</td>";
  echo "<td>"  .   $row["phnum"] . "</td>";
  echo "<td>"  .  $row["event_date"] . "</td>";
  echo "<td>"  .  $row["event_name"] . "</td>";
  echo "<td>"  . $row["count"] . "</td>";
  echo "<td>"  .  $row["plan"] . "</td>";
   echo "<td><input type='checkbox' name='selected[]' value='" . $row["id"] . "'></td>";
    echo "<br>";
   echo "</tr>";


}

echo "</table>";
echo "<br><br><br><br>";
?>
<button type="submit"  class="btn btn-secondary" name="submit" id="sub">Save</button>
<?php
echo "</center>";

}


// Close the database connection
$con->close();
  }
  else
{
  
  echo "Enter valid start and end date";
  
}

}

?>