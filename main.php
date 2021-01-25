<?php 
include 'connection.php';

$nameErr = $emailErr = $genderErr = $hobbiesErr = $dobErr = $commentErr = "";
$name = $email = $gender = $hobbies = $dob = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
            $nameErr = "Name is required";
    }else {
        $name = $_POST["name"];
        }

	if (empty($_POST["email"])) {
               $emailErr = "Email is required";
        }else {
            $email = $_POST["email"];
               
               // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }

    if (empty($_POST["gender"])) {
    	$genderErr = "";
    }else{
    	$gender = $_POST["gender"];
    }

    if (empty($_POST["hobbies"])) {
    	$hobbiesErr = "";
    }else{
    	$hobbies = $_POST["hobbies"];
    }

    if (empty($_POST["dob"])) {
    	$dobErr = "";
    }else{
    	$dob = $_POST["dob"];
    }

    if (empty($_POST["comment"])) {
    	$commentErr = "";
    }else{
    	$comment = $_POST["comment"];
    }
 }


$test =""; 
	foreach ($_POST['hobbies'] as $value) {
	$test.= $value.",";
}

 $insert_user = "INSERT INTO testuser(name,email,gender,hobbies,dob,comments) VALUES('$name','$email','$gender','$test','$dob','$comment')";

 $run_insert = mysqli_query($conn,$insert_user);

 if ($run_insert == true) {
 	echo "Data has been submited successfully";
 }else{
 	echo "There is something wrong in your code";
 }

 ?>
<table class="table">
	<thead>
      <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>DOB</th>
        <th>Comment</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
        <?php 
    $select = "SELECT * FROM testuser";
    $run = mysqli_query($conn, $select);
    while($row_user = mysqli_fetch_array($run)){
      $user_id = $row_user['id'];
      $user_name = $row_user['name'];
      $user_email = $row_user['email'];
      $user_gender = $row_user['gender'];
      $user_hobbies = $row_user['hobbies'];
      $user_dob = $row_user['dob'];
      $user_comment = $row_user['comments'];
      ?>
      <tbody>
        <tr>
          <td><?php echo $user_id; ?></td>
          <td><?php echo $user_name; ?></td>
          <td><?php echo $user_email; ?></td>
          <td><?php echo $user_gender; ?></td>
          <td><?php echo $user_hobbies; ?></td>
          <td><?php echo $user_dob; ?></td>
          <td><?php echo $user_comment; ?></td>
           <td><a class="btn btn-danger" href="delete.php?del=<?php echo $user_id; ?>">Delete</a></td>
          <td><a class="btn btn-success" href="index.php?edit=<?php echo $user_id; ?>">Edit</a></td>
        </tr>
      <?php } ?>
</table>
