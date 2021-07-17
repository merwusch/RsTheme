<?php

include "panel/panel-header.php";

?>


<div class="main">
    <h2>USERS</h2>
    <hr>


        <?php
        $sql_query = "SELECT * FROM users ";
        $select_all_posts = mysqli_query($conn, $sql_query);

        while ($row = mysqli_fetch_assoc($select_all_posts)) {
            $user_id = $row["user_id"];
            $user_name = $row["user_name"];
            $user_password = $row["user_password"];
            $user_email = $row["user_email"];
            $user_role = $row["user_role"];
                
        ?>

    <table class="table caption-top">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th scope="col"><?php echo $user_id ?></th>
      <th scope="col"><?php echo $user_name ?></th>
      <th scope="col"><?php echo $user_password ?></th>
      <th scope="col"><?php echo $user_email ?></th>
      <th scope="col"><?php echo $user_role ?></th>
    </tr>

  </tbody>
</table>

<?php } ?>



</div>


<?php

include "panel/panel-footer.php";

?>