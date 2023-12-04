<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // define variables and set to empty values
        $emailErr = $userErr = $passwordErr = $cpasswordErr = $firstErr = $lastErr = $teamErr = "";
        $email = $username = $password = $cpassword = $firstname = $lastname = $teamname = "";

        // The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Validates email
            if (empty($_POST["email"])) {
                $emailErr = "You Forgot to Enter Your Email!";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address syntax is valid
                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                    $emailErr = "You Entered An Invalid Email Format";
                }
            }
            //Validates password & confirm passwords.
            if(!empty($_POST["password"])) {
                $password = test_input($_POST["password"]);
                if (strlen($_POST["password"]) <= '8') {
                    $passwordErr = "Your Password Must Contain At Least 8 Characters!";
                }
                elseif(!preg_match("#[0-9]+#",$password)) {
                    $passwordErr = "Your Password Must Contain At Least 1 Number!";
                }
                elseif(!preg_match("#[A-Z]+#",$password)) {
                    $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
                }
                elseif(!preg_match("#[a-z]+#",$password)) {
                    $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
                } else {
                    $passwordErr = "Please Check You've Entered Or Confirmed Your Password!";
                }
            }
            //Validates firstname
            if (empty($_POST["name"])) {
                $firstErr = "You Forgot to Enter Your Name!";
            } else {
                $firstname = test_input($_POST["firstname"]);
                //Checks if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                    $firstErr = "Only letters and white space allowed";
                }
            }
        }
        /*Each $_POST variable with be checked by the function*/
        function test_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
        }


        require __DIR__.'/../view/validation_result.php';
        return;
    }

    require __DIR__.'/../view/validation.php';
