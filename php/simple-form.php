<?php
// echo($_SERVER["REQUEST_METHOD"]);

$first_name = "";
$last_name = "";
$pizza_toppings = [];
$validation_errs = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
  // var_dump($_POST);

  //STEP 1 - pull data from the POST
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $pizza_toppings = $_POST["pizza_toppings"] ?? [];

  //STEP 2 - validate the data
  if(empty($first_name)){
    $validation_errs["first_name"] = "First name is required";
  }

  if(empty($last_name)){
    $validation_errs["last_name"] = "Last name is required";
  }

  if(empty($pizza_toppings)){
    $validation_errs["pizza_toppings"] = "PICK AT LEAST ONE TOPPING";
  }

  if(empty($validation_errs)){
    header("Status: 400");
    die("THANKS FOR THE ORDER");
  }else{
    foreach($validation_errs as $e){
      echo("$e <br>");
    }
  }
  
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <title>Posting Forms</title>
  </head>
  <body>
  <h1>Posting Forms</h1>
  <br>

  <form method="POST" action="simple-form.php" >
      FIRST NAME:
      <br> 
      <input type="text" name="first_name"/>
      <br>
      LAST NAME:
      <br>
      <input type="text" name="last_name"/>
      <br>
      <br>
       WHAT DO YOU LIKE ON YOUR PIZZA?
      <br>
      <input type="checkbox" name="pizza_toppings[]" value="sausage" /> Sausage
      <br>
      <input type="checkbox" name="pizza_toppings[]" value="pepperoni" /> Pepperoni
      <br>
      <input type="checkbox" name="pizza_toppings[]" value="mushrooms" /> Mushrooms
      <br>
      <br>
      <input type="submit" name="btn_submit" value="Submit" />
  </form>

  </body>
</html>
