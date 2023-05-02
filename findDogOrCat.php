<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $form_type = $_POST["dog_or_cat_type"];
    $form_breed = $_POST["breed"];
    $form_age = $_POST["age"];
    $form_gender = $_POST["gender"];
    $form_children = isset($_POST['childrenF']) ? 'yes' : 'no';
    $form_dogs = isset($_POST['dogsF']) ? 'yes' : 'no';
    $form_cats = isset($_POST['catsF']) ? 'yes' : 'no';
    $form_animals = isset($_POST['animalsF']) ? 'yes' : 'no';
    $form_none = isset($_POST['noneF']) ? 'yes' : 'no';
    $is_available = false;

    $display = '';
    $msgNotFound = '';

    foreach (file("petsForAdoption.txt") as $line) {

        $index = explode(":", $line);

        $petIDNum = $index[0];
        $ownerName = $index[1];
        $petType = $index[2];
        $breed = $index[3];
        $age = $index[4];
        $gender = $index[5];
        $g_a_children = $index[6];
        $g_a_dogs = $index[7];
        $g_a_cats = $index[8];
        $g_a_animals = $index[9];
        $g_a_none = $index[10];
        $comments = $index[11];
        $email = $index[12];

        if (
            $petType == $form_type && ($form_breed == "dNM") || ($breed == $form_breed)
            && ($form_age == "dNM") || ($age == $form_age) && ($form_gender == "dNM") || ($gender == $form_gender)
            && ($g_a_children == $form_children || $g_a_dogs == $form_dogs || $g_a_cats == $form_cats ||
                $g_a_animals == $form_animals || $g_a_noneg_a_none == $form_none)
        ) {

            $display .=
                "<div class=\"browsePetsDivs\">
        <h2> $petType $petIDNum </h2>
        <p> <b>Pet Breed:</b> $breed <br>
        <b>Age:</b> $age <br>
        <b>Gender:</b> $gender <br>
        <b>Gets along with Children:</b> $g_a_children <br>
        <b>Gets along with Dogs:</b> $g_a_dogs <br>
        <b>Gets along with Cats:</b> $g_a_cats <br>
        <b>Gets along with Animals:</b> $g_a_animals <br>
        <b>Doesn't get along with anyone:</b> $g_a_none <br>
        <b>Comments:</b> $comments <br>
        <b>Owner's Name:</b> $ownerName <br>
        <b>Owner's email:</b> $email <br></p>
        <button class=\"btn_interested\">Interested!</button>
    </div>";

            if ($is_available == false) {
                $is_available == true;
                echo "<style>
            #showForm{
                display:none;
            }
            #showPets{
                display: grid;
                justify-items: center;
                gap: 25px;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));       
                width: 100%;    
                height: auto;
                background-color: #A7E2F9;
                float: right;
                padding-inline: 10px;
                padding-block: 10px;
         
            }            
            </style>";
            }
        }
    }

    if ($is_available == false) {
        $msgNotFound = "<p>There is no pet that matches your search criteria at the moment. Please try again!</p>";
    }
}




?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title>Find a Dog/Cat</title>
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
                <li class="side_menu_list active"><a class="a2" href="findDogOrCat.php">Find a dog/cat</a></li>
                <li class="side_menu_list"><a class="a2" href="dogCare.php">Dog care</a></li>
                <li class="side_menu_list"><a class="a2" href="catCare.php">Cat care</a></li>
                <li class="side_menu_list"><a class="a2" href="petGiveAway.php">Have a pet to give away</a></li>
                <li class="side_menu_list"><a class="a2" href="createAccount.php">Create an Account</a></li>
                <li class="side_menu_list"><a class="a2" href="contactUs.php">Contact us</a></li>


            </ul>

        </aside>
        <main id="showForm" class="main_body">
            <div class="find_pet_div">
                <h2>
                    Please answer the following questions to find the perfect dog or cat for you to adopt!
                </h2>

                <form action="#" method="post" class="forms">

                    <p>
                        <label class="form_text form_questions">Dog or Cat:</label>
                        <input type="radio" class="form_text radio_btn" id="choice_dog" name="dog_or_cat_type" value="dog">
                        <label class="form_text radio_btn" for="choice_dog">Dog</label>
                        <input type="radio" class="form_text radio_btn" id="choice_cat" name="dog_or_cat_type" value="cat">
                        <label class="form_text  radio_btn" for="choice_cat">Cat</label>
                    </p>

                    <p>
                        <label class="form_text form_questions">Breed:</label>
                        <select name="breed" class="form_select_menu" id="breed_input">
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
                            <option value="dNM">Does not matter</option>
                        </select>
                    </p>

                    <p>
                        <label class="form_text form_questions" for="age">Age:</label>
                        <select name="age" class="form_select_menu" id="age">
                            <option value="0">--Select an Option--</option>
                            <option value="0-1">0-1 Years</option>
                            <option value="1-2">1-2 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="6-8">6-8 Years</option>
                            <option value="9-12">9-12 Years</option>
                            <option value="12+">12+ Years</option>
                            <option value="dNM">Does not matter</option>
                        </select>
                    </p>



                    <p>
                        <label class="form_text form_questions">Prefered Gender:</label>
                        <input type="radio" class="form_text radio_btn" id="gender_male" name="gender" value="Male">
                        <label class="form_text radio_btn" for="gender_male">Male</label>
                        <input type="radio" class="form_text radio_btn" id="gender_female" name="gender" value="Female">
                        <label class="form_text radio_btn" for="gender_female">Female</label>
                        <input type="radio" class="form_text radio_btn" id="does_not_matter" name="gender" value="dNM">
                        <label class="form_text radio_btn" for="does_not_matter">Does not matter</label>
                    </p>



                    <p><label class="form_text form_questions"> Does it need to get along with other:</label>
                        <input type="checkbox" class="form_text checkbox" id="children" name="childrenF" value="children">
                        <label class="form_text checkbox" for="children">Children</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="dogs" name="dogsF" value="other dogs">
                        <label class="form_text checkbox" for="dogs">Other Dogs</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="cats" name="catsF" value="other cats">
                        <label class="form_text checkbox" for="cats">Other Cats</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="animals" name="animalsF" value="other animals">
                        <label class="form_text checkbox" for="animals">Other Animals</label>
                        |
                        <input type="checkbox" class="form_text checkbox" id="no" name="noneF" value="no">
                        <label class="form_text checkbox" for="no">None</label>
                    </p>

                    <p>
                        <input type="submit" onclick="checkFieldsFull()" class="submit_btn" value="Submit">
                        <input type="reset" class="reset_btn" value="Reset">

                    </p>

                    <?php

                    if (isset($msgNotFound)) {
                        echo $msgNotFound;
                    }

                    ?>

                </form>

            </div>

        </main>

        <main id="showPets" >
            <?php

            if (isset($display)) {
                echo $display;
            }

            ?>



        </main>


    </div>
    <?php
    include 'footer.php'
    ?>

    <script src="script.js"></script>

</body>

</html>