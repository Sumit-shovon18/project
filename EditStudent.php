<!DOCTYPE html>
<html lang="en">
<?php
@include('head.php');
?>
<body>
    <?php
    @include('navbar.php');
    ?>
    <?php
    ?>
    <div class="container">
        <form action="studentList.php">
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id" id="id" aria-describedby="id">
                <div id="id" class="form-text">please Provite a unique id</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
                <div id="emailHelp" class="form-text">insert a name here</div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="test" class="form-control" id="phone" name ="phone">
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="test" class="form-control" id="Address" name ="address">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>