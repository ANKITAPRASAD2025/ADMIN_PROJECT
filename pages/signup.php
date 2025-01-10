<center>
    <div class="login">
        <div class="col-4 bg-white border rounded p-4 shadow-sm">
            <form method="post" action="./config/signup_submit.php" enctype="multipart/form-data">
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="./images/logo.webp" alt="" height="80" width="300">
                </div>
                <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" class="form-control rounded-0" placeholder="enter you first name" name="fname">
                        <label for="floatingInput">first name</label>
                        <?php

                        echo username_err;
                        ?>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" class="form-control rounded-0" placeholder="enter your last name" name="lname">
                        <label for="floatingInput">last name</label>
                    </div>
                </div>
                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="option2">
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="option3" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <div class="form-floating mt-1">
                    <input type="email" class="form-control rounded-0" placeholder="enter your email" name="email">
                    <label for="floatingInput">email</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="text" class="form-control rounded-0" placeholder="enter your phone number" name="phone">
                    <label for="floatingInput">phone no.</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">password</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="confirm Password" name="confirm_password">
                    <label for="floatingPassword"> confirm-password</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="file" class="form-control rounded-0" name="myfile">
                    <!-- <label for="floatingPassword"> profile_upload</label> -->
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <!-- <button class="btn btn-primary" type="submit" name="submit" value="submit">Sign Up</button> -->
                    <input type="submit" name="submit" value="submit">
                    <a href="#" class="text-decoration-none">Already have an account ?</a>


                </div>

            </form>
        </div>
    </div>
</center>