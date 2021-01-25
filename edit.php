  <div class="container">
    <h2 align="center">Edit User</h2>

    <?php

    include "connection.php";

    if(isset($_GET['edit'])){
     $edit_id = $_GET['edit'];

     $select = "SELECT * FROM user WHERE user_id ='$edit_id'";
     $run = mysqli_query($conn, $select);
     $row_user = mysqli_fetch_array($run);
     $user_name = $row_user['name'];
     $user_email = $row_user['email'];
     $user_password = $row_user['user_password'];
     $user_image = $row_user['user_image'];
     $user_details = $row_user['user_details'];
    }
    ?>

</div>