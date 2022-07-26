<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();
    if(!isset($_SESSION["participants"])){
        $_SESSION["participants"]=[];
    }
    // if(!isset($_GET["name"]) && isset($_GET["surname"])&& isset($_GET["age"])&& isset($_GET["favMovie"])){
    //     echo "<h2>" . $_GET['name'] . " " . $_GET["surname"] . " " . $_GET["age"] . " " . $_GET["favMovie"] . "</h2>";
    // }
    if(isset($_GET["name"])  && isset($_GET["surname"]) && $_GET["name"] !=="" && $_GET["surname"] != ""){
        $_SESSION['participants'][] = ['name' => $_GET['name'], 'surname' => $_GET['surname'], "age" => $_GET["age"], "favMovie" => $_GET["favMovie"] ];
     }
    ?>
    <div id ="input">
    <form action = "" method="get">
    <input type = "text" name = "name">
    <label>Name</label>
    <input type = "text" name = "surname">
    <label>Surname</label>
    <input type = "text" name = "age">
    <label>Age</label>
    <input type = "text" name = "favMovie">
    <label>Movie</label>
    <button type = "submit" class = "btn btn-success">Submit</button>
    </form>
    </div>
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Age</th>
      <th scope="col">FavMovie</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr> -->
    <?php
    foreach($_SESSION['participants'] as $key => $ptc){
        ?>
        <tr>
        <th scope="row"><?= $key ?></th>
        <td> <?= $ptc["name"] ?> </td>
        <td> <?= $ptc["surname"] ?> </td>
        <td> <?= $ptc["age"] ?> </td>
        <td> <?= $ptc["favMovie"] ?> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>

</html>