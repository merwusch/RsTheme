<?php include "panel/panel-header.php"; ?>

<div class="main">
    <h2>POSTS</h2>
    <hr>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Post Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Date</th>
                <th>Comments</th>
                <th>Image</th>
                <th>Text</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            if (isset($_POST["add_post"])) {
                $post_title = $_POST["post_title"];
                $post_category = $_POST["post_category"];
                $post_author = $_POST["post_author"];
                $post_text = $_POST["post_text"];
                $post_date = date('d-m-y');
                //comment kısmı bağlanınca düzenlenecek
                $post_comment_number = 0;

                $post_image = $_FILES["post_image"]["name"];
                $post_image_temp = $_FILES["post_image"]["tmp_name"];

                move_uploaded_file($post_image_temp, "img/$post_image");

                $query = "INSERT INTO posts (post_title, post_category, post_author, post_date, post_comment_number, post_image, post_text)";
                $query .= "VALUES ('{$post_title}', '{$post_category}', '{$post_author}', now(), '{$post_comment_number}', '{$post_image}', '{$post_text}')";
                $create_post_query = mysqli_query($conn, $query);
                header("Location:panel-posts.php");
            }
            ?>

            <?php

            if (isset($_POST["edit_post"])) {
                $post_title = $_POST["post_title"];
                $post_category = $_POST["post_category"];
                $post_title = $_POST["post_title"];
                $post_author = $_POST["post_author"];
                $post_text = $_POST["post_text"];
                $post_image = $_FILES["post_image"]["name"];
                $post_image_temp = $_FILES["post_image"]["tmp_name"];

                move_uploaded_file($post_image_temp, "img/$post_image");

                if (empty($post_image)) {
                    $query = "SELECT * FROM posts WHERE post_id = '$_POST[post_id]'";
                    $select_image = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($select_image)) {
                        $post_image = $row["post_image"];
                    }
                }

                $sql_query2 = "UPDATE posts SET post_title = '$post_title', post_category = '$post_category', post_author = '$post_author', post_text = '$post_text', post_image = '$post_image' WHERE post_id = '$_POST[post_id]'";
                $edit_post_query = mysqli_query($conn, $sql_query2);
                header("Location:panel-posts.php");
            }

            ?>

            <?php
            if (isset($_GET["delete"])) {
                $del_post_id = $_GET["delete"];
                $sql_query = "DELETE FROM posts WHERE post_id = {$del_post_id}";
                $delete_post_query = mysqli_query($conn, $sql_query);
                header("Location:panel-posts.php");
            }
            ?>


            <?php

            $sql_query = "SELECT * FROM posts ORDER BY post_id DESC";
            $select_all_posts = mysqli_query($conn, $sql_query);
            $k = 1;

            while ($row = mysqli_fetch_assoc($select_all_posts)) {
                $post_id = $row["post_id"];
                $post_category = $row["post_category"];
                $post_title = $row["post_title"];
                $post_author = $row["post_author"];
                $post_date = $row["post_date"];
                $post_comment_number = $row["post_comment_number"];
                $post_image = $row["post_image"];
                $post_text = substr($row["post_text"], 0, 100);

                echo "
                <tr>
                <td>{$post_id}</td>
                <td> {$post_title}</td>
                <td>{$post_category}</td>
                <td>{$post_author}</td>
                <td>{$post_date}</td>
                <td>{$post_comment_number}</td>
                <td><img src='img/$post_image' width='120px'height='80px'></td>
                <td>{$post_text}</td>
                <td>
                    <div class='dropdown'>
                        <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            Actions
                        </button>
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                            <a class='dropdown-item' data-toggle='modal' data-target='#edit_modal$k' href='#'>Edit</a>
                            <div class='dropdown-divider'></div>
                            <a class='dropdown-item' href='panel-posts.php?delete={$post_id}'>Delete</a>
                            <div class='dropdown-divider'></div>
                            <a class='dropdown-item' data-toggle='modal' data-target='#add_modal'>Add</a>
                        </div>
                    </div>
                </td>
            </tr>";
            ?>

                <div id="edit_modal<?php echo $k ?>" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Portfolio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="post_title">Post Title</label>
                                        <input type="text" class="form-control" name="post_title" value="<?php echo $post_title ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="post_category">Post Category</label>
                                        <select name="post_category" class="form-group">
                                            <?php
                                            $edit_category_sql = "SELECT * FROM categories";
                                            $edit_cat_run = mysqli_query($conn, $edit_category_sql);
                                            while ($edit_cat_rows = mysqli_fetch_assoc($edit_cat_run)) {
                                                $edited_category = $edit_cat_rows["category_name"];
                                                if ($edit_cat_rows["category_name"] == $row["post_category"]) {
                                                    echo "<option selected>$edited_category</option>";
                                                } else {
                                                    echo "<option>$edited_category</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_author">Post Author</label>
                                        <input type="text" class="form-control" name="post_author" value="<?php echo $post_author ?>">
                                    </div>

                                    <div class="form-group">
                                        <img width="100" src="img/<?php echo $post_image; ?>" alt="">
                                        <input type="file" class="form-control" name="post_image" value="<?php echo $post_image ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="post_text">Post Text</label>
                                        <div>
                                            <textarea class="form-control" name="post_text" id="editor" cols="20" rows="5" value="<?php echo $row["post_text"]; ?>"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="post_id" value="<?php echo $row["post_id"]; ?>">
                                        <input type="submit" class="btn btn-primary" name="edit_post" value="Edit Post">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $k++;
            } ?>
        </tbody>
    </table>

    <div id="add_modal" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="post_title">Post Title</label>
                            <input type="text" class="form-control" name="post_title">
                        </div>
                        <div class="form-group">
                            <label for="post_category">Post Category</label>
                            <select name="post_category" class="form-group">
                                            <?php
                                            $edit_category_sql = "SELECT * FROM categories";
                                            $edit_cat_run = mysqli_query($conn, $edit_category_sql);
                                            while ($edit_cat_rows = mysqli_fetch_assoc($edit_cat_run)) {
                                                $edited_category = $edit_cat_rows["category_name"];
                                                if ($edit_cat_rows["category_name"] == $row["post_category"]) {
                                                    echo "<option selected>$edited_category</option>";
                                                } else {
                                                    echo "<option>$edited_category</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                        </div>
                        <div class="form-group">
                            <label for="post_author">Post Author</label>
                            <input type="text" class="form-control" name="post_author">
                        </div>

                        <div class="form-group">
                            <label for="post_image">Post Image</label>
                            <input type="file" class="form-control" name="post_image">
                        </div>

                        <div class="form-group">
                            <label for="post_text">Post Text</label>
                            <div>
                                <textarea class="form-control" name="post_text" id="editor1" cols="20" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="post_id" value="">
                            <input type="submit" class="btn btn-primary" name="add_post" value="Add Post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "panel/panel-footer.php"; ?>