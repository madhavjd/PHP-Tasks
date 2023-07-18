<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <form  method="post" id="commonform" enctype="multipart/form-data">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" placeholder="Enter Username" value="<?php echo $userDataById['Data'][0]->username ??""; ?>"><br>
        </div>
        <div  class="form-group">
          <label for="fullname">Fullname</label>
          <input type="text" name="fullname" id="fullname" placeholder="Enter Fullname" value="<?php echo $userDataById['Data'][0]->fullname ??""; ?>"><br>
        </div>
        <div  class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter email" value="<?php echo $userDataById['Data'][0]->email ??""; ?>"><br>
        </div>
        <div class="form-group">
          <label for="mobile">Mobile</label>
          <input type="tel" name="mobile" id="mobile" placeholder="Enter mobile" value="<?php echo $userDataById['Data'][0]->mobile ??""; ?>"><br>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter password" value="<?php echo $userDataById['Data'][0]->password ??""; ?>"><br>
        </div>
        <div  class="form-group">
          <label for="prof_pic">Profile Picture</label>
            <?php if (isset($userDataById)) {?>
                <input type="hidden" name="old_prof_pic" value="<?php echo $userDataById['Data'][0]->prof_pic ??""; ?>" id="prof_pic">
            <?php } ?>
          <input type="file" name="prof_pic" accept="image/*" id="prof_pic"><br>
        </div>
        <div class="form-group">
         <select name="city" id="city">
            <option value="">Select City</option>
            <?php foreach ($citiesData['Data'] as $key => $value) {  ?>
                <option <?php if(isset($userDataById)){
                    if ($userDataById['Data'][0]->city == $value->id) {
                    echo "selected";}
                    } ?> value="<?php echo $value->id;?>"><?php echo $value->name; ?></option>
           <?php } ?>
         </select>
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <input type="radio" name="gender" <?php if (isset($userDataById)) {
            if ($userDataById['Data'][0]->gender == "Male") {echo "checked";}}?> value="Male" id="Male">
          <label for="Male">Male</label>
          <input type="radio" name="gender" <?php if(isset($userDataById)){if($userDataById['Data'][0]->gender == "Female"){echo "checked";}} ?>   value="Female" id="Female"> 
          <label for="Female">Female</label>
        </div>
        <div class="form-group">
          <?php
            if (isset($userDataById)) {
            $hobbydata = explode(",",$userDataById['Data'][0]->hobby);
             }
          ?>
            <label for="Hobbies">Hobbies</label>

            <input type="checkbox"  name="hobbies[]" <?php if (isset($userDataById)) {if (in_array("Cricket",$hobbydata)) {echo "checked";}} ?> value="Cricket" id="Cricket">
            <label for="Cricket">Cricket</label>

            <input type="checkbox" name="hobbies[]" <?php if (isset($userDataById)) {if (in_array("Music",$hobbydata)) {echo "checked";}} ?>   value="Music" id="Music">
            <label for="Music">Music</label>

            <input type="checkbox" name="hobbies[]" <?php if (isset($userDataById)) {if (in_array("Reading",$hobbydata)) {echo "checked";}} ?>  value="Reading" id="Reading">
            <label for="Reading">Reading</label>

            <input type="checkbox" name="hobbies[]" <?php if (isset($userDataById)) {if (in_array("Travelling",$hobbydata)) { echo "checked"; } } ?> value="Travelling" id="Travelling">
            <label for="Travelling">Travelling</label>
        </div>
        <div>
            <?php if (isset($userDataById)) {?>
            <input type="submit" name="update" value="update" id="">
           <?php }else{?>
            <input type="submit" name="insert" value="Add" id="">
          <?php }?>
        </div>
    </form>
</body>
</html>