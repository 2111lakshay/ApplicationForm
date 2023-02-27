<?php
    $conn = new mysqli("localhost","root","","studentinfo");
    if($conn -> connect_error){
        echo"Failed to connect to Mysql: ".$conn -> connect_error;
        exit();
    }
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $aadhar = $_POST["aadhar"];
    $image = $_POST["image"];
    $gender = $_POST["gender"];
    $level = $_POST["level"];
    $course = $_POST["course"];
    $semester = $_POST["semester"];
    $fathersname = $_POST["fathersname"];
    $mname = $_POST["mname"];
    $sname = $_POST["sname"];
    $mail = $_POST["mail"];
    $con = $_POST["con"];
    $mothersname = $_POST["mothersname"];
    $midname = $_POST["midname"];
    $Srname = $_POST["Srname"];
    $cont = $_POST["cont"];
    $percent = $_POST["percent"];
    $percentage = $_POST["percentage"];
    $sql = "INSERT INTO `studentinfo`(`id`, `firstname`, `middlename`, `surname`, `email`, `contact`, `adress`, `dob`, `aadhar`, `image`, `gender`, `level`, `course`, `semester`, `fathersname`, `mname`, `sname`, `mail`, `con`, `mothersname`, `midname`, `Srname`, `cont`, `percent`, `percentage`)
     VALUES ('$id','$firstname','$middlename','$surname','$email','$contact','$address','$dob','$aadhar','$image','$gender','$level','$course','$semester','$fathersname','$mname','$sname','$mail','$con','$mothersname','$midname','$Srname','$cont','$percent','$percentage')";
    
    if($conn -> query($sql) == TRUE){
        echo "NEW RECORD INSERTED SUCCESSFULLY";
        $last_id = $conn ->insert_id;

    $targetDir = "image/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    print_r($_FILES);
    if (!empty($_FILES["image"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $insert = $conn ->query("UPDATE `studentinfo` SET `image`='" . $fileName . "' WHERE `id`='" . $last_id . "'");
                if ($insert) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

    // Display status message
    echo $statusMsg;
    header('Location: display.php');
}else{
        echo "ERROR" .$sql."<br>" .$conn -> error;
    }
?>
