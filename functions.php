<?php

function check_login($con)
{
    if (isset ($_SESSION["user_id"])) // if user id is set
   
    {
        $id = $_SESSION["user_id"]; // if it is set then assign its value to the $id variable
        
        $query = "select * from users where user_id = '$id' limit 1"; // sql query to retrieve user data based on the user_id value.

        $result = mysqli_query ($con, $query); // execute the query using the $con object and store the result in $result

        if ($result && mysqli_num_rows($result) > 0 ) // if the query is successfull and the result set contains at least one row
       
        {
            $user_data = mysqli_fetch_assoc($result); // fetch the row as an assocciative array and store it in $user_data
            

            return $user_data; // return the user data array
        }
    }


// redirect to login if the id is not set (user not logged in)
header("Location: login.php");
die;
}

function random_num($length)
{
    $text="";
    if($length < 5) // if length is less than 5
    {
        $length = 5; // assign 5 to length. This ensures the length is at least 5.
    }

    $len = rand(4,$length); // assign a variable between 4 and $length. This will be length for the user ids

    for ($i=0; $i < $len; $i++) { // for $len amount of times

        $text .= rand(0,9); // add a random number between 0 and 9 to $text

    }

    return $text;
}

function energy_use()
{
    $business_type = $_POST["businessType"];
    $business_size = $_POST["businessSize"];

    switch($business_type)
    {
        case "Retail Store";
        $estimate_energy_consumption = $business_size * 1000;
        break;

        case "Manufacturing Business";
        $estimate_energy_consumption = $business_size * 5000;
        break;

        case "Office Building";
        $estimate_energy_consumption = $business_size * 2000;
        break;

        default:
        $estimate_energy_consumption = 0;

    }
    
    return $estimate_energy_consumption;

} 

?>

