
<?php
include('Template/head.php');
?>
<?php
include('Template/navigationbar.php');
?>
<hr>
<u><h3>PAyment List details:</h3></u>

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllforUser($conobj,"payment",$_SESSION['username']);

if ($userQuery->num_rows > 0) {
    echo "<div class= 'container'><table class='table table-hover'><thead><th scope='col'>date</th><th scope='col'>quantity</th><th scope='col'>amount</th></tr></thead><tbody >";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["date"]."</td><td>".$row["quantity"]."</td><td>".$row["amount"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>

<?php
include('template/footer.php');
?>