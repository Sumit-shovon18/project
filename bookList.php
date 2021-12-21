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
                <th scope="col">SN</th>
                <th scope="col">ISBN</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                <th scope="row">1</th>
                <td>irfh[eig</td>
                <td>298651987</td>
                <td>6598465498</td>
                <td><a href="EditBook.php"  class="btn btn-success">Edit</a></td>
                <td><a href=""  class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacohirhivhebb</td>
                <td>16519462195</td>
                <td>2+54951</td>
                <td><a href="EditBook.php"  class="btn btn-success">Edit</a></td>
                <td><a href=""  class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">,emnfbher</td>
                <td>2946519</td>
                <td><a href="EditBook.php"  class="btn btn-success">Edit</a></td>
                <td><a href=""  class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>