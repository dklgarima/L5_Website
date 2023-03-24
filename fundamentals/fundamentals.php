<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="main.css" />
 </head>
 <body>
 <header>
 <h1>Garima Dhakal C7261088</h1>
 </header>

 <section id="container">
		 <h1>Fundamentals of PHP</h1>
		<?php
			echo "<h1>Selection</h1>";
			$day = date('l'); //that is a lower case L
			echo 'It\'s '.$day;
			echo"<br />";
			if ($day == "Wednesday"){
				echo"It's a midweek";
			}
			else{
				echo"It's not a midweek";
			}
		
			echo"<br />";
		
			$time = date("H:i:s");
			echo"<br />";
			echo"Current Hour is ".$time;
			if ($time < 12){
				echo"<br>Good Morning</br>";
			}
			elseif ($time > 12 && $time <18){
				echo"<br>Good Afternoon</br>";
			}
			else{
				echo"<br>Good Night</br>";
			}
		
			echo"<br>";
			$psword = "password";
			echo strlen($psword);
			if (strlen($psword) > 4 && strlen($psword) < 10){
				echo "<br>Password length is valid</br>";
			}
			else{
				echo"<br>Password length is invalid</br>";
			}
			if ($psword == "password"){
				echo ("<br>Password Valid</br>");
			}
			else{
				echo ("<br>Password Invalid</br>");
			}
		

			echo "<h2> Ticket Company </h2>";
			$age = 15;
            $price = 25;
            $member = "True";
            if($age<12 && $member == "True"){
                $Final = 25-(25*60/100);
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
            elseif($age<18 && $age>12 && $member == "True"){
                $Final = 25-(25*35/100);
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
            elseif($age>65 && $member == "True"){
                $Final = 25-(25*35/100);
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
            elseif($age<65 && $age>18 && $member == "True"){
                $Final = 25-(25*10/100);
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
            elseif($age<12 && $member == "False"){
                $Final = 25-(25*50/100);
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
            elseif($age<18 && $age>12 && $member == "False"){
                $Final = 25-(25*25/100);
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
            elseif($age>65 && $member == "False"){
                $Final = 25-(25*25/100);
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
            else{
                $Final = 25;
                echo"Initial Ticket Price: $price<br> Age: $age <br>Member: $member <br> Final Ticket: $Final ";
            }
		
		
			echo"<h1>Arrays</h1>";
			echo"<h2>Simple-Arrays</h2>";
			$products = array("t-shirt", "cap", "mug");
			print_r($products);
			echo ("<br />");
			$products1 = array("t-shirt","shirt", "mug");
			print_r(array_replace($products,$products1));
			echo ("<br />");
			array_push($products1, "skirt");
			print_r($products1);
			echo ("<br />");
			echo("Items in my product array");
			echo ("<br />");
			echo("The item at index[2] : ".$products1[2]);
			echo("<br />");
			echo("The item at index[3] : ".$products1[3]);
			echo("<br></br>");
			
			echo("<h2> Associative Array </h2>");
			$customer = array('CustID'=>'12', 'CustName'=>'Sarah', 'CustAge'=>'23', 'CustGender'=>'F');
			print_r($customer);
			echo("<br />");
			$customer['CustEmail'] = 'sarah@gmail.com';
			print_r($customer);
			echo ("<br />");
		
			echo("Items in my customer array <br />");
			echo "The item at index [CustName] is: " . $customer['CustName'] . "<br>";
			echo "The item at index [CustEmail] is: " . $customer['CustEmail'];
			
			echo("<h2>Multi_Dimensional Arrays</h2>");
			$stock = array(
				array("t-shirt", "£9.99", 100, array("blue", "green", "red")),
				array("cap", "£4.99", 50, array("blue", "black", "grey ")),
				array("mug", "£6.99", 30, array("yellow", "green", "pink"))
			);
			print_r($stock[0]);
		
			echo "<br>This is my order: <br>";
			echo $stock[0][3][1] . " " . $stock[0][0] . "<br>";
			echo "Price: " . $stock[0][1] . "<br>";
			echo $stock[1][3][2] . " " . $stock[1][0] . "<br>";
			echo "Price: " . $stock[1][1] . "<br>";
		
			echo ("<h1>Loops</h1>");
			echo ("<h2>While Loop</h2>");
			$counter = 1;
			while($counter < 6){
				echo 'Count: '.$counter.'<br />';
				$counter++; 	
			}
			echo("<br />");
			$counter = 1;
			$shirtPrice = 9.99;
			echo("<br></br>");
			echo "<table cellpaddig=10px border=2>";
			echo "<tr>
					<th>Quantity</th>
					<th>Price</th>
				</tr>";
			while($counter<=10){
				echo "<tr>";
				$total = $counter*$shirtPrice;
				echo "<td>$counter</td><td> £$total </td>";
				$counter++;
				echo "</tr>";
				}
				echo"</table>";
				
				echo "<h3> For Loops</h3>";
		
					$names = array('Peter', 'Kat', 'Laura', 'Ali', 'Popacatapetal');
		
					for($i=0; $i<5; $i++){
						echo $names[$i] .'<br />';
					}
		
					echo "<h3>Foreach Loops</h3>";
		
					$names = array('Peter'=>'c123456', 'Kat'=>'c654321', 'Laura'=>'c987654', 'Ali'=>'c654987', 'Popacatapetal'=>'c765984');
					foreach($names as $x => $y){
						echo "Name: $x ID: $y <br>";
					}
		
					echo "<br>";
					$city = array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
					print_r($city);
		
					foreach($city as $x => $y){
						$city[$x] = ucfirst(strtolower($y));
					}
					echo "<br>";
					print_r($city);
		?>
	 </section>
 <footer>
 <small> <a href="../watIndex.html">Home</a></small>
 </footer>
 </body>
</html>
