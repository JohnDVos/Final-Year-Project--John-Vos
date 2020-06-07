/* Menu Script:
    -- JS when menu drop down icon is clicked:
        --      menu becomes reactive 
        --      tells CSS drop down menu
*/
function reactiveTopnav(x) {
  var y = document.getElementById("topnavMenu");
        if(y.className === "topnav") {
            y.className += " responsive";
        } else {
            y.className = "topnav";
        }
    }

/* ---- Log in script ---- */
function clientPTCheck() {
    if(document.getElementById('clientCheck').checked) {
        document.getElementById('clientLogIn').style.display = 'block';
        document.getElementById('PersonalTrainerLogIn').style.display = 'none';
    } else if(document.getElementById('PersonalTrainerCheck').checked) {
        document.getElementById('PersonalTrainerLogIn').style.display = 'block';
        document.getElementById('clientLogIn').style.display = 'none';
    } else {
        document.getElementById('clientLogIn').style.display = "none";
        document.getElementById('PersonalTrainerLogIn').style.display = "none";
    }
}

/* ------ BMR script ------ */
function BMRCalc() {
    var weight          =   document.getElementById("weightInput").value;
    var height          =   document.getElementById("heightInput").value;
    var age             =   document.getElementById("ageInput").value;
    var BMR             =   66 + (13.7*weight) + (5*height) - (6.8*age)
    document.BMRCalculator.BMRTotal.value = BMR;
}

/* ------ TDEE script ------ */
function TDEECalc() {
    var BMRInput        =   document.getElementById("BMRInput").value;
    var activityLevel   =   document.getElementById("activityLevel").value;
    var TDEE            =   BMRInput*activityLevel;
    d                   =   TDEE*0.8;
    var maintanance     =   Math.round(TDEE, 1);
    var weightLoss      =   Math.round(d, 1);
    document.TDEEForm.maintananceTotal.value = maintanance;
    document.TDEEForm.weightLossCalories.value = weightLoss;
}

/* ------ Back to top button ------ */
//when the user scrolls down 150px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

//when the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;                            // For Safari
    document.documentElement.scrollTop = 0;                 // For Chrome, Firefox, IE and Opera
}

/* ------ 1 rep max script ------ */
function repCalc() {
    var weight = document.getElementById("weightInput").value;
    var reps = document.getElementById("repInput").value;
    var repMax = (weight* 1.1307)+0.6998;
    document.repMaxCalculator.repMaxTotal.value = repMax;
}


