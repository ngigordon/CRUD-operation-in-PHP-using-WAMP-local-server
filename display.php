<?php
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="index.php" class="text-light">add user</a> </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">SI no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql = "select * from `crud`";
$result = mysqli_query($linked,$sql);
if($result){

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    echo 
    '
        <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
            <button class="btn btn-primary"><a class="text-light" href="update.php? updateid='.$id.'">update</a></button>
            <button class="btn btn-danger"><a class="text-light" href="delete.php? deleteID='.$id.'">delete</a></button>
        </td>
        </tr>
    ';

}
}

?>


    
  </tbody>
</table> 
    </div>
</body>
</html>