<?php
include('Template/head.php');
?>
<?php
include('Template/navigationbar.php');
?>

<h1>Faculty Dashboard</h1>

<h3>Welcome, <?php echo $_SESSION['username'];?> <span><a href='../../control/logout.php'>logout</a></span></h3><br>
<hr>


<div class ="container" style ="margin-top:50px">
    <?php
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->ShowTopRatingBooks($conobj,"books");

    if ($userQuery->num_rows > 0) {
   
    ?>
    <div class ="row">
    <?php 

    while($row = $userQuery->fetch_assoc()) { 
        
        ?>
      <div class = "col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="https://st.depositphotos.com/2197626/4024/v/600/depositphotos_40248497-stock-illustration-blank-book-cover.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["title"]?></h5>
                    <p class="card-text"><?php echo $row["Description"]?></p>
                    <a href="#" class="btn btn-primary">Cart</a>
                    <a href="#" class="btn btn-danger">Buy</a>
                </div>
            </div>
        </div>
    <?php 
    }
    ?>
    </div>
    <?php 
    } else {
        echo "0 results";
    }
    ?>
   
</div>


<br/>
<?php
include('Template/footer.php');
?>