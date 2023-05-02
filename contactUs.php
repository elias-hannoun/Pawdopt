<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
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
                <li  class="side_menu_list" id="home"><a class="a2" href="homePage.php">Home page</a></li>
                <li class="side_menu_list"><a class="a2" href="findDogOrCat.php">Find a dog/cat</a></li>
                <li class="side_menu_list"><a class="a2" href="dogCare.php">Dog care</a></li>
                <li class="side_menu_list"><a class="a2" href="catCare.php">Cat care</a></li>
                <li class="side_menu_list"><a class="a2" href="petGiveAway.php">Have a pet to give away</a></li>
                <li class="side_menu_list"><a class="a2" href="createAccount.php">Create an Account</a></li>
                <li class="side_menu_list active"><a class="a2" href="contactUs.php">Contact us</a></li>

            </ul>

        </aside>
        <main class="main_body">
            <div class="contact_us_div">
                <p class="par_header">
                    Contact Us
                </p>
                <p>
                    Developed by: Elias Hannoun (40246643)
                    <br>
                    email: el_hanno@live.concordia.ca
                    <br>
                    Feel free to contact us if you have any questions, or to report a misuse or false information on our website. 
                </p>
            </div>
        </main>
    </div>
    <?php
    include 'footer.php'
    ?>

    <script src="script.js"></script>

</body>

</html>