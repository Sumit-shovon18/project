
<?php
include('Template/head.php');
?>
<?php
include('Template/navigationbar.php');
?>
<hr>
<u><h3>Book details:</h3></u>
<?php  ?>
<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllforUser($conobj,"purchase", $_SESSION['username']);

if ($userQuery->num_rows > 0) {
    
    echo "<div class= 'container'><table class='table table-hover'><thead><th scope='col'>Book Id </th><th scope='col'>Payment id  </th><th scope='col'>Quantity</th><th scope='col'>Unit Price </th><th scope='col'>Date </th></tr></thead><tbody >";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
        // print_r( $row);
      echo "<tr><td>".$row["book_id"]."</td><td>".$row["payment_id"]."</td><td>".$row["quantity"]."</td><td>".$row["quantity"]."</td><td>".$row["unite_price"]."</td><td>".$row["unite_price"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>

<?php
include('template/footer.php');
?>