



<?php
$con=mysqli_connect('localhost','root','','front') or die(mysqli_error());
$images_arr = array();
if($con){
	$target_dir = "front/";
    $target = $target_dir.$_FILES['image']['name'];
	$roll_no=$_POST['roll_no']."<br>";
    $email=$_POST['email']."<br>";
	$image=($_FILES['image']['name']);//storing f
	

	echo "connected";
	echo $roll_no;
	echo $email;
	
	$sql="INSERT INTO front1(`roll_no`,`email`,`images`)VALUES('$roll_no','$email','$image') ";
	$result=mysqli_query($con,$sql);
	 if(!$result)
		{
			echo "something went wrong";
		}
	else{
		echo "successfully uploaded";
	}
	 if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){

                //Tells you if its all ok
            echo "The file ". $target_dir.$_FILES['image']['name']. " has been uploaded, and your information has been added to the directory";
            $images_arr[] = $target;
        }
        else {

            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
        }
	
}



else
{
	echo "sorry";
}


?>