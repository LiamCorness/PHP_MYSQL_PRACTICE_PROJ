<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $estimate_energy_use = energy_use();

        echo "<div class='result'>". "Estimated Energy Usage: ". $estimate_energy_use."kWh". "</div>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Energy Usage Calculator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <style type= "text/css">
            #submit-button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #login-button:hover {
        background-color: #0069d9;
    }

    .result {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 10px;
        margin-top: 20px;
    }

</style>
<a href="index.php">Home<a>

	<div class="container">
		<h1 class="text-center mb-5">Energy Usage Calculator</h1>
		<form method="POST" action="compare.php">
			<div class="form-group row">
				<label for="businessType" class="col-sm-3 col-form-label">Business Type:</label>
				<div class="col-sm-9">
					<select class="form-control" id="businessType" name="businessType">
						<option value="">Select Business Type</option>
						<option value="Retail Store">Retail Store</option>
						<option value="Manufacturing Business">Manufacturing Business</option>
						<option value="Office Building">Office Building</option>
						<option value="Restaurant">Restaurant</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="businessSize" class="col-sm-3 col-form-label">Business Size:</label>
				<div class="col-sm-9">
                    <input type="number" class="form-control" id="businessSize" name="businessSize" placeholder="Enter Number Of Employees">
				</div>
			</div>

			<div class="form-group row">
				<label for="contactName" class="col-sm-3 col-form-label">Contact Name:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Enter Contact Name">
				</div>
			</div>

			<div class="form-group row">
				<label for="contactEmail" class="col-sm-3 col-form-label">Contact Email:</label>
				<div class="col-sm-9">
                    <input type="text" class="form-control" id="contactEmail" placeholder="Enter Contact Email"><br><br>
                    <input type="submit" value="submit" id="submit-button">
                </div>
            </div>
