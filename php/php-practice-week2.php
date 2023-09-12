<?php

// You'll use this array for some of the following functions
$emails = ["bob@yahoo.com", "lu@gmail.com", "gene@gmail.com"];


echo("<h3>PROBLEM 1</h3>");
// Loop through the $emails array and echo out each element on it's own line
// (use a <br> tag to create the line breaks)



echo("<h3>PROBLEM 2</h3>");
// Add this string to the $emails array: ted@bing.com
// Then var_dump the array to make sure you added it properly



echo("<h3>PROBLEM 3</h3>");
// Use the strpos() function to figure out how many emails in the 
// $emails array are gmail accounts
// then echo the result



echo("<h3>PROBLEM 4</h3>");
// loop through the $emails array and echo out the number of characters 
// in each email address



echo("<h3>PROBLEM 5</h3>");

$sales_tax = 0.07;
// Write a function named getTotalPrice
// It should have one parameter that represents the 
// price of a product.
// The function should use the $sale_tax variable above
// to add the tax to the price of a product.
// The function should return the result.
// When you are done writing the function, try it out and
// echo the return value
// HINT: remember that if you want to use a globabl variable
// (like $sales_tax) inside the body of a function, you 
// must add something at the top of the function body




echo("<h3>PROBLEM 6</h3>");
// Create constant named INCOME_TAX and initialize it to 
// a value of 0.11
// Then echo the constant




echo("<h3>PROBLEM 7</h3>");
// Write a function named getNetPay
// It should have one parameter that represents an employees
// gross pay
// In the body of the function reduce the gross pay by
// applying the INCOME_TAX constant from the previous problem
// The function should return the result
// When you are done writing the function, try it out and
// echo the return value
// HINT: constants do NOT have to be registered with 'global', unlike 
//what you had to do for the previous function you defined (WEIRD!!!!)



echo("<h3>PROBLEM 8</h3>");
// figure out how to 'join' an array of strings into a single string
// then join the elements in this array into a single string, but separate each word with a space




echo("<h3>PROBLEM 9</h3>");
// Create an assocative array that models dog object.
// Set the keys and value like so:
// KEY   			VALUE
// ------------------------------------------
// name 			Lassie
// age 				9
//
// When you are done creating the array, var dump it so that you 
// can view it in the browser



echo("<h3>PROBLEM 10</h3>");
// Loop through the associative array that models a dog
// and echo the name of each key, and the value of each key
// Hint: you'll have to use a variation of the foreach loop
// that allows you to loop through the keys and the values 



echo("<h3>PROBLEM 11</h3>");
// create an array of 3 'dogs', where each element is
// an associative array like the one you previously created.
// Use the same keys that you did previously (name, age)
// and set the values to what ever you want 
// Then var dump the array so you can make sure you created properly



echo("<h3>PROBLEM 12</h3>");
// loop through the array of 'dogs' that you created in the previous
// problem, and echo the name of each dog in it



// At this point we could create all kinds of problems
// that will help you practice working with arrays in PHP
// For example: figure how many dogs are older than 2 years, etc.
// For example: Create an array of first names by looping through the
// $emails and removing the @ sign and the domain name from each email address


// THE NEXT FEW PROBLEMS ARE TRICKY, WE CAN DO THEM TOGETHER IN CLASS
echo("<h3>PROBLEM 13</h3>");
// figure out how to 'split' a string in PHP
// then split the $today variable on the / (forward slash)
// then echo the month, day, and year,  each on their own line



echo("<h3>PROBLEM 14</h3>");
// loop through the $emails array and capitalize all the email addresses in the array
// then var_dump the $emails array 
//(you will have to change each element in the array to be all caps)



echo("<h3>PROBLEM 15</h3>");
// Use PHP to output (echo) an UNORDERED list that displays
// each element in the $emails array



?>