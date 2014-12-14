<html>
<div class="container">
	<div class="header">
		<h1>Brodie Taillefer<br>040-757-711<br>Lab 7<br>Programming Arrays, Objects</h1> <br>
	</div>
	<div class="menu">
		<a href="Array1.php">Array1.php</a><br/>
		<a href="Array2.php">Array2.php</a><br/>
		<a href="Objects.php">Objects.php</a><br/>
	</div>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
		<title>Array 2 - Lab 7</title>
	</head>
	<body>
		<h1>Questions</h1>
		<b>1.What is the main benefit of using a function? </b><br>
		The main benefit of using a function is it's reusability.If you have a task that needs to be performed
		over and over, it's smart to use a function.There are thousands of pre-defined function at your disposal, and an <br>
		infinite that you can create.<br><br>
		<b>2.How many values can a function return?</b><br>
		A function can only return 1 value,but you could return an array that contains multiple values<br><br>
		<b>3.What is the difference between accessing a variable by name and by reference?</b><br>
		Accessing the variable by name mean's calling that variable directly, and reference mean's pointing to a place in memory.<br>
		Example : $a = &$b;<br>
		Here $a and $b are equal values, but $a is not pointing to $b. $a and $b are pointing to the same location.<br>
		We would be able to manipulate the value $b points to by editing $a.<br>
		If we used $a = $b, we are copying the value's of $b directly into $a creating a new memory location,<br>
		and not changing $b by editing $a.<br><br>
		<b>4.What is the meaning of "scope" in PHP?</b><br>
		Scope is where a variable can be seen depening on where it was intialized. If a variable is defined in a function, once we <br>
		exit that function that variable and it's data is lost. This also includes include and required files<br><br>
		<b>5.How can you incorporate one PHP file within another? </b><br>
		To include one PHP file within another, you can use the various keywords <i>include</i>,<i>include_once</i><br>
		if the file isn't found it will generate a warning. You can also include files with <i>require</i> and <i>require_once</i><br>
		this will stop the script if the file is not found <br><br>
		<b>6.How is an object different from a function?</b><br>
		A function can include it's own instance variables and has the ability to return a value. An object includes it's own instance<br>
		variables and also includes its own functions that can be called once the object is created.<br><br>
		<b>7.How do you create a new object in PHP</b><br>
		To create a simple object with no variables or functions the syntax is :  <br>
		class Person { }<br><br>
		<b>8. What syntax would you use to create a subclass from an existing one?</b>
		class Student extends Person { }<br><br>
		<b>9.How can you call an initializing piece of code when an object is created?</b></br>
		Once the object is created we can use the functions we have created in the class to intialize the objects variables <br>
		example : Using the function setName() we declared to intialize the object's $Name variable.<br><br>
		<b>10.Why is it a good idea to explicitly declare properties within a class?</b><br>
		It is a good idea so you are able to declare the variables accessability ie ( public,private,etc) and to prevent <br>
		any undefined property error's from not explicitly declaring your properties <br><br>
	</body>
	<div class="footer">
		Lab7 <br>Programming Arrays, Objects<br>
	</div>
</div>
</html>
