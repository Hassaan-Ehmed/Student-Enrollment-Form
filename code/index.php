
<?php  include "connection.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>



</head>
<body>


<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Student id</th>
            <th scope="col">Student Name</th>
            <th scope="col">Student Adress</th>
            <th scope="col">Student Contact</th>
          </tr>
        </thead>
        <tbody>

        <?php

$query = 'SELECT * FROM `stinfo`';
$res = mysqli_query($connection,$query);



    while($row = mysqli_fetch_assoc($res)){
        

?>
            <tr>
            <td scope="row"><?php echo $row['stid'] ?></th>
            <td><?php  echo $row['stname'] ?></td>
            <td><?php  echo $row['stadress'] ?></td>
            <td><?php echo $row['stcontact'] ?></td>
          </tr>

<?php

}


?>

        </tbody>
      </table>

      <input  value="Get Data" name="get" type="submit" />

      </form>
    
</body>
</html>