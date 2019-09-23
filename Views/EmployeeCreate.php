<?php
	require __DIR__ . '/../Controllers/EmployeeController.php';
?>

<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body align='center'>

    <h2>Registration Form</h2>

    <form action="" method="POST" > 
    	
    	<p>Employee Number:   	<input type="text" name="employeeNumber" > </p> 

        <p>Last Name:    		<input type="text" name="lastName" > </p>

        <p>First Name:    		<input type="text" name="firstName" > </p>

       	<p>Extension:   		<input type="text" name="extension"> </p> 

        <p>Email:   	 		<input type="text" name="email"> </p>

        <p>Office Code:    		<input type="text" name="officeCode"> </p>

       	<p>Report To:   		<input type="text" name="reportsTo"> </p> 

        <p>jobTitle:    		<input type="text" name="jobTitle"> </p>


        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit" name='submit'> 

    </form>
</body>
</html>


<?php 
	
	
	if(isset($_POST['submit'])) {
		$employeeController = new EmployeeController();
		$employeeController->create();		
	}

?>

