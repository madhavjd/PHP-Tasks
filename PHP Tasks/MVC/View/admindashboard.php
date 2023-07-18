<?php
if ($_SESSION['UserData']->username !== "admin") {
  header("location:home");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admindashboard</title>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
   <button>Add User</button>
    <!-- <button onclick="location.href='addoredit'">Add User</button> -->
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
                    <?php echo $value->usernamee ?>
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
</body>
</html>