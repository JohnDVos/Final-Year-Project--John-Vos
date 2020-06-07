/* Menu Script:
    -- JS when menu drop down icon is clicked:
        --      menu becomes reactive 
        --      tells CSS drop down menu
*/
function reactiveTopnav() {
    var x = document.getElementById("topnavMenu");
        if(x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
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
    var TDEE            =   BMRInput*activityLevel
    d                   =   TDEE*0.8
    var maintanance     =   Math.round(TDEE, 1)
    var weightLoss      =   Math.round(d, 1)
    document.TDEEForm.maintananceTotal.value = maintanance
    document.TDEEForm.weightLossCalories.value = weightLoss
}

