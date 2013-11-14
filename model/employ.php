<?php 

//variables from ajax
$appFor = $_POST['appFor'];
$genStart = $_POST['genStart'];
$availability = $_POST['availability'];

$firstName = $_POST['firstName'];
$mi = $_POST['mi'];
$lastName = $_POST['lastName'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$appEmail = $_POST['appEmail'];

$currently = $_POST['currently'];
$currentEmp = $_POST['currentEmp'];
$currentPos = $_POST['currentPos'];
$empSince = $_POST['empSince'];
$supervisor = $_POST['supervisor'];
$currentCity = $_POST['currentCity'];
$currentSt = $_POST['currentSt'];
$currentZip = $_POST['currentZip'];
$currentPhone = $_POST['currentPhone'];
$currentRate = $_POST['currentRate'];

$previousEmp = $_POST['previousEmp'];
$previousPos = $_POST['previousPos'];
$empFrom = $_POST['empFrom'];
$empPrev = $_POST['empPrev'];
$supervisorPrev = $_POST['supervisorPrev'];
$prevCity = $_POST['prevCity'];
$previousSt = $_POST['previousSt'];
$previousZip = $_POST['previousZip'];
$previousPhone = $_POST['previousPhone'];
$previousRate = $_POST['previousRate'];
$leaving = $_POST['leaving'];

$previousTwoEmp = $_POST['previousTwoEmp'];
$previousTwoPos = $_POST['previousTwoPos'];
$empFromTwo = $_POST['empFromTwo'];
$empPrevTwo = $_POST['empPrevTwo'];
$supervisorPrevTwo = $_POST['supervisorPrevTwo'];
$prevCityTwo = $_POST['prevCityTwo'];
$previousStTwo = $_POST['previousStTwo'];
$previousZipTwo = $_POST['previousZipTwo'];
$previousPhoneTwo = $_POST['previousPhoneTwo'];
$previousRateTwo = $_POST['previousRateTwo'];
$leavingTwo = $_POST['leavingTwo'];

$served = $_POST['served'];
$branch = $_POST['branch'];
$special = $_POST['special'];
$rank = $_POST['rank'];

$citizen = $_POST['citizen'];
$discharge = $_POST['discharge'];
$reason = $_POST['reason'];
$convicted = $_POST['convicted'];
$crime = $_POST['crime'];


//email variables
//change this before live
$to = "KerickTatiana@gmail.com";
$sub = "Employment Application from " . $firstName;

//html message
$msg = "
	<html>
		<header>" . $sub . "</header>
		<body>
			
			<p>Employment application from: " . $firstName . $mi . $lastName . "</p>
			<br />
			<br />
			
			<p>----General Information----<p>
			<p> Applying For: " . $appFor . "</p>
			<p> Can start: " . $genStart . "</p>
			<p> Availability: " . $availability . "</p>
			<br />
			
			<p>----Person Information----<p>
			<p>Whole Name: " . $firstName . $mi . $lastName . "</p>
			<p>Address: " . $street . "<br />" . $city . $state . $zip . "</p>
			<p>Contanct Information: " . $phone . "<br />" . $appEmail . "</p>
			<br />
			
			<p>----Work Experience----<p>
			<p>Current Employment:</p>
			<p>Currently Employed: " . $currently . "</p>
			<p>Works at: " . $currentEmp . "<br />" . $currentCity . $currentSt . $currentZip . "</p>
			<p>As: " . $currentPos . "</p>
			<p>Since: " . $empSince . "</p>
			<p>Rate of: " . $currentRate . "</p>
			<p>Supervisor: " . $supervisor . "</p>
			<p>Phone: " . $currentPhone . "</p>
			<br />
			
			<p>Previous Employment</p>
			<p>Worked at: " . $previousEmp . "<br />" . $prevCity . $previousSt . $previousZip . "</p>
			<p>As: " . $previousPos . "</p>
			<p>From: " . $empFrom . "</p>
			<p>Til: " . $empPrev . "</p>
			<p>Rate of: " . $previousRate . "</p>
			<p>Supervisor: " . $supervisorPrev . "</p>
			<p>Phone: " . $previousPhone . "</p>
			<br />
			
			<p>Previous Employment</p>
			<p>Worked at: " . $previousTwoEmp . "<br />" . $prevCityTwo . $previousStTwo . $previousZipTwo . "</p>
			<p>As: " . $previousTwoPos . "</p>
			<p>From: " . $empFromTwo . "</p>
			<p>Til: " . $empPrevTwo . "</p>
			<p>Rate of: " . $previousRateTwo . "</p>
			<p>Supervisor: " . $supervisorPrevTwo . "</p>
			<p>Phone: " . $previousPhoneTwo . "</p>
			<br />
			
			<p>----Military Service----</p>
			<p>Served in the Military: " .$served . "</p>
			<p>Branch: " . $branch . "</p>
			<p>Special: " . $special . "</p>
			<p>Rank: " . $rank . "</p>
			<br />
			
			<p>----Legal Information----</p>
			<p>Legal Citizen or Have Proper Paper work: " . $citizen . "</p>
			<p>Ever Discharged from Company: " . $discharge . "</p>
			<p>Why were they discharges: " . $reason . "</p>
			<p>Ever Convicted of a Crime: " . $convicted . "</p>
			<p>Explaination: " . $crime . "</p>
			<br />
			
			<p>Reply to this person at: " . $appEmail . "</p>
			<br />
			<br />
			<p>----End----</p>
		</body>
	</html>
";

//setting content-type
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; //I have no idea what charset portion is
$headers .= "From: " . $appEmail . "\r\n";

mail($to, $sub, $msg, $headers);

?>

