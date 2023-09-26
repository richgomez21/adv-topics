<!DOCTYPE html>
<html>
<head>
<title>Array Exercises</title>
<script type="text/javascript">
window.addEventListener("load", ()=>{
	
	var employees = [
		{id:1, firstName:"Betty", lastName:"Smith", salary:55000 },
		{id:2, firstName:"Bo", lastName:"Hansen", salary:35000 },
		{id:3, firstName:"Chris", lastName:"Jones", salary:45000 },
		{id:4, firstName:"John", lastName:"Ortega", salary:75000 },
		{id:5, firstName:"Cliff", lastName:"Long", salary:65000 },
		{id:6, firstName:"Charlie", lastName:"Green", salary:60000 },
		{id:7, firstName:"Tom", lastName:"Black", salary:52000 },
		{id:8, firstName:"Sara", lastName:"Gray", salary:80000 },
		{id:9, firstName:"Lisa", lastName:"Johnson", salary:31000 },
		{id:10, firstName:"Michelle", lastName:"Link", salary:55000 }
	];



	/*
	Problem 1
	Write a function named getMaxSalary
	The function should loop through the array and return the highest salary
	After you declare the function, invoke it and console log the return value.   
	*/
	getMaxSalary(){
		foreach(employee in employees){
			return max(salary);
		}
	}





	/*
	Problem 2
	Write a function named getById
	The function should have a single parameter, which should be an id number
	In the body of the function, loop through the employees array in search of the one whose id matches the parameter
	The function should return the employee object whos id matches the parameter
	If there is no employee whos id matches the parameter, then the function should return false

	After you write the function, invoke it and pass in a value of 7
	Then console log the return value
	*/

	


	/*
	Problem 3
	Write a function named getHighestPaidEmployee
	It should return the employee with the highest salary

	After you declare the function, invoke it and console log the return value
	*/




	/*
	Problem 4
	Use the splice array method to remove Charlie Green from the employees array
	*/




	
});
</script>
</head>
<body>
	<h1>Working with Arrays in JavaScript and PHP</h1>
	<p>
		There are 4 JavaScript problems for you to solve (see the srcript element inside the head).
		Then there are 4 PHP problems for you to solve (in the body below).
	</p>
<?php
echo("<h3>PHP Problems</h3>");

$employees = array(
	["id" => 1, "firstName" => "Betty", "lastName" => "Smith", "salary" => 55000],
	["id" => 2, "firstName" => "Bo", "lastName" => "Hansen", "salary" => 35000],
	["id" => 3, "firstName" => "Chris", "lastName" => "Jones", "salary" => 45000],
	["id" => 4, "firstName" => "John", "lastName" => "Ortega", "salary" => 75000],
	["id" => 5, "firstName" => "Cliff", "lastName" => "Long", "salary" => 65000],
	["id" => 6, "firstName" => "Charlie", "lastName" => "Green", "salary" => 60000],
	["id" => 7, "firstName" => "Tom", "lastName" => "Black", "salary" => 52000],
	["id" => 8, "firstName" => "Sara", "lastName" => "Gray", "salary" => 80000],
	["id" => 9, "firstName" => "Lisa", "lastName" => "Johnson", "salary" => 31000],
	["id" => 10, "firstName" => "Michelle", "lastName" => "Link", "salary" => 55000]
);



echo("<h4>Problem 1</h4>");
/*
Problem 1
Write a function named get_max_salary
The function should loop through the array and return the highest salary
After you declare the function, invoke it and echo  the return value.   
*/

function get_max_salary(){
	global $employees;
	$max = 0;
	foreach($employees as $e){
		if($e["salary"] > $max){
			$max = $e["salary"];
		}
	}
	return $max;
}

echo(get_max_salary());





echo("<h4>Problem 2</h4>");
/*
Problem 2
Write a function named get_by_id
The function should have a single parameter, which should be an id number
In the body of the function, loop through the employees array in search of the one whose id matches the parameter
The function should return the employee object who's id matches the parameter
If there is no employee whos id matches the parameter, then the function should return false

After you write the function, invoke it and pass in a value of 7
Then var_dump the return value (pass in the return value to the var_dump() function)
*/

function get_by_id($id){
	global $employees;
	foreach($employees as $e){
		if($e["id"] == $id){
			return $e;
		}
	}
	return false;
}

var_dump(get_by_id(7));





echo("<h4>Problem 3</h4>");
/*
Problem 3
Write a function named get_highest_paid_employee
It should return the employee with the highest salary
This function should take an array of employees as a parameter
(some people think that you shouldn't use the global keyword inside the body of a function, instead you should pass in the required information as a parameter)

After you declare the function, invoke it (pass in the $employees array as a param) and  then var_dump the return value
*/

// function get_highest_paid_employee(){
// 	global $employees;
// 	$max = 0;
// 	foreach($employees as $emp){
// 		if($emp["salary"] > $max){
// 			$max = $e;
// 		}
// 	}
// 	return $max;
// }
// var_dump(get_highest_paid_employee());





echo("<h4>Problem 4</h4>");
/*
Problem 4
Use the array_splice function to remove Charlie Green from the employees array.
Hint: Here's the official documentation on the array_splice function in PHP - https://www.php.net/manual/en/function.array-splice.php
Then var_dump the employees array.
*/



?>
</body>
</html>