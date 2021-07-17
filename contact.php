<?php include "includes/header.php"; ?>

<div class="hero-image" style="background-image: url(img/3_2.jpg);">
    <div class="hero-text">
        <h1>Contact</h1>
        <p>
            <a href="index.php">Home</a> / <a href="about.php">Contact</a>
        </p>
    </div>
</div>
<!----------------------Contact Start---------------------------->
<div id=" contact " class=" ">
    <div class=" container ">
        <div class=" row ">
            <!----------------------Contact Card Start---------------------------->
            <div class=" col-lg-5 col-md-5 col-12 p-5 mt-0 ">
                <div class=" card text-white mx-auto ">
                    <h5 class=" d8 ms-5 mt-5 pt-5 ">LET'S TALK</h5>
                    <h2 class=" ms-5 mt-3 me-3 ">Speak with Expert Engineers. </h2>
                    <div class=" card1 mb-0 border-0 bg-transparent ps-2 mt-4 ">
                        <div class=" row ">
                            <div class=" col-md-1 col-lg-1 col-1 m-auto px-5 py-0 iconic bg-transparent ">
                                <img src=" img/mail.png " class=" iconic rounded-circle " alt=" ... ">
                            </div>
                            <div class=" col ">
                                <div class=" card-body ">
                                    <h6 class=" card-title ">E-mail</h6>
                                    <p class=" card-text "> <em>support@merwusch.com</em> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" card1 mb-0 border-0 bg-transparent ms-2 ">
                        <div class=" row ">
                            <div class=" col-md-1 col-lg-1 col-1 m-auto px-5 py-0 iconic ">
                                <img src=" img/tel.png " class=" iconic rounded-circle " alt=" ... ">
                            </div>
                            <div class=" col ">
                                <div class=" card-body ">
                                    <h6 class=" card-title ">Phone</h6>
                                    <p class=" card-text "> <em>(123)456-7890</em> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" card1 mb-0 border-0 bg-transparent ms-2 mb-5 ">
                        <div class=" row ">
                            <div class=" col-md-1 col-lg-1 col-1 m-auto px-5 py-0 iconic ">
                                <img src=" img/map.png " class=" iconic rounded-circle " alt=" ... ">
                            </div>
                            <div class=" col ">
                                <div class=" card-body ">
                                    <h6 class=" card-title ">Adress</h6>
                                    <p class=" card-text "> <em>Kartal, 34882, TR</em> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------Contact Card End---------------------------->
            <!----------------------Contact Form Start---------------------------->
            <div class="col-lg-7 col-md-7 col-12 mt-0 mx-auto py-5 px-0">
                <div class="card1 px-5">
                    <d8 class="text-primary d8">GET IN TOUCH</d8>
                    <h3 class=" pt-3 ">Fill The Form Below </h3>
                    <form id="form" class="form">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--name------------------------------------------------->
                                    <div class="form-control">
                                        <input id="fullname" type="text" name="name" class="" placeholder="Name*">
                                        <small></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--email------------------------------------------------->
                                    <div class="form-control">
                                        <input id="email" type="email" name="email" class="" placeholder="E-mail*">
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!--phone------------------------------------------------->
                                    <div class="form-control">
                                        <input id="phone" type="tel" name="tel" class="" placeholder="Phone Number*">
                                        <small></small>
                                    </div>
                                </div>
                                <div class=" col-md-6 ">
                                    <!--website------------------------------------------------->
                                    <div class=" form-control ">
                                        <input id="website" type="url" name="url" class="" placeholder="Your Website">
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                            <div class=" row ">
                                <div class=" col-md-6 ">
                                    <!--password------------------------------------------------->
                                    <div class="form-control">
                                        <input id="password" type=" password " name=" Password " class="" placeholder=" Password* ">
                                        <small></small>
                                    </div>
                                </div>
                                <div class=" col-md-6 ">
                                    <!--gender------------------------------------------------->
                                    <div class="form-control">
                                        <input id="gender" type="text" name="url" class="" placeholder=" Gender ">
                                    </div>
                                </div>
                            </div>
                            <div class=" row ">
                                <div class=" col-md-12 ">
                                    <!--message------------------------------------------------->
                                    <div class=" form-control ">
                                        <textarea id="message" name="message" class="form-control bg-grey" placeholder=" Your Message* " rows=" 4 "></textarea>
                                        <small></small>
                                    </div>
                                </div>
                                <div class=" col-md-12 ">
                                    <!--button------------------------------------------------->
                                    <input type="submit" value="Submit now" class="btn-gradiental rounded-pill text-white p-3 mt-4">
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <!----------------------Contact Form End---------------------------->
    </div>

</div>
</div>
<!----------------------Contact End---------------------------->
<!----------------------Map Start---------------------------->
<div id=" map " class=" ">
    <div class=" row ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58417.22536604188!2d90.422699!3d23.780287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe26372e73a6832e7!2sRSTheme!5e0!3m2!1str!2sus!4v1625642175420!5m2!1str!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</div>
<!----------------------Map End---------------------------->

<?php include "includes/footer.php"; ?>