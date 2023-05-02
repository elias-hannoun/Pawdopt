<?php
$file = "login.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["create_username"]);
    $password = trim($_POST["create_password"]);

    $username_valid = preg_match("/^[a-zA-Z0-9]+$/", $username);
    $password_valid = preg_match("/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{4,}$/", $password);

    $username_available = true;
    $handle = fopen($file, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            if (strpos($line, $username . ":") === 0) {
                $username_available = false;
                break;
            }
        }
        fclose($handle);
    }

    if ($username_valid && $password_valid && $username_available) {
        $handle = fopen($file, "a");
        fwrite($handle, $username . ":" . $password . "\n");
        fclose($handle);
        $message = "Account created successfully!";
    } else {
        $message = "Please enter a valid username and password.";
        if (!$username_valid) {
            $message .= " The username should only contain letters and numbers.";
        }
        if (!$password_valid) {
            $message .= " The password should have at least 4 characters (letters and numbers only) and contain at least one letter and one number.";
        }
        if (!$username_available) {
            $message .= " This username is not available.";
        }
    }

    echo "<div>$message</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="pics/logo_dark.png">

</head>

<body>

    <div>
        <?php
        include 'header.php'
        ?>
    </div>
    <div class="body_and_menu">
        <aside class="side_menu">
            <ul class="navbar">
                <li class="side_menu_list" id="home"><a class="a2" href="homePage.php">Home page</a></li>
                <li class="side_menu_list"><a class="a2" href="findDogOrCat.php">Find a dog/cat</a></li>
                <li class="side_menu_list"><a class="a2" href="dogCare.php">Dog care</a></li>
                <li class="side_menu_list"><a class="a2" href="catCare.php">Cat care</a></li>
                <li class="side_menu_list"><a class="a2" href="petGiveAway.php">Have a pet to give away</a></li>
                <li class="side_menu_list active"><a class="a2" href="createAccount.php">Create an Account</a></li>
                <li class="side_menu_list"><a class="a2" href="contactUs.php">Contact us</a></li>

            </ul>

        </aside>
        <main class="main_body">
            <div class="create_account_div">
                <form  action="#" method="post" class="forms forms2">

                    <p>
                    <h1>Create a New Account</h1>
                    </p>
                    <hr>

                    <p>
                        <input type="text" name="create_username" id="create_username_id" class="form_txt_fld2" placeholder="Username" required><br>
                        Only letters(Upper & Lower case) and digits are accepted
                    </p>


                    <p>
                        <input type="password" name="create_password" id="create_password_id" class="form_txt_fld2" placeholder="Password" required><br>
                        At least 4 characters (letters and digits only)<br>At least one letter and one digit
                    </p>

                    <p>
                        <input type="submit" onclick="/*checkFieldsFull()*/" class="submit_btn submit_btn_create_account" value="Create Account">
                    </p>


                </form>

            </div>

        </main>
    </div>

    <?php
    include 'footer.php'
    ?>


    <script src="script.js"></script>


</body>

</html>