<?php
// if ($_SESSION['UserData']->username !== "admin") {
//   header("location:home");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admindashboard</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
</head>
<body>
        <!-- Button trigger modal -->
<!-- <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addoredit">
  Add User
</button> -->
    <button onclick="location.href='addoredit'">Add User</button>
    <table class="table table-bordered" style="text-align:center;" border="1" id="datatable" width="100%" cellspacing="0">
        <thead>
            <th>username</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Profile Picture</th>
            <th>City</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>Action</th>
        </thead>
        <tfoot>
            <tr>
             <th>username</th>
             <th>Full Name</th>
             <th>Email</th>
             <th>Mobile Number</th>
             <th>Profile Picture</th>
             <th>City</th>
             <th>Gender</th>
             <th>Hobby</th>
             <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($alluserData['Data'] as $key => $value) { 
                ?>
            <tr>
                <td>
                    <?php echo $value->username ?>
                </td>
                <td>
                    <?php echo $value->fullname ?>
                </td>
                <td>
                    <?php echo $value->email ?>
                </td>
                <td>
                  <?php echo $value->mobile ?>
                </td>
                <td>
                    <img width="50px" src="uploads/<?php echo $value->prof_pic  ?>" alt="">
                </td>
                <td>
                  <?php echo $value->name ?>
                </td>
                <td>
                    <?php echo $value->gender ?>
                </td>
                <td>
                  <?php echo $value->hobby ?>
                </td>
                <td><a href="addoredit?userid=<?php echo $value->userid ?>">Edit</a>
                <a href="delete?userid=<?php echo $value->userid ?>">Delete</a></td>
            </tr>
           <?php }?>
        </tbody>
    </table> 



<!-- Modal -->
<!-- <div class="modal fade" id="addoredit" tabindex="-1" aria-labelledby="addoreditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
 
    </div>
  </div>
</div> -->
</body>
</html>