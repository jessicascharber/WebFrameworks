<html>
	<head>
		<title>Schedule Confirmation</title>
			
<!---	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="javascript/storage.js"></script>
-->
</head>
	<body>
		<header>	
		<ul>
			<li><a href="index.html">Main</a></li> &nbsp;
			<li><a href="listing.html">Airline Schedule</a></li> &nbsp;
			<li><a href="entry.html">Schedule a Flight</a></li> &nbsp;
			<li><a href="update.html">Update a Flight</a></li> &nbsp;
			<li><a href="deletion.html">Cancel a Flight</a></li> &nbsp;
		</ul>
	</header>
		<div id="page" data-role="page" data-theme="b" >
			<div data-role="header" data-theme="b">
			<h1>Flight Info</h1>	
			</div>
		</div>
		<div data-role="content">


 			<h4><center><b> Your flight schedule confirmation. <b><center></h4> 

	<?php
	
		$flightNumber= (isset($_POST['flightNumber'])    ? $_POST['flightNumber']   : '');
		$fName= (isset($_POST['fName'])    ? $_POST['fName']   : '');
		$lName= (isset($_POST['lName'])    ? $_POST['lName']   : '');
		$departFrom= (isset($_POST['departFrom'])    ? $_POST['departFrom']   : '');
		$dateOfDepart= (isset($_POST['dateOfDepart'])    ? $_POST['dateOfDepart']   : '');
		$arrivingIn= (isset($_POST['arrivingIn'])    ? $_POST['arrivingIn']   : '');
		$dateOfReturn= (isset($_POST['dateOfReturn'])    ? $_POST['dateOfReturn']   : '');
							
	$flightRecord = array("$flightNumber","$fName","$lName","$departFrom","$dateOfDepart","$arrivingIn","$dateOfReturn");

						sort($flightRecord);
						$alength = count($flightRecord);
						for($i = 0; $i < $alength; $i++) {
							//$pattern = "/[a-zA-Z]/";
							//if (preg_match($pattern, $favorites[$i])) {
								echo "*" . $flightRecord[$i] . " ";
							} 
	 						//else {
							//echo "Invalid entry for favorite - " . $favorites[$i] . " Your entry must contain letters.";
							//}
							//echo "<br/><br/>";

		?>



				<div data-role="footer" data-theme="b">
	  <h4>Air Adventures &copy; 2019</h4>
	</div>
	</body>
</html>
