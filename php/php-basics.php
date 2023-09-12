<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <title>PHP Basics</title>

    
    <link REL=StyleSheet HREF="css/style.css" TYPE="text/css">
  </head>
  <body>
    
  <h1>HELLO WORLD!</h1>
  <br>
  <?php

    // PHP is a 'server-side' language, which means it runs on the web server
    // Remeber that JavaScript code runs on the client (the browser)
    // This means that you must have a web server running for php pages to work.
    // The results of the PHP code are sent to the client in the HTTP response
    // So we basically use PHP to generate HTML
    // Why do we need both server side and client side code?


    // STEP 1 - COMMENTS
    // Mention the php delimiter <?php
    // Show a web page that has html and php mixed into it - WordPress!
    // comments
    
    /*
    This is a 
    multi-line
    comment
    */

    # this is also a comment
  
    
    
    // STEP 2 - The results of PHP code is what get's sent to the browser
    // Show today's date
    $today = new DateTime();
    echo($today->format('m/d/Y'));

    
    // STEP 3 - Showing errors
    // turning on debugging:
    // WHY would you want to turn off debugging?
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    
    // STEP 4 - Generating HTML with PHP code
    // Output some HTML
    echo("<h3>Hello World</h3>");


    // STEP 5 - Spagetti Code
    // Note that PHP code is often mixed with HTML code
    //it's very common in php to see spagetti code
    

    // STEP 6 - Variables
    // Create a variable - variable names start with $
    // they normally use all lower case letters, and words
    // are separated by underscores
    // You don't need to specify a data type when you declare a variable
    // (php is 'loosely typed') and php will try to handle type conversions for you
    $my_var = "Bob";
    $my_other_var = "Smith";


    // STEP 7 - String Concatenation
    // Concatenate some strings...
    echo($my_var . " " . $my_other_var);

    $my_str = "foo";
    $my_str .= "bar";

    echo("<br" . $my_str);

    
    // STEP 8 - Constants
    // Define a Constant
    // note that constant names dont use $
    // also note that constants are global in scope
    // also note that constants can only hold 'scalar' data
    define("PI", 3.14);
    echo("<br>" . PI);


    // STEP 9 - Escaping Strings
    // Escaping quotes so that you can use them in a string
    $some_var = "He said \"Hi\".";
    echo($some_var);


    // STEP 10 - Variable Interpolation
    // There is a difference between using single quotes and double quotes
    // If you use double quotes you can mix variables into your string and their
    // values will be displayed
    echo("<br><br>");

    $some_var = "BLAH";
    echo("some_var is set to: $some_var");
    echo("<br><br>");
    echo('some_var is set to: $some_var');

    // STEP 11 - Conditionals and Logical Operators
    // Conditionals (IF ELSE)
    // and operators  && and ||
    
    $rich = true;
    $famous = false;

    if($rich && $famous){
        echo("Congrats!");
    }else{
        echo("Hopefully you are either rich or famous");
    }


    // STEP 12 - Built-in Functions
    // There are TONS of built-in functions in PHP
    // the strpos() function
    

    // The empty() function
    $x = "";

    if(empty($x)){
        echo('$x is empty');
    }


    // AND MANY, MORE FUNCTIONS THAT SAVE YOU LOTS OF CODING

    
    // GLOBAL VARIABLES
    // Php has global variables that are similar to global variables in JavaScript
    // (global variables declared in one .php file are visible in other .php files that are referenced in your script)
    // BUT, in order to use a global variable from within a function, it must be 
    // 're-declared' inside the function body, preceded by the 'global' keyword.

    $some_global = "foo";

    function some_function(){

        global $some_global;

        echo($some_global);
        echo("<br>");
        echo(PI);

    }

    some_function();


    // Note: PHP has two 'flavors' one is OO PHP where you use classes to call methods of objects (like Java or C#)
    // The other flavor is called 'procedural' where you just call functions.

    // Procedural Example (just call a built in function)
    //$con = mysqli_connect(params go here);

    // OOP (create an objec and then call the connect method)
    // $m = new MySQLi(); // call the constructor (remember that function names are case insensitive, so you may see new mysqli() )
    // then call the connect method
    // $con = $m->connect(params go here);    
  
    // QUESTION - What's the difference between a function and a method?
  ?>


 

  </body>
</html>
