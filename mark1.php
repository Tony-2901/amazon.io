<?php

require_once "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login` (`email`, `password`) VALUES (?, ?)";

    if ($stmt = mysqli_prepare($link,$sql))
    {
        mysqli_stmt_bind_param($stmt,"ss",$t_email,$t_password);

        $t_email = $email;
        $t_password = $password;

        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            echo "The record inserted successfully";
            // exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }

        
    }
    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);


}
// else if ($_SERVER("REQUEST_METHOD") == "GET")
// {
//     echo "maja aa gaya";
// }




?>