<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
  {	
	$file = $_FILES['image']['name'];
	$file_loc = $_FILES['image']['tmp_name'];
	$folder="images/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobile'];
	$designation=$_POST['designation'];
	$idedit=$_POST['editid'];
	$image=$_POST['image'];

	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$image=$final_file;
		}

	$sql="UPDATE users SET name=(:name), email=(:email), mobile=(:mobileno), designation=(:designation), Image=(:image) WHERE id=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
	$query-> bindParam(':designation', $designation, PDO::PARAM_STR);
	$query-> bindParam(':image', $image, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully";
}    
?>
<?php } ?>