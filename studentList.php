<!DOCTYPE html>
<html lang="en">
<?php
@include('head.php');
?>
<body>
    <?php
    @include('navbar.php');
    ?>
    <div class= "container">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">phone</th>
                <th scope="col">Address</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><a href="EditStudent.php"  class="btn btn-success">Edit</a></td>
                <td><a href=""  class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><a href=""  class="btn btn-success">Edit</a></td>
                <td><a href=""  class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td><a href=""  class="btn btn-success">Edit</a></td>
                <td><a href=""  class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>