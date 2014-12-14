<html>
	<div class="container">
		<head>
			<title>Array 1 - Lab 7</title>
			<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
		</head>
		<body>
		<?php
			include_once "Menu.php";
			include_once "Header.php";
			/* Create $calender array to hold the names of the months in a year */
			$calender = array("January", "February", "March" , "April", "May", "June" , "July" , "August", 
							  "September", "October", "November", "December");
			/*print_r the calender array */
			print_r($calender);
			echo"</br>";
			echo"<h1>FOR Loop</h1>";
			/* Loop through the calender printing out the month number and the month name */
			for($i=0;$i<sizeof($calender);$i++) {
				printf("Month %d: %s</br>",$i+1,$calender[$i]);
			}
			echo"</br>";
			/* Copy the values in the array $calender and copy it to $tempCalender */
			$tempCalender = $calender;
			/* Sort the temp array */
			sort($tempCalender);
			/* print_r the temp array */
			print_r($tempCalender);
			echo"</br>";
			echo"<h1>FOREACH Loop</h1>";
			$counter = 1; //Keep track of the month number
			/* foreach to loop through all the indexes of the array printing out the value in each index*/
			foreach($calender as $value) {
				printf("Month %d:  %s</br>",$counter,$value);
				$counter++;
			}
			echo"</br>";
			echo"<h1>WHILE Loop, SWITCH Statement</h1>";
			$counter = 0; //Keep track pf month
			/* While loop with a switch statement to iterate through the array and print out the month number, month and the number of days in 
			 * said month */
				while($counter<sizeof($calender)) {
					switch($calender[$counter]) {
						/* These months all have 31 days */
						case "January":
						case "March":
						case "May":
						case "July":
						case "August":
						case "October":
						case "December":
							printf("Month %d: %s has 31 days</br>", $counter+1,$calender[$counter]);
							break;
						/*These months all have 30 days */
						case "April":
						case "June":
						case "September":
						case "November":
							printf("Month %d: %s has 30 days</br>",$counter+1,$calender[$counter]);
							break;
						/* Odd Month 28 or 29 days */
						case "February" :
							printf("Month %d: %s has 28 or 29 days</br>",$counter+1,$calender[$counter]);
							break;
					}
					$counter++;
				}
				include_once "Footer.php"; //include footer
		?>
		</body>
	</html>
</div>
	
	
