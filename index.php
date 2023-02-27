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
<div class="container bg-secondary">
        <center><img src="logo.png" height="200" width="1000" alt="logo"><br>
       <h2>Application Form</h2></center>
    <form method="POST" action="data.php" enctype="multipart/form-data">
        <div>
            <h3>Students Details</h3>
            <div class="row my-4">
                <div class="col">
                    <label for="uname">FirstName : </label>
                    <input type="text" id="uname" name="firstname" class="form-control">
                </div>
                <div class="col">
                    <label for="mname">MiddleName : </label>
                    <input type="text" id="uname" name="middlename" class="form-control">
                </div>
                <div class="col">
                    <label for="surname">SurName : </label>
                    <input type="text" id="uname" name="surname" class="form-control">
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <label for="email">Email : </label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="col">
                    <label for="contact">Contact Number : </label>
                    <input type="number" id="contact" name="contact" class="form-control">
                </div>
            </div>

                <div class="row my-4">
                    <div class="col">
                        <label for="address">Address : </label>
                        <textarea id="address" name="address" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                        <label for="dob">DOB : </label>
                        <input type="date" id="dob" name="dob" class="form-control">
                    </div>
                </div>

                    <div class="row my-4">
                        <div class="col">
                            <label for="aadhar">Aadhar Number : </label>
                            <input type="number" id="aadhar" name="aadhar" class="form-control">
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
                        <label for="">Gender: </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                                <label for="form-check-label" for="radio1"> Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                                <label for="form-check-label" for="radio2" > Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="other">
                                <label for="form-check-label" for="radio3" > Other</label>
                            </div>
                    </div>
                </div>
            
            <br>  
            <div class="row">
            <div class="col">
                <label>Level</label>
                    <select class="form-control form-control-sm" name="level" id="level">
                        <option value="junior">Junior</option>
                        <option value="ug">UG</option>
                        <option value="pg">PG</option>
                    </select>
            </div>
            </div>
             <br>
            <div class="row">
                <div class="col">
                    <label>Course/Stream</label>
                        <select class="form-control form-control-sm" name="course" id="course">
                            <option value="Science">Science</option>
                            <option value="Commerce">Commerce</option>
                        </select>
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                <label>Semester</label>
                    <select class="form-control form-control-sm" name="semester" id="semester">
                        <option value="1">I</option>
                    </select>
            </div>
            </div>
            <br>
            <h3>Parents Details</h3>
            <h4>Fathers Details</h4>
            <div class="row my-4">
                <div class="col">
                    <label for="fathersname">FirstName : </label>
                    <input type="text" id="fathersname" name="fathersname" class="form-control">
                </div>
                <div class="col">
                    <label for="mname">MiddleName : </label>
                    <input type="text" id="mname" name="mname" class="form-control">
                </div>
                <div class="col">
                    <label for="sname">SurName : </label>
                    <input type="text" id="sname" name="sname" class="form-control">
                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <label for="mail">Email : </label>
                    <input type="email" id="mail" name="mail" class="form-control">
                </div>
                <div class="col">
                    <label for="con">Contact Number : </label>
                    <input type="number" id="con" name="con" class="form-control">
                </div>
            </div>

            <h4>Mothers Details</h4>
            <div class="row my-4">
                <div class="col">
                    <label for="mothersname">FirstName : </label>
                    <input type="text" id="mothersname" name="mothersname" class="form-control">
                </div>
                <div class="col">
                    <label for="midname">MiddleName : </label>
                    <input type="text" id="midname" name="midname" class="form-control">
                </div>
                <div class="col">
                    <label for="Srname">SurName : </label>
                    <input type="text" id="Srname" name="Srname" class="form-control">
                </div>
            </div>
            <div class="row my-4">
                <div class="col">
                    <label for="cont">Contact Number : </label>
                    <input type="number" id="cont" name="cont" class="form-control">
                </div>
            </div>
            <h4>Education Details</h4>
            <br>
            
            <div class="row my-4">
            <h5>SSC Details</h5>
                <div class="col">
                    <label for="percent">Percentage </label>
                    <input type="text" id="percent" name="percent" class="form-control">
                </div>
                <h5>HSC Details</h5>
                <div class="col">
                    <label for="percentage">Percentage </label>
                    <input type="text" id="percentage" name="percentage" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col text-center mt-5">
                   <center> <input class="btn btn-primary" type="submit" name="submit"></center>
                </div>
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