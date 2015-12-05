<?php 
	class html_helper {
		public function print_table($array) {
			# This function prints a beautiful html table 
			# from a multidimentional array. 
			if($array){
				echo "<table><tr>";
					foreach($array[0] as $a => $b){
						echo "<th>".$a."</th>";
					} 
				}
				echo "</tr>";
				foreach($array as $a => $b){
					echo "<tr>";
					foreach($b as $c => $d){
						echo "<td>".$d."</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
		public function print_select($select_name, $array){
			# This function takes a string and an array and returns
			# a string that is formatted in html.
			if($select_name && $array) {
				echo "<select name = $select_name>";
						foreach($array as $x){ 
							echo "<option value=$x>$x</option>";
						}
				echo "</select>";
			} 
		}
	} # ------------------ End of html helper -------------- #
	
 ?>

<!doctype html>
<html lang='en'>
<head>
	<title>HTML Helper!</title>
	<meta charset='UTF-8'>
	<!-- <meta http-equiv="refresh" content="1"> -->
	<style type="text/css">
		th {
			margin: 0px; 
			background-color: gray; 
			border: 1px solid black;
			width: 100px; 
			border-collapse: collapse; 
		}
		td {
			margin: 0px; 
			background-color: rgb(240,240,240); 
			border: 1px solid black;
			width: 100px; 
			border-collapse: collapse;
		}
		select {
			width: 100px; 
			border: 1px solid gray;
			border-radius: 3px; 
		}
	</style>
</head>
<body>
	<?php 
		# Typical multidimentional that you'd get from a database response.
		$from_database = array(array('first_name'=>'Josue', 'last_name'=>'Chery', 'hobby'=>'soccer'),
							   array('first_name'=>'Angelita', 'last_name'=>'Chery', 'hobby'=>'singing'),
							   array('first_name'=>'James', 'last_name'=>'Joseph', 'hobby'=>'basketball')
							  );
		$users_table = new html_helper;
		$users_table->print_table($from_database);

		# Array for state options
		$states = array('AL','AK','AZ','AR','CA','CO','CT','DE','FL','GA',
						'HI','ID','IL','IN','IA','KS');
		$select_states_option = new html_helper;
		$select_states_option->print_select('states', $states);
	 ?>
</body>
</html>