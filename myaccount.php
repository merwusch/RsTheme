<?php include "includes/header.php"; ?>

<div class="hero-image" style="background-image: url(img/3_2.jpg);">
    <div class="hero-text">
        <h1>My Account</h1>
        <p>
            <a href="index.php">Home</a> / <a href="about.php">My Account</a>
        </p>
    </div>
</div>
<div id="my-account">
    <div class="container">
        <div class="account">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mt-0 mx-auto py-5 px-5">
                    <h2>Log In</h2>
                    <div class="rs-login">
                        <form action="">
                            <div class="form-control p-0">
                                <label for="username">Username or email address:</label><br>
                                <input type="text" id="username" name="username"><br>
                            </div>
                            <div class="form-control p-0">
                                <label for="loginPassword">Password*</label><br>
                                <input type="text" id="loginPassword" name="loginPassword"><br>
                            </div>
                            <div class="">
                                <button class="btn btn-gradiental px-4 py-2 text-white mt-3 me-3">Log In</button>
                                <input type="checkbox" id="rememberme" name="rememberme">
                                <label for="rememberme"> Remember Me!</label>
                            </div>
                        </form><br>
                        <a href="#" style="text-decoration: none;">Lost your password?</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mt-0 mx-auto py-5 px-5">
                    <h2>Register</h2>
                    <div class="rs-login">
                        <div class="form-control p-0">
                            <label for="username">Emaill address:</label><br>
                            <input type="text" id="username" name="username"><br>
                        </div>
                        <p>A password will be sent to your email address.</p>
                        <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" style="text-decoration: none;">privacy policy.</a></p>
                        <button class="btn btn-gradiental px-4 py-2 text-white mt-3 me-3">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>