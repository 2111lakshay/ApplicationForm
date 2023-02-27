<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
    error_reporting(0);
     $conn = new mysqli("localhost","root","","studentinfo");
     if($conn -> connect_error){
         echo"Failed to connect to Mysql: ".$conn -> connect_error;
         exit();
     }
     
        

    $id = $_GET['id'];
    $sql = "select * from `studentinfo` where `id`='$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $path = "image/". $row['image'];
    ?>
    <div class="container bg-light">
        <center><img src="logo.png" height="200" width="1000" alt="logo"><br>
       <h2>Application Form</h2></center>
       <form method="POST" action="data.php" enctype="multipart/form-data">

       <img src="<?= $row['image']?>">
        
            <div>
                <div class="row my-4">
                <div class="col">
                    <label for="uname">FirstName : </label>
                    <input type="text" id="uname" name="firstname" class="form-control"  value="<?= $row['firstname'] ?>">
                </div>
                <div class="col">
                    <label for="mname">MiddleName : </label>
                    <input type="text" id="uname" name="middlename" class="form-control"  value="<?= $row['middlename'] ?>" >
                </div>
                <div class="col">
                    <label for="surname">SurName : </label>
                    <input type="text" id="uname" name="surname" class="form-control"   value="<?= $row['surname'] ?>" >
                </div>
                </div>

                <div class="row my-4">
                <div class="col">
                    <label for="email">Email : </label>
                    <input type="email" id="email" name="email" class="form-control"   value="<?= $row['email'] ?>">
                </div>
                <div class="col">
                    <label for="contact">Contact Number : </label>
                    <input type="number" id="contact" name="contact" class="form-control"   value="<?= $row['contact'] ?>">
                </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                        <label for="address">Address : </label>
                        <textarea id="address" name="address" class="form-control" > value="<?= $row['adress'] ?>"</textarea>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                        <label for="dob">DOB : </label>
                        <input type="date" id="dob" name="dob" class="form-control"   value="<?= $row['dob'] ?>">
                    </div>
                </div>

                <div class="row my-4">
                     <div class="col">
                        <label for="aadhar">Aadhar Number : </label>
                        <input type="number" id="aadhar" name="aadhar" class="form-control" value="<?= $row['aadhar'] ?>">
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                        <label for="image">Upload your image </label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div> 
                </div>

            <div class="row">
                <div class="col mt-3">
                    <label for="gender">Gender: </label>
                         <div><?= $row['gender']?></div>
                </div>
            </div>
            
                    
            <div class="col">
                <label>Level</label>
                   <label><?= $row['level'] ?></label>
            </div>

            <div class="row">
                <div class="col">
                    <label>Course/Stream</label>
                    <label><?= $row['course'] ?></label>
                </div>
            </div>

            <div class="col">
                <label>Semester</label>
                <label><?= $row['semester'] ?></label>
            </div>
        </div>          
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <srcipt src="main.js"></scrpit>
</body>
</html>