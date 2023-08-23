  <form method="post" name="registrationform" class="appointment-form" id="appointment-form" enctype="multipart/form-data">
                <h2>Education appointment form</h2>
                <div class="form-group-1">
                  <div>
                  <input type="text" name="username" id="username" placeholder="Enter User Name" value="<?php echo $userdatabyid['Data'][0]->username ?? "" ; ?>" required />
                  </div>
                    <div>
                      <input type="email" name="email" id="email" placeholder="Enter Your Email" value="<?php echo $userdatabyid['Data'][0]->email ?? "" ; ?>" required />
                    </div>
                    <div>
                     <input type="number" name="phone" id="phone" placeholder="Enter Your Mobile Number" value="<?php echo $userdatabyid['Data'][0]->phone ?? "" ; ?>"  required />
                    </div>
                    <div>
                     <input type="date" name="birthdate" id="birthdate" placeholder="Enter Your Birth Date" value="<?php echo $userdatabyid['Data'][0]->birthdate ?? "" ; ?>" required />
                    </div>
                    <div>
                     <input type="password" name="password" id="password" placeholder="Enter Your Password" value="<?php echo $userdatabyid['Data'][0]->password ?? "" ; ?>" required />
                    </div>
                    <div>
                      <input type="file" name="profile_picture" id="profile_picture" accept="image/*" />
                    </div>
                    
                    <div class="select-list">
                        <select name="city" id="city">
                            <option slected value="">-- Select City --</option>
                            <option <?php if (isset($userdatabyid)) {
                                if ($userdatabyid['Data'][0]->city=="Ahmedabad") {
                                    echo "selected";} } ?> value="Ahmedabad">Ahmedabad</option>
                            <option <?php if (isset($userdatabyid)) {
                                if ($userdatabyid['Data'][0]->city=="Baroda") {
                                    echo "selected";} } ?> value="Baroda">Baroda</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <select name="gender" id="gender">
                                <option slected value="">-- Select Gender --</option>
                                <option <?php if (isset($userdatabyid)) {
                                if ($userdatabyid['Data'][0]->gender=="Male") {
                                    echo "selected";} } ?> value="Male">Male</option>
                                <option <?php if (isset($userdatabyid)) {
                                if ($userdatabyid['Data'][0]->gender=="Female") {
                                    echo "selected";} } ?> value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php if (isset($userdatabyid)) {
                               $hobbydata = explode(",",$userdatabyid['Data'][0]->hobbies);
                            } ?>
                            <input type="checkbox"  name="hobbies[]" <?php if (isset($userdatabyid)) {
                                if (in_array("Cricket",$hobbydata)) {
                                    echo "checked";} } ?> id="Cricket" value="Cricket" /> <label class="txt-dark" for="Cricket">Cricket</label>
                            <input type="checkbox" name="hobbies[]" <?php if (isset($userdatabyid)) {
                                if (in_array("Music",$hobbydata)) {
                                    echo "checked";} } ?> id="Music" value="Music" /> <label class="txt-dark" for="Music">Music</label>
                            <input type="checkbox" name="hobbies[]" <?php if (isset($userdatabyid)) {
                                if (in_array("Reading",$hobbydata)) {
                                    echo "checked";} } ?> id="Reading" value="Reading" /> <label class="txt-dark" for="Reading">Reading</label>
                        </div>
                    </div>
                </div>
                <div class="form-submit">
                    <?php if (isset($userdatabyid)) {?>
                    <input type="submit" name="update" id="update" class="submit" value="update" />
                   <?php } else {?>
                    <input type="submit" name="register" id="register" class="submit" value="register" />
                  <?php }?>
                </div>
            </form>