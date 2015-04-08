<?php
	//print "<pre>";
	//print_r($_POST);
	//print_r($_FILES);

 	//exit;
	//assume data validation
	$customerNumber=$_POST['customerNumber'];
	$customerName=$_POST['customerName'];
	$contactLastName=$_POST['contactLastName'];
	$contactFirstName=$_POST['contactFirstName'];
	$NPI=$_POST['NPI'];
	$SS=$_POST['SS'];
	$CAQHID=$_POST['CAQHID'];
	$taxID=$_POST['taxID'];
	$grouptaxID=$_POST['grouptaxID'];
	$DOB=$_POST['DOB'];
	$email=$_POST['email'];
	$jobTitle=$_POST['jobTitle'];
	$licenseNumber=$_POST['licenseNumber'];
	$groupNPI=$_POST['groupNPI'];
	$phone=$_POST['phone'];
	$addressLine1=$_POST['addressLine1'];
	$addressLine2=$_POST['addressLine2'];
	$city=$_POST['city'];
	$state=$_POST['state'];	
	$postalCode=$_POST['postalCode'];
	$country=$_POST['country'];
	

	//connect to DB Server
	
	$server='localhost';
	$username='hhuynh';
	$passwd='huyn0205';
	
	$link=mysql_connect($server,$username,$passwd);

	if($link==FALSE){
		print" unsuccessfully connected to DB Server";
	}
	//select database
	$database="classicmodels";
	if(!mysql_select_db($database, $link)){
		print "db not found";
	}
	//escape input data

	//$user_es=mysql_real_escape_string($user);
	$customerNumber_es=mysql_real_escape_string($customerNumber);
	$customerName_es=mysql_real_escape_string($customerName);
	$contactLastName_es=mysql_real_escape_string($contactLastName);
	$contactFirstName_es=mysql_real_escape_string($contactFirstName);
	$NPI_es=mysql_real_escape_string($NPI);
	$SS_es=mysql_real_escape_string($SS);
	$CAQHID_es=mysql_real_escape_string($CAQHID);
	$taxID_es=mysql_real_escape_string($taxID);
	$grouptaxID_es=mysql_real_escape_string($grouptaxID);
	$DOB_es=mysql_real_escape_string($DOB);
	$email_es=mysql_real_escape_string($email);
	$jobTitle_es=mysql_real_escape_string($jobTitle);
	$licenseNumber_es=mysql_real_escape_string($licenseNumber);
	$groupNPI_es=mysql_real_escape_string($groupNPI);
	$phone_es=mysql_real_escape_string($phone);
	$addressLine1_es=mysql_real_escape_string($addressLine1);
	$addressLine2_es=mysql_real_escape_string($addressLine2);
	$city_es=mysql_real_escape_string($city);
	$state_es=mysql_real_escape_string($state);
	$postalCode_es=mysql_real_escape_string($postalCode);
	$country_es=mysql_real_escape_string($country);
	//build query

	$query="INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, NPI, SS, CAQHID, taxID, grouptaxID, DOB, email, jobTitle, licenseNumber, groupNPI, phone, addressLine1, addressLine2, city, state, postalCode, country) VALUES ('$customerNumber_es', '$customerName_es', '$contactLastName_es', '$contactFirstName_es', '$NPI_es', '$SS_es', '$CAQHID_es', '$taxID_es', '$grouptaxID_es', '$DOB_es', '$email_es', '$jobTitle_es', '$licenseNumber_es', '$groupNPI_es', '$phone_es', '$addressLine1_es', '$addressLine2_es', '$city_es', '$state_es','$postalCode_es', '$country_es')";

	//execute query
	//print $query;
	
	$result=mysql_query($query);
	
	if($result==FALSE){
		print"query not executed\n";
	}
	else{
	    print"Insert data successfuly";
		}

	
	
?>