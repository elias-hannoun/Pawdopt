<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
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
                <li class="side_menu_list active" id="home"><a class="a2" href="homePage.php">Home page</a></li>
                <li class="side_menu_list"><a class="a2" href="findDogOrCat.php">Find a dog/cat</a></li>
                <li class="side_menu_list"><a class="a2" href="dogCare.php">Dog care</a></li>
                <li class="side_menu_list"><a class="a2" href="catCare.php">Cat care</a></li>
                <li class="side_menu_list"><a class="a2" href="petGiveAway.php">Have a pet to give away</a></li>
                <li class="side_menu_list"><a class="a2" href="createAccount.php">Create an Account</a></li>
                <li class="side_menu_list"><a class="a2" href="contactUs.php">Contact us</a></li>


            </ul>

        </aside>
        <main class="main_body">

            <div class="left_body_home">
                <img id="dog1" src="pics/dog1.jpg" alt="Dog Picture">
                <br>
                <p class="home_welcome_message">Welcome to PawDopt, a dogs & cats adoption website!</p>
                <p class="home_paragraph">
                    Looking to adopt a dog or a cat? you've come to the right place! <br>
                    Finding your furry best friend has never been easier! Browse through our loving dogs and cats
                    waiting for their forever homes. Adopt, don't shop and make a difference in a pet's life today!
                </p>
                <img id="cat1" src="pics/cat1.jpg" alt="Cat Picture">

            </div>


            <div class="right_body_home">
                <img id="first_dog_cat_img" src="pics/dogAndCat2.jpg" alt="Dog & Cat Picture">
                <br>
                <img id="second_dog_cat_img" src="pics/dogAndCat3.jpg" alt="Dog & Cat Picture">
            </div>
    </main>
    </div>

    <?php
    include 'footer.php'
    ?>

    <script src="script.js"></script>

</body>

</html>