<?php
// echo($_SERVER['REQUEST_METHOD']);

if($_SERVER['REQUEST_METHOD'] == "POST"){
  // var_dump($_POST);
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];

  // $order_type = isset($_POST['order_type']) ? $_POST['order_type'] : "";
  $order_type = $_POST['order_type'] ?? ""; // these two ^ aret the same thing

  $crust = $_POST['crust'];

  $meats = $_POST['meat'] ?? [];
  // var_dump($meats);

  $veggies = $_POST['veggies'] ?? [];
  // var_dump($veggies);
  $agreed = $_POST['terms'] ?? "";

  echo($first_name . "<br>");
  echo($last_name . "<br>");
  echo($order_type . "<br>");
  echo($crust . "<br>");
  foreach($meats as $m){
    echo($m . "<br>");
  };

  foreach($veggies as $v){
    echo($v . "<br>");
  };

  echo($agreed . "<br>");


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
  <h1>Pizza Order Form</h1>
  <form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>" >
      
      <label>First Name:</label>
      <br> 
      <input type="text" name="first_name"/>
      <br><br>
      
      <label>Last Name:</label>
      <br>
      <input type="text" name="last_name"/>
      <br><br>
      
      <label>Order Type:</label>
      <br>
      <label>
        <input type="radio" name="order_type" value="carry out" /> Carry Out
      </label>
      <label>
        <input type="radio" name="order_type" value="delivery" /> Delivery
      </label>
      <br><br>
      
      <label>Crust:</label>
      <br>
      <select name="crust">
        <option>Choose one...</option>
        <option value="1">Thin</option>
        <option value="2">Pan</option>
        <option value="3">Deep Dish</option>
      </select>
      <br><br>
      
      <label>Meats:</label>
      <br>
      <label>
        <input type="checkbox" name="meat[]" value="sausage" /> Sausage
      </label>
      <label>
        <input type="checkbox" name="meat[]" value="pepperoni" /> Pepperoni
      </label>
      <label>
        <input type="checkbox" name="meat[]" value="mushrooms" /> Mushrooms
      </label>
      <br><br>

      <label>Veggies:</label>
      <br>
      <select multiple name="veggies[]">
        <option value="1">Onions</option>
        <option value="2">Mushrooms</option>
        <option value="3">Green Peppers</option>
      </select>
      <br><br>

      <label>
        <input type="checkbox" name="terms" value="agreed" /> Agree to our terms of service
      </label>
      <br><br>

      <input type="submit" value="Submit" />
  </form>

  </body>
</html>
