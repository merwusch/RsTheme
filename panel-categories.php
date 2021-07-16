<?php

include "panel/panel-header.php";

?>

<<<<<<< Updated upstream
=======
<?php

if (isset($_GET["delete"])) {

    $del_cat_id = $_GET["delete"];

    $sql_query = "DELETE FROM categories WHERE category_id={$del_cat_id}";

    $delete_category_query = mysqli_query($conn, $sql_query);

    header("Location:panel-categories.php");
}
?>

<?php
if (isset($_POST["edit_category"])) {
    $edit_cat_title = $_POST["category_namex"];
    $sql_query2 = "UPDATE categories SET category_name = '$edit_cat_title' WHERE category_id = '$_POST[category_id]'";
    $edit_category_query = mysqli_query($conn, $sql_query2);
    header("Location:panel-categories.php");
}
?>

>>>>>>> Stashed changes
<div class="main">
    <h2>CATEGORİES</h2>
    <hr>



    <table class="table table-bordered">
<<<<<<< Updated upstream
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Add - Edit - Delete</th>
                </tr>
            </thead>
            <tbody>
=======
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Add - Edit - Delete</th>
            </tr>
        </thead>
        <tbody>
>>>>>>> Stashed changes



            <?php

<<<<<<< Updated upstream
                if(isset($_POST["add_category"])){
                        $category_name = $_POST["category_name"];



                        if($category_name == "" || empty($category_name)) {
                            echo "<div class='alert alert-danger' role='alert'>
                            This field can not be blank!
                          </div>";
                        }else {
                            $sql_query = "INSERT INTO categories(category_name) VALUE('$category_name')";
                            $add_new_category_query = mysqli_query($conn, $sql_query);
                            echo "<div class='alert alert-success' role='alert'>
                            Successful! New category added
                          </div>";

                        }
                }

                

            ?>


=======
            if (isset($_POST["add_category"])) {
                $category_name = $_POST["category_name"];



                if ($category_name == "" || empty($category_name)) {
                    echo "<div class='alert alert-danger' role='alert'>
                            This field can not be blank!
                          </div>";
                } else {
                    $sql_query = "INSERT INTO categories(category_name) VALUE('$category_name')";
                    $add_new_category_query = mysqli_query($conn, $sql_query);
                    echo "<div class='alert alert-success' role='alert'>
                            Successful! New category added
                          </div>";
                }
            }
            ?>
>>>>>>> Stashed changes
            <?php

            $sql_query = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($conn, $sql_query);
<<<<<<< Updated upstream
                while($row = mysqli_fetch_assoc($select_all_categories)){

                        $category_id = $row["category_id"];
                        $category_name = $row["category_name"];

                        echo "<tr>
=======
            $k = 1;
            while ($row = mysqli_fetch_assoc($select_all_categories)) {

                $category_id = $row["category_id"];
                $category_name = $row["category_name"];

                echo "<tr>
>>>>>>> Stashed changes
                        <td>{$category_id}</td>
                        <td>{$category_name}</td>
                        <td>
                            <div class='dropdown'>
                                <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Actions
                                </button>
                                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
<<<<<<< Updated upstream
                                    <a class='dropdown-item' data-toggle='modal' data-target='#edit_modal' href='#'>Edit</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='#'>Delete</a>
=======
                                    <a class='dropdown-item' data-toggle='modal' data-target='#edit_modal$k' href='#'>Edit</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='panel-categories.php?delete={$category_id}'>Delete</a>
>>>>>>> Stashed changes
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' data-toggle='modal' data-target='#add_modal'>Add</a>
                                </div>
                            </div>
                        </td>
                    </tr>";
<<<<<<< Updated upstream
                }
            ?> 












                <div id="edit_modal" class="modal fade">
=======
            ?>



                <div id="edit_modal<?php echo $k; ?>" class="modal fade">
>>>>>>> Stashed changes
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="form-group">

<<<<<<< Updated upstream
                                        <input value="" type="text" class="form-control" name="category_namex">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="category_id" value="">
=======
                                        <input value="<?php if (isset($category_name)) {
                                                            echo $category_name;
                                                        } ?>" type="text" class="form-control" name="category_namex">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="category_id" value="<?php echo $row["category_id"]; ?>">
>>>>>>> Stashed changes
                                        <input type="submit" class="btn btn-primary" name="edit_category" value="Edit Category">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< Updated upstream
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
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="category_name">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="add_category" value="Add Category">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    
=======

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
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="category_name">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="add_category" value="Add Category">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







>>>>>>> Stashed changes
</div>




<?php

include "panel/panel-footer.php";

?>