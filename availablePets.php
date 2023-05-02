<!DOCTYPE html>
<html lang="en">

<head>
    <title>Browse Available pets</title>
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
                <li class="side_menu_list active"><a class="a2" href="availablePets.php">Browse available pets</a></li>
                <li class="side_menu_list"><a class="a2" href="findDogOrCat.php">Find a dog/cat</a></li>
                <li class="side_menu_list"><a class="a2" href="dogCare.php">Dog care</a></li>
                <li class="side_menu_list"><a class="a2" href="catCare.php">Cat care</a></li>
                <li class="side_menu_list"><a class="a2" href="petGiveAway.php">Have a pet to give away</a></li>
                <li class="side_menu_list"><a class="a2" href="createAccount.php">Create an Account</a></li>
                <li class="side_menu_list"><a class="a2" href="contactUs.php">Contact us</a></li>

            </ul>

        </aside>
        <main class="main_body grid_container">

            <div class="browsePetsDivs">
                <h2>Max</h2>
                <img src="pics/goldenRetriever.jpg" alt="Golden Retriever" class="browsePetsImg">
                <p> <b>Pet Breed:</b> Dog-Golden Retriever<br>
                <b>Age:</b> 0-1 Years<br>
                <b>Gender:</b> Male<br>
                <b>Gets along with:</b> Children, Other Animals <br>
                <b>Comments:</b> Playful Dog<br>
                <b>Owner's Name:</b> Oliver Davis<br>
                <b>Owner's email:</b> davis@example.com<br></p>
                <button class="btn_interested">Interested!</button>
            </div>

            <div class="browsePetsDivs">
                <h2>Whiskers</h2>
                <img src="pics/persian.jpg" alt="Persian" class="browsePetsImg">
                <p> <b>Pet Breed:</b> Cat-Persian<br>
                    <b>Age:</b> 3-5 Years<br>
                    <b>Gender:</b> Female<br>
                    <b>Gets along with:</b> Children, Other Cats <br>
                    <b>Comments:</b> Needs a diet<br>
                    <b>Owner's Name:</b> Lucas Miller<br>
                    <b>Owner's email:</b> lucmil@email.com<br></p>
                    <button class="btn_interested">Interested!</button>
    
            </div>

            <div class="browsePetsDivs">
                <h2>Sandy</h2>
                <img src="pics/labrador.jpg" alt="Labrador" class="browsePetsImg">
                <p> <b>Pet Breed:</b> Dog-Labrador<br>
                    <b>Age:</b> 1-2 Years<br>
                    <b>Gender:</b> Female<br>
                    <b>Gets along with:</b> Children, Other Dogs, Other Animals <br>
                    <b>Comments:</b> High Energy<br>
                    <b>Owner's Name:</b> Ava Wilson<br>
                    <b>Owner's email:</b> wilsona@example.ca<br></p>
                    <button class="btn_interested">Interested!</button>
    
            </div>




            <div class="browsePetsDivs">
                <h2>Oscar</h2>
                <img src="pics/americanShorthair.jpg" alt="American Shorthair" class="browsePetsImg">
                <p> <b>Pet Breed:</b> Cat-American Shorthair<br>
                <b>Age:</b> 3-5 Years<br>
                <b>Gender:</b> Male<br>
                <b>Gets along with:</b> Children, Other Animals <br>
                <b>Comments:</b> Playful Dog<br>
                <b>Owner's Name:</b> Andreh Anderson<br>
                <b>Owner's email:</b> andand1@email.com<br></p>
                <button class="btn_interested">Interested!</button>
            </div>

            <div class="browsePetsDivs">
                <h2>Fluffy</h2>
                <img src="pics/siberian.jpg" alt="Siberian" class="browsePetsImg">
                <p> <b>Pet Breed:</b> Cat-Siberian<br>
                    <b>Age:</b> 9-12 Years<br>
                    <b>Gender:</b> Male<br>
                    <b>Gets along with:</b> None <br>
                    <b>Comments:</b> May be grumpy<br>
                    <b>Owner's Name:</b> Noah Williams<br>
                    <b>Owner's email:</b> willnoah55@email.ca<br></p>
                    <button class="btn_interested">Interested!</button>
    
            </div>

            <div class="browsePetsDivs">
                <h2>Milo</h2>
                <img src="pics/Pomeranian.jpg" alt="Pomeranian" class="browsePetsImg">
                <p> <b>Pet Breed:</b> Dog-Pomeranian<br>
                    <b>Age:</b> 1-2 Years<br>
                    <b>Gender:</b> Male<br>
                    <b>Gets along with:</b> Children, Other Dogs, Other Animals <br>
                    <b>Comments:</b> Silly<br>
                    <b>Owner's Name:</b> Olivia Taylor<br>
                    <b>Owner's email:</b> oliviat16@example.com<br></p>
                    <button class="btn_interested">Interested!</button>
    
            </div>

        </main>
    </div>
    <?php
    include 'footer.php'
    ?>

    <script src="script.js"></script>

</body>

</html>