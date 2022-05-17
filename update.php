<?php
include "connection.php";
$id=$_GET['updateid'];


// to populate the form for update
$newsql="select * from `crud` where id = $id ";
$newresult = mysqli_query($linked,$newsql);
$row=mysqli_fetch_assoc($newresult);
$newname=$row['name'];
$newemail=$row['email'];
$newmobile=$row['mobile'];
$newpassword=$row['password'];



// displaying table data
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'
    where id=$id";
    $execute = mysqli_query($linked, $sql);
    if($execute){
      header("location:display.php");
    } else{
        die(mysqli_error($linked));
    }
}
        
 ?> 


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" value="<?php echo $newname?>" class="form-control" name="name" autocomplete="off" placeholder="enter your name">

            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" value="<?php echo $newemail ?>" class="form-control" name="email" autocomplete="nope" placeholder="enter your email">

            </div>
            <div class="mb-3">
                <label class="form-label">mobile</label>
                <input type="text" value="<?php echo $newmobile ?>" class="form-control" name="mobile" placeholder="enter your mobile number" autocomplete="nope">

            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="password" value="<?php echo $newpassword?>" class="form-control" name="password" autocomplete="off" placeholder="enter your password">

            </div>



            <button type="submit" name="submit" class="btn btn-primary">update</button>
        </form>
    </div>

</body>

</html>