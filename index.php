<?php
include 'connection.php';
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into userinfo (name,email,mobile,password)  values('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo 'data insert successfully';
    }else{
        echo 'error';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-5">
    <a href="display.php" class="btn btn-warning mb-2">Show table</a>
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="border:1px solid #005B96">
                    <div class="card-header" style="background-color:#005B96; color:white; text-align:center;">User info update</div>
                    <div class="card-body">
                    <form method="post">
                            <div class="mb-2">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control"  id="Name" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                            <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="mb-2">
                            <label for="Nobile" class="form-label">Mobile</label>
                            <input type="number" name="mobile" class="form-control" id="Mobile" aria-describedby="emailHelp" placeholder="Enter number">
                            </div>
                            <div class="mb-2 pb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-success px-4">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>