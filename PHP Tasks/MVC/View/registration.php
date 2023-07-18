<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>


    <script>
        // if (window.history.replaceState) {
        //     window.history.replaceState(null, null, window.location.href);
        // }
    </script>
    
</head>

<body>

    <a href="home">
        <i class="zmdi zmdi-home cust-class"></i>
    </a>
    <div class="main">

        <div class="container">


            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>Education appointment form</h2>
                <div class="form-group-1">
                  <div>
                  <input type="text" name="username" id="username" placeholder="Enter User Name" required />
                  </div>
                    <div class="row just-spc">
                        <div class="col">
                            <input type="text" name="fname" id="fname" placeholder="Enter Your First Name" required />
                        </div>
                        <div class="col">
                            <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name" required />
                        </div>
                    </div>
                    <div>
                      <input type="email" name="email" id="email" placeholder="Enter Your Email" required />
                    </div>
                    <div>
                     <input type="number" name="mobile" id="mobile" placeholder="Enter Your Mobile Number" required />
                    </div>
                    <div>
                     <input type="password" name="password" id="password" placeholder="Enter Your Password" required />
                    </div>
                    <div>
                      <input type="file" name="prof_pic" id="prof_pic" accept="image/*" />
                    </div>
                    
                    <div class="select-list">
                        <select name="city" id="city">
                            <option slected value="">-- Select City --</option>
                            <option value="1">Ahmedabad</option>
                            <option value="2">Baroda</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="gender" id="Male" value="Male" /> <label class="txt-dark" for="Male">Male</label>
                            <input type="radio" name="gender" id="Female" value="Female" /> <label class="txt-dark" for="Female">Female</label>
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="checkbox" name="hobby[]" id="Cricket" value="Cricket" /> <label class="txt-dark" for="Cricket">Cricket</label>
                            <input type="checkbox" name="hobby[]" id="Music" value="Music" /> <label class="txt-dark" for="Music">Music</label>
                            <input type="checkbox" name="hobby[]" id="Reading" value="Reading" /> <label class="txt-dark" for="Reading">Reading</label>
                        </div>
                    </div>
                </div>
                <div class="form-submit">
                    <input type="submit" name="regist" id="regist" class="submit" value="New Reagistration" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo $this->baseURL ?>assets/login/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $this->baseURL ?>assets/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>