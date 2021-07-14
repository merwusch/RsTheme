<?php

include "panel/panel-header.php";

?>

<div class="main">
    <h2>CATEGORİES</h2>
    <hr>



    <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Add - Edit - Delete</th>
                </tr>
            </thead>
            <tbody>



            <?php

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


            <?php

            $sql_query = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($conn, $sql_query);
                while($row = mysqli_fetch_assoc($select_all_categories)){

                        $category_id = $row["category_id"];
                        $category_name = $row["category_name"];

                        echo "<tr>
                        <td>{$category_id}</td>
                        <td>{$category_name}</td>
                        <td>
                            <div class='dropdown'>
                                <button class='btn btn-primary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    Actions
                                </button>
                                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                    <a class='dropdown-item' data-toggle='modal' data-target='#edit_modal' href='#'>Edit</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' href='#'>Delete</a>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' data-toggle='modal' data-target='#add_modal'>Add</a>
                                </div>
                            </div>
                        </td>
                    </tr>";
                }
            ?> 












                <div id="edit_modal" class="modal fade">
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

                                        <input value="" type="text" class="form-control" name="category_namex">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="category_id" value="">
                                        <input type="submit" class="btn btn-primary" name="edit_category" value="Edit Category">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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


    
</div>




<?php

include "panel/panel-footer.php";

?>