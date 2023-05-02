




function displayTime() {
    var now = new Date();
    var time = now.toLocaleString();
    document.getElementById("time").innerHTML = time;
}
displayTime();
setInterval(displayTime, 1000);


function checkFieldsFull() {

    if ((!(document.getElementById("choice_dog").checked)
        && !(document.getElementById("choice_cat").checked))
    || (document.getElementById("breed_input").value== "0") 
    || (document.getElementById("age").value== "0") 
    || (!(document.getElementById("gender_male").checked)
        && !(document.getElementById("gender_female").checked)
        && !(document.getElementById("does_not_matter").checked))
    || (!(document.getElementById("children").checked) 
        && !(document.getElementById("other_dogs").checked) 
        && !(document.getElementById("other_cats").checked) 
        && !(document.getElementById("other_animals").checked) 
        && !(document.getElementById("no").checked))){
    alert("Please fill all fields!");
        return false;

    }
}

function checkFieldsFullGA() {

    if ((!(document.getElementById("choice_dog_ga").checked)
        && !(document.getElementById("choice_cat_ga").checked))
    || (document.getElementById("breed_input_ga").value== "0") 
    || (document.getElementById("age_ga").value== "0") 
    || (!(document.getElementById("gender_male_ga").checked)
        && !(document.getElementById("gender_female_ga").checked))
    || (!(document.getElementById("children_ga").checked) 
        && !(document.getElementById("other_dogs_ga").checked) 
        && !(document.getElementById("other_cats_ga").checked) 
        && !(document.getElementById("other_animals_ga").checked) 
        && !(document.getElementById("no_ga").checked))
        || (document.getElementById("comments_input").value == "")
        || (document.getElementById("name_input").value == "")
        || (document.getElementById("email_input").value == "") ){
    alert("Please fill all fields!");
        return false;

    }
}
