<?php
session_start();

if (isset($_SESSION['username'])) {
  header('Location: petGiveAway.php');
  exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $login_found = false;
  $file = fopen('login.txt', 'r');
  while (($line = fgets($file)) !== false) {
    $line = trim($line);
    $fields = explode(':', $line);
    if (count($fields) == 2 && $fields[0] == $username && $fields[1] == $password) {
      $login_found = true;
      break;
    }
  }
  fclose($file);

  if ($login_found) {
    $_SESSION['username'] = $username;

    header('Location: petGiveAway.php');
    exit();
  } else {
    $error_msg = 'Invalid username or password';
  }
  echo "<div>$error_msg</div>";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
                <li class="side_menu_list"><a class="a2"  href="findDogOrCat.php">Find a dog/cat</a></li>
                <li class="side_menu_list"><a class="a2" href="dogCare.php">Dog care</a></li>
                <li class="side_menu_list"><a class="a2"  href="catCare.php">Cat care</a></li>
                <li class="side_menu_list"><a class="a2"  href="petGiveAway.php">Have a pet to give away</a></li>
                <li class="side_menu_list"><a class="a2"  href="createAccount.php">Create an Account</a></li>
                <li class="side_menu_list"><a class="a2"  href="contactUs.php">Contact us</a></li>
                <li class="side_menu_list active"><a class="a2"  href="signIn.php">Sign In</a></li>

            </ul>

        </aside>
        <main class="main_body">
            <div class="create_account_div">
                <form method="post" class="forms forms2">

                    <p>
                    <h1>Sign In</h1>
                    </p>
                    <hr>

                    <p>
                        <input type="text" name="username" id="username_id" class="form_txt_fld2"
                            placeholder="Username" required>
                    </p>


                    <p>
                        <input type="password" name="password" id="password_id" class="form_txt_fld2"
                            placeholder="Password" required>
                    </p>

                    <p>
                        <input type="submit" onclick="/*checkFieldsFull()*/"
                            class="submit_btn submit_btn_signIn_account" value="Sign In">
                    </p>

                    <hr>
                    <div>
                        <p>Don't have an account? <a href="createAccount.php">Create an account now!</a></p>
                    </div>
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