<?php
$conn = new mysqli("localhost","root","","studentinfo");
if($conn -> connect_error){
    echo"Failed to connect to Mysql: ".$conn -> connect_error;
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admission</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<?php


session_start();
if( !$_SESSION['admin']){
    header("location:adminlogin.php");
}


?>

<body>
    <div class="container bg-light mx-auto">
        <center><img src="logo.png" height="200" width="1000" alt="logo"><br>
       <h2>Application Form</h2></center>
       <br>
       <center>
       <div class="">
       Hello,<?php echo $_SESSION['admin'];?>
           <button class="btn btn-dark btn-sm"><a class="nav-1" href="adminlogout.php">Logout</a></button>
        </div>
        <br>
        <br>
</center>
<center>
        <div class="container">
            <form method="POST">
                <input type="text" placeholder="Search Data" name="search">
                <button class="btn btn-dark btn-sm" name="submit">Search</button>
            </form>
            <div class="container my-5">
                <table class="table">
                    <?php
                        if(isset($_POST['submit'])){
                            $search = $_POST['search'];
                            $sql = "SELECT * FROM `studentinfo` where id = '$search' or firstname = '$search' or middlename = '$search' or surname = '$search' ";
                            ($result = mysqli_query($conn,$sql));
                                if($result){
                                if(mysqli_num_rows($result)>0){
                                    echo '<thead>
                                    <tr>
                                    <th>id </th>
                                    <th>Firstname</th>
                                    <th>middlename</th>
                                    <th>surname</th>
                                    <th>contact</th>
                                    <th>course</th>
                                    <th>semester</th>
                                    </tr>
                                    </thead> 
                                    ';
                                    while($row = mysqli_fetch_assoc($result)){
                                    echo '<tbody>
                                        
                                    <tr>
                                    <td>'.$row['id'].'</td>
                                    <td>'.$row['firstname'].'</td>
                                    <td>'.$row['middlename'].'</td>
                                    <td>'.$row['surname'].'</td>
                                    <td>'.$row['contact'].'</td>
                                    <td>'.$row['course'].'</td>
                                    <td>'.$row['semester'].'</td>
                                    </tr>
                                        
                                    </tbody>
                                    ';
                                    }
                                    }else{
                                    echo '<h2 class=text-danger>DATA NOT FOUND</h2>';
                                    }
                                }
                        }
                    ?>
                </table>
            </div>
            

</center>
        <!--
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Semester</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    /*
                        $conn = new mysqli("localhost","root","","studentinfo");
                        if($conn -> connect_error){
                        echo"Failed to connect to Mysql: ".$conn -> connect_error;
                        exit();
                        }
                        $sql = "select `id`,`firstname`, `surname` from `studentinfo` where 1";
                        $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_array($result)){
                            $id = $row['id'];
                            echo "<tr>";
                            echo "<td>". $row['id']. "</td>";
                            echo "<td>". $row['firstname']."". $row['surname']. "</td>";
                            echo "<td><a href = 'details.php' id=`$id`>Click</a></td>";
                            echo "</tr>";
                        }
                        */
                    ?>
                </tbody>
            </table>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <srcipt src="main.js"></scrpit>
                    -->
</body>
</html>