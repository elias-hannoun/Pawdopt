<?php session_start();
if (isset($_SESSION['username'])) {

    if(isset($_POST['dog_or_cat']) && $_POST['breed'] != "0" && $_POST['age_ga'] != "0" && isset($_POST['gender']) 
        && (isset($_POST['childrenGA']) || isset($_POST['dogsGA']) || isset($_POST['catsGA']) || isset($_POST['animalsGA']) || isset($_POST['noneGA']))
        && $_POST['comments'] != "" && $_POST['email'] != "" && $_POST['name'] != ""){
            
    $message = "The information have been submitted!";
    echo "<div>$message</div>";
    $number_of_pets = count(file("petsForAdoption.txt"));

    $name = $_SESSION['username'];
    $pet_type = $_POST["dog_or_cat"];
    $pet_breed = $_POST["breed"];
    $pet_age = $_POST["age_ga"];
    $pet_gender = $_POST["gender"];


    if (isset($_POST['childrenGA'])) {
        $childrenGA = "yes";
    } else {
        $childrenGA = "no";
    }

    if (isset($_POST['dogsGA'])) {
        $dogsGA = "yes";
    } else {
        $dogsGA = "no";
    }

    if (isset($_POST['catsGA'])) {
        $catsGA = "yes";
    } else {
        $catsGA = "no";
    }

    if (isset($_POST['animalsGA'])) {
        $animalsGA = "yes";
    } else {
        $animalsGA = "no";
    }

    if (isset($_POST['noneGA'])) {
        $noneGA = "yes";
    } else {
        $noneGA = "no";
    }

    $comments = $_POST["comments"];
    $user_email = $_POST["email"];

    $line = ($number_of_pets + 1) . ":" . $name . ":" . $pet_type . ":" . $pet_breed . ":" . $pet_age . ":" . $pet_gender . ":" . $childrenGA . ":" . $dogsGA . ":" . $catsGA . ":" . $animalsGA . ":" . $noneGA . ":" . $comments . ":" . $user_email . "\n";

    $file = fopen("petsForAdoption.txt", "a");

    fwrite($file, $line);
    fclose($file);
    }
} else {
    header("Location: signIn.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Give away a pet</title>
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
                <li class="side_menu_list active"><a class="a2" href="petGiveAway.php">Have a pet to give away</a></li>
                <li class="side_menu_list"><a class="a2" href="createAccount.php">Create an Account</a></li>
                <li class="side_menu_list"><a class="a2" href="contactUs.php">Contact us</a></li>

            </ul>

        </aside>
        <main class="main_body">
            <div class="find_pet_div">
                <h2>
                    Please answer the following questions to put a dog or cat for adoption!
                </h2>

                <form action="#" method="post" class="forms">

                    <p>
                        <label class="form_text form_questions">Dog or Cat:</label>
                        <input type="radio" class="form_text radio_btn" id="choice_dog_ga" name="dog_or_cat" value="dog">
                        <label class="form_text radio_btn" for="choice_dog_ga">Dog</label>
                        <input type="radio" class="form_text radio_btn" id="choice_cat_ga" name="dog_or_cat" value="cat">
                        <label class="form_text  radio_btn" for="choice_cat_ga">Cat</label>
                    </p>

                    <p>
                        <label class="form_text form_questions">Breed</label>
                        <select name="breed" class="form_select_menu" id="breed_input_ga">
                            <option value="0">--Select an Option--</option>
                            <option value="Golden_Retriever">Dog-Golden Retriever</option>
                            <option value="German_Shepherd">Dog-German Shepherd</option>
                            <option value="Labrador">Dog-Labrador</option>
                            <option value="Pomeranian">Dog-Pomeranian</option>
                            <option value="American_Shorthair">Cat-American Shorthair</option>
                            <option value="Persian_Cat">Cat-Persian Cat</option>
                            <option value="Siberian_Cat">Cat-Siberian Cat</option>
                            <option value="Australian_Mist">Cat-Australian Mist</option>
                            <option value="Mix_Breed">Mix Breed</option>
                        </select>
                    </p>

                    <p>
                        <label class="form_text form_questions" for="age_ga">Age:</label>
                        <select name="age_ga" class="form_select_menu" id="age_ga">
                            <option value="0">--Select an Option--</option>
                            <option value="0-1">0-1 Years</option>
                            <option value="1-2">1-2 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="6-8">6-8 Years</option>
                            <option value="9-12">9-12 Years</option>
                            <option value="12+">12+ Years</option>
                            <option value="-0">Does not matter</option>
                        </select>
                    </p>

                    <p>
                        <label class="form_text form_questions">Pet's Gender:</label>
                        <input type="radio" class="form_text radio_btn" id="gender_male_ga" name="gender" value="Male">
                        <label class="form_text radio_btn" for="gender_male_ga">Male</label>
                        <input type="radio" class="form_text radio_btn" id="gender_female_ga" name="gender" value="Female">
                        <label class="form_text radio_btn" for="gender_female_ga">Female</label>
                    </p>

                    <p><label class="form_text form_questions"> Does it get along with other:</label>
                        <input type="checkbox" class="form_text checkbox" id="children_ga" name="childrenGA" value="children">
                        <label class="form_text checkbox" for="children_ga">Children</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="other_dogs_ga" name="dogsGA" value="other dogs">
                        <label class="form_text checkbox" for="other_dogs_ga">Other Dogs</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="other_cats_ga" name="catsGA" value="other cats">
                        <label class="form_text checkbox" for="other_cats_ga">Other Cats</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="other_animals_ga" name="animalsGA" value="other animals">
                        <label class="form_text checkbox" for="other_animals_ga">Other Animals</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="no_ga" name="noneGA" value="no">
                        <label class="form_text checkbox" for="no_ga">None</label>
                    </p>
                    <p>
                        <label class="form_text form_questions" for="comments_input">Comments</label>
                        <textarea class="form_txt_fld comments_txt_fld" id="comments_input" name="comments" placeholder="Comments about the dog/cat..."></textarea>
                    </p>

                    <p>
                        <label class="form_text form_questions" for="name_input">Your name</label>
                        <input type="text" class="form_txt_fld" id="name_input" name="name" placeholder="Your name...">
                    </p>

                    <p>
                        <label class="form_text form_questions" for="email_input">Your email</label>
                        <input type="email" class="form_txt_fld" id="email_input" name="email" placeholder="Email...">
                    </p>

                    <p>
                        <input type="submit" onclick="checkFieldsFullGA()" class="submit_btn" value="Submit">
                        <input type="reset" class="reset_btn" value="Reset">

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