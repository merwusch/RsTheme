<?php

include "includes/header.php";

?>

<div class="hero-image" style="background-image: url(img/4.jpg);">
    <div class="hero-text">
        <h1>Blog</h1>
        <p>
            <a href="index.php">Home</a> / <a href="blog.php">Blog</a>
        </p>
    </div>
</div>



<div id=blog>
    <div class="container">

        <div class="row mx-auto mx-5 mt-5">

            <!--Grid column start-->
            <div class="col-md-7 col-lg7 col-xl-8 col-12 px-5">


                <?php
                $sql_query = "SELECT * FROM posts";
                $select_all_posts = mysqli_query($conn, $sql_query);

                while ($row = mysqli_fetch_assoc($select_all_posts)) {
                    $post_author = $row["post_author"];
                    $post_date = $row["post_date"];
                    $post_title = $row["post_title"];
                    $post_text = $row["post_text"];
                    $post_image = $row["post_image"];
                    $post_button_text = $row["post_button_text"];
                ?>

                    <div class="shadow p-3 mb-5 bg-body rounded-square">
                        <div class="card1  p-2 border-0 position-relative ">
                            <div>
                                <?php echo $post_image; ?>
                                <button type=" submit " class=" btn btn-gradiental rounded-pill px-3 py-2 position-absolute text-light " style="bottom: 20px; right: 20px;"><?php echo $post_button_text; ?></button>
                            </div>
                            <div class="card-body">

                                <a href="#" style="text-decoration: none; color: black;">
                                    <h2 class="card-title" style="font-family: 'Livvic-bold'; font-weight: 400; font-size: 25px; letter-spacing: 0.5px; word-spacing: 1px;">
                                        <?php echo $post_title; ?></h2>
                                </a>

                                <div class="m-3">
                                    <i style="color:royalblue" class="far fa-calendar-check"></i><span class="p-2"><?php echo $post_date; ?></span>
                                    <i style="color:royalblue" class="far fa-user"></i><span class="p-2"><?php echo $post_author; ?></span>
                                </div>

                                <p class="card-text" style="font-family: 'Livvic-regular'; font-size: 15px; font-weight: 300;">
                                    <?php echo $post_text; ?></p>
                                <a href="#" class="text-decoration-none" style="font-family: 'Livvic-regular'; font-size: 15px; font-weight: 500; ">Continue
                                    reading <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                <?php } ?>


            </div>
            <!--Grid column end-->

            <!--Grid column start-->
            <div class="col-md-4  col-lg-4 col-xl-4 col-12 pe-5">

                <div class="shadow p-3 mb-5 bg-body rounded-square">

                    <div class="card1">
                        <form>
                            <div class=" form-group d-flex justify-content-end bg-white rounded-pill p-2 ">
                                <input id=" form_search " type=" search " name=" form_search " class=" form-control bg-white border-0 form-control-sm m-0 rounded-pill " placeholder=" Searching... " required=" required ">
                                <div class=" help-block with-errors "></div>
                                <button type=" submit " class=" btn btn-light rounded-circle btn-lg px-3 "> <i class="fa fa-search"></i> </button>
                            </div>
                        </form>
                    </div>

                </div>




                <div class="shadow p-3 bg-body rounded-square mb-5">

                    <h3 class="" style="font-family: 'Livvic-regular'; font-size: 20px; font-weight: 1000 ; ">Latest Posts
                    </h3>
                    <hr />

                    <?php
                    $sql_query = "SELECT * FROM posts";
                    $select_all_posts = mysqli_query($conn, $sql_query);


                    while ($row = mysqli_fetch_assoc($select_all_posts)) {
                        $post_date = $row["post_date"];
                        $post_title = $row["post_title"];
                        $post_image = $row["post_image"];
                    ?>

                        <div class="card1 border-0 m-1">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <?php echo $post_image ?>
                                    </a>

                                </div>
                                <div class="col-8">
                                    <div class="card-body p-3 ">
                                        <a href="#" class="text-decoration-none text-dark"> <?php echo $post_title ?> </a>
                                        <p class="card-text"><small class="text-muted"> <?php echo $post_date ?> </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                    <?php } ?>




                    <!--

                        <div class="card1 border-0 m-1">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <img src="img/1.jpg" class="m-3 img-thumbnail" style="height: auto ; width: 10rem;" alt="...">
                                    </a>

                                </div>
                                <div class="col-8">
                                    <div class="card-body p-3 ">
                                        <a href="#" class="text-decoration-none text-dark">Pen Source Job Report how More
                                            Openings Fewer</a>
                                        <p class="card-text"><small class="text-muted">January 21, 2020</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="card1 border-0 m-1">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <img src="img/2.jpg" class="m-3 img-thumbnail" style="height: auto ; width: 10rem;" alt="...">
                                    </a>

                                </div>
                                <div class="col-8">
                                    <div class="card-body p-3 ">
                                        <a href="#" class="text-decoration-none text-dark">Pen Source Job Report how More
                                            Openings Fewer</a>
                                        <p class="card-text"><small class="text-muted">January 21, 2020</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="card1 border-0 m-1">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <img src="img/3.jpg" class="m-3 img-thumbnail" style="height: auto ; width: 10rem;" alt="...">
                                    </a>

                                </div>
                                <div class="col-8">
                                    <div class="card-body p-3 ">
                                        <a href="#" class="text-decoration-none text-dark">Pen Source Job Report how More
                                            Openings Fewer</a>
                                        <p class="card-text"><small class="text-muted">January 21, 2020</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="card1 border-0 m-1">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#">
                                        <img src="img/4a.jpg" class="m-3 img-thumbnail" style="height: auto ; width: 10rem;" alt="...">
                                    </a>

                                </div>
                                <div class="col-8">
                                    <div class="card-body p-3 ">
                                        <a href="#" class="text-decoration-none text-dark">Pen Source Job Report how More
                                            Openings Fewer</a>
                                        <p class="card-text"><small class="text-muted">January 21, 2020</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                -->


                </div>

                <div id="categories" class="shadow p-3 bg-body rounded-square mb-5 ">

                    <h3 class="mx-4 mt-4" style="font-family: 'Livvic-regular'; font-size: 20px; font-weight: 1000 ; ">
                        Categories
                    </h3>

                    <hr />

                    <div class="card1 mx-4 mb-4 border-0 bg-transparent">


                        <?php

                        $sql_query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($conn, $sql_query);

                        while ($row = mysqli_fetch_assoc($select_all_categories)) {
                            $category_name = $row["category_name"];

                            echo "<a href='#' class='text-decoration-none text-dark'>{$category_name}</a><br>";
                        }


                        ?>


                    </div>




                </div>






            </div>
            <!--Grid column end-->
        </div>

    </div>
</div>





<?php

include "includes/footer.php";

?>