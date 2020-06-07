<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    /*
    *to ensure 1 header for multiple pages, creates header HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "header.php" 
?>


<!-- HTML -->
    <main>
        
        <div class="wrapper-main">
        <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
        <header>
            <h1>Nutrition:</h1>
            <h2>General resources & Information:</h2>
            <h3>To download the nutrition form</h3>
        </header>
        <ul>
            <li><a href="documents/nutrition.pdf" download>nutrition pdf document:</a></li>
            <li><a href="documents/nutrition.docx" download>nutrition word document:</a></li>
        </ul>
        
        <header>
            <h3>Journals & Articles:</h3>
        </header>
        <ul>
            <li><a href="https://www.sciencedirect.com/science/article/pii/S0899900719301030" target="_blank">Scientific evidence of diets for weight loss: Different macronutrient composition, intermittent fasting, and popular diets.</a></li>
            <li><a href="https://tailoredcoachingmethod.com/ultimate-evidence-based-supplement-guide/" target="_blank">Evidence based supplement guide.</a></li>
            <li><a href="https://www.mdpi.com/2072-6643/11/10/2442/htm" target="_blank">The effectiveness of intermittent fast & time-restricted feeding compared to continuous energy restriction for weight loss.</a></li>
            <li><a href="https://journals.lww.com/nsca-scj/Abstract/publishahead/Magnitude_and_Composition_of_the_Energy_Surplus.99278.aspx" target="_blank">Magnitude and Composition of the Energy Surplus for Maximizing Muscle Hypertrophy</a></li>
        </ul>
        
        <header>
            <h2>Introduction:<a id="introduction"></a></h2>
        </header>
            <p>To understand how to lose weight, gain muscle or whatever your goal is you must first understand the relationship between your body and food. We will achieve this by looking at calories, macros and what it is we put into our bodies.</p>
            <a href="https://www.gov.uk/government/publications/the-eatwell-guide" target="_blank">UK Governement guideliness:</a>
    
            <header>
                <h3>UK National Food Guidelines:</h3>
            </header>
              
              
              <table>
                  <tr>
                      <th>Food Group:</th>
                      <th>Nutrients Provided:</th>
                  </tr>
                  <tr>
                      <td>Fruit:</td>
                      <td>good source of minerals, water soluble vitamins, fibre, water and sugars</td>
                  </tr>
                  <tr>
                      <td>Vegetables:</td>
                      <td>good source of minerals, water soluble vitamins, fibre, water and complex carbohydrates.</td>
                  </tr>
                  <tr>
                      <td>Starchy foods:</td>
                      <td>
                          <dl>
                              <dt>Primarily complex carbohydrates:</dt>
                              <dd>whole foods / whole grain; provide fibre, water-soluble vitamins and minerals.</dd>
                          </dl>
                      </td>
                  </tr>
                  <tr>
                      <td>Meat, fish and alternatives:</td>
                      <td>
                          <ol>
                              <li>protein is the most significant nutrient provided by this food group</li>
                              <li>fat is also present; fat-soluble vitamins and minerals</li>
                          </ol>
                      </td>
                  </tr>
                  <tr>
                      <td>Milk and dairy foods:</td>
                      <td>
                          <ol>
                              <li>protein, milk sugar and fat are all present in varying amounts.</li>
                              <li>fat-soluble vitamins and minerals also present; e.g. calcium and magnesium.</li>
                          </ol> 
                      </td>
                  </tr>
                  <tr>
                      <td>High added fat / sugar:</td>
                      <td>
                          <dl>
                              <dt>highly processed and contain little nutritional value</dt>
                              <dd>high in refined vegetable oils and sugar</dd>
                          </dl>
                      </td>
                  </tr>
              </table>
              
              <header>
                  <h3>Eatwell Plate:</h3>
              </header>
              <p>The Eatwell plate is also supported by eight specific healthy eating tips provided by the Food Standards agency:</p>
              <ol type="1">
                  <li>base your meals on starchy foods.</li>
                  <li>eat lots of fruit and vegetables ( 5 portions a day).</li>
                  <li>eat more fish (2 portions a week, 1 oily).</li>
                  <li>cut down on saturated fat and suga.r</li>
                  <li>try to eat less salt, no more than 6 grams a day.</li>
                  <li>get active and try to be a  healthy weight.</li>
                  <li>don’t skip breakfast.</li>
              </ol>
              <p>The total amount of calories should be divided across each of the macronutrients to achieve following ratios:</p>
              <ul>
                  <li>minimum of 50% of total calories from carbohydrates.</li>
                  <li>maximum of 35% of total calories from fats.</li>
                  <li>minimum of 55G of protein per day (9 to 12% of total calories). </li>
              </ul>
              <img src="images/eatwell-plate.jpg" alt="eatwell plate">
            
              
              <!-- website section regarding calories -->
               <a id="calories"></a>
              <header>
                  <h2>Calories:</h2>
              </header>
                <p>First of all, a “calorie” is a unit of measurement for how much energy a certain food or drink contains. Furthermore, your body needs these to be able to function every day; i.e. your body burns calories as energy to keep you alive and your organs functioning. Calories is shorthand for “kilocalorie” and therefore it is written as kcal, you will see this on the nutritional section of food products. </p>
              
              <!-- BMR -->
               <a id="BMR"></a>
              <header>
                  <h3>Base Metabolic Rate (BMR):</h3>
              </header>
              <p>Your body burns a certain amount of calories per day just by being. This leads us to the Base Metabolic Rate (BMR), i.e. how many calories your body will burn per day just by existing. Your BMR will depend on age, height, weight, lifestyle, hormones and many other things. The average BMR for a women is between 1200 kcal and 1600 kcal and for men between 1600kcal and 2000kcal per day <a href="https://fitfolk.com/average-basal-energy-expenditure-bee-basal-metabolic-rate-bmr/" target="_blank">(BMR).</a>This is how you calculate your BMR:</p>
              
              <header>
                  <h4>BMR for men:</h4>
              </header>
              <p>BMR = 66 + (13.7 X weight in kg)  + (5 X height in cm) – (6.8 X age).</p>
              
              <header>
                  <h4>BMR for women:</h4>
              </header>
              <p>BMR = 655 + (9.6 X weight in kg) + (1.8 X height in cm) – (4.7 X age).</p>
              <header>
                  <h4>Units of measurement:</h4>
              </header>
              <ul>
                  <li>1 inch = 2.54cm</li>
                  <li>2.2 lbs = 1kg</li>
                  <li>1 stone = 14lbs</li>
              </ul>
              
              <!-- BMR Calculator -->
              <form name="BMRCalculator" method="post">
                  <fieldset>
                      <legend><u>BMR Calculator:</u></legend>
                      <p>
                          <label>Input your weight here (in kg):</label>
                          <input name="weightInput" id="weightInput">
                      </p>
                      <p>
                          <label>Input your height here (in cm):</label>
                          <input name="heightInput" id="heightInput">
                      </p>
                      <p>
                          <label>Input your age here:</label>
                          <input name="ageInput" id="ageInput">
                      </p>
                      <input onclick=BMRCalc() type=button value=Calculate>
                      <p>
                          <label>Your BMR is:</label>
                          <input name="BMRTotal" id="BMRTotal">
                      </p>
                      <input type=reset value=Reset>
                  </fieldset>
              </form>
              
              <!-- TDEE -->
               <a id="TDEE"></a>
              <header>
                  <h3>Total Daily Energy Expenditure (TDEE):</h3>
              </header>
              <p>TDEE is how many calories your body needs on a daily basis to fuel its functions. In this instance we will use the Harris-benedict equation which factors in height, weight, age and sex to determine BMR, however, does not take into account lean body mass. So, for the average populous who doesn’t have an EXTREMELY muscular physique this works great.</p>
              
              <p>Once you know your BMR you can calculate your TDEE by multiplying your BMR by your activity multiplier:</p>
              <table>
                  <tr>
                      <th>Sedentary:</th>
                      <th>Lightly active:</th>
                      <th>Moderately active:</th>
                      <th>Very active:</th>
                      <th>Extra active:</th>
                  </tr>
                  <tr>
                      <td>BMR  X  1.2</td>
                      <td>BMR  X  1.375</td>
                      <td>BMR  X  1.55</td>
                      <td>BMR  X  1.725</td>
                      <td>BMR  X  1.9</td>
                  </tr>
                  <tr>
                      <td>little to no exercise</td>
                      <td>light exercise</td>
                      <td>moderate exercise</td>
                      <td>hard exercise</td>
                      <td>hard and physical job</td>
                  </tr>
                  <tr>
                      <td>e.g. desk job</td>
                      <td>1 – 3 days a week</td>
                      <td>3 – 5 days a week</td>
                      <td>6 – 7 days a week</td>
                      <td>daily exercise</td>
                  </tr>
              </table>
              
              <!-- TDEE Calculator -->
                <form name="TDEEForm" method="post">
                    <fieldset>
                        <legend><u>TDEE Calculator:</u></legend>
                        <p>
                            <label>Input your BMR here:</label>
                            <input name="BMRInput" id="BMRInput">
                        </p>
                        <p>
                            <label>Select your activity level:</label>
                            <select name="activityLevel" id="activityLevel">
                                <option value="1.2" selected>Little to no exercise, desk job</option>
                                <option value="1.375">Light activity, 1 - 3 days a week</option>
                                <option value="1.55">Moderate activity, 3 - 5 days a week</option>
                                <option value="1.725">Hard exercise, 6 - 7 days a week</option>
                                <option value="1.9">Hard & physical job, daily exercise</option>
                            </select>
                        </p>
                        <input onclick=TDEECalc() type=button value=Calculate>
                        <p>
                            <label>Your maintanance calories:</label>
                            <input name="maintananceTotal" id="caloriesMaintanance">
                        </p>
                        <p>
                            <label>Calories required to lose weight:</label>
                            <input name="weightLossCalories" id="weightLossCalories">
                        </p>
                        <input type=reset value=Reset id="reset">
                    </fieldset>
                </form>
              
              <header>
                  <h3>Key to Diet:</h3>
              </header>
              <p>Being able to change your weight and body composition begins with calories in vs calories out; i.e. </p>
              <ul>
                  <li>if you are eating more calories than you burn per day you will gain weight.</li>
                  <li>if you are eating less calories than you burn per day you will lose weight.</li>
                  <li>if you are eating the same amount of calories that you burn per day you weight will not change.</li>
              </ul>
              <p>Below is a table of the caloric values of various food, notice how some foods per 100 grams are extremely high in calories compared to other foods; e.g. brown rice vs mars bar, we will look more closely at why this is important later on.</p>
              
              <header>
                <h3>Food caloric value:</h3>
              </header>
              <table>
                  <tr>
                      <th>Food:</th>
                      <th>Caloric Value per 100g:</th>
                  </tr>
                <tr>
                    <td>Chicken Breast.</td>
                    <td>129kcal.</td>
                </tr>
                <tr>
                    <td>Steak.</td>
                    <td>195kcal.</td>
                </tr>
                <tr>
                    <td>Egg.</td>
                    <td>143kcal.</td>
                </tr>
                <tr>
                    <td>Sweet Potato.</td>
                    <td>91kcal.</td>
                </tr>
                <tr>
                    <td>Brown Rice.</td>
                    <td>139kcal.</td>
                </tr>
                <tr>
                    <td>Snickers.</td>
                    <td>148kcal.</td>
                </tr>
            </table>
              
               <header>
                    <h3>Pros and Cons of tracking caloric intake:</h3>
              </header>
                <table>
                    <tr>
                    <th>Pros:</th>
                    <th>Cons:</th>
                </tr>
                <tr>
                    <td>Will provide a measurable metric and therefore help give you a better idea of what you are eating and where you could be going wrong.</td>
                    <td>You may end up over thinking and complicating meals to reach caloric value and create a negative relationship with food.</td>
                </tr>
                <tr>
                    <td>Clarify the quantity of food you can consumer per day, therefore increase your mindfulness of food.</td>
                    <td>Loss of focus on food quality and therefore you may end up cutting out foods and pleasure to reach caloric goal.</td>
                </tr>
                <tr>
                    <td>Provide a clear guide and goal for you to stick to.</td>
                    <td>Can be manipulated to eating junk food and end up starving yourself as junk food tends to be high in calories.</td>
                </tr>
                </table>
              
               <!-- website section regarding macros -->
               <a id="macroNutrition"></a>
              <header>
                  <h2>Macro-Nutrition:</h2>
              </header>
              <p>So far, we have looked into calories and their importance in your diet. We will take this one step further now with macro nutrition and how through understanding how to manipulate them not only will your diet be much healthier, but much more enjoyable. There are also micronutrients; i.e. vitamins & minerals. Macronutrients are broken down into 4 groups:</p>
              
              <header>
                  <h3>Calories per food group:</h3>
              </header>
              <table>
                  <tr>
                      <th>Food Type:</th>
                      <th>Caloric Value:</th>
                      <th>Sources:</th>
                  </tr>
                  <tr>
                      <td>Carbohydrate</td>
                      <td>4 calories per gram</td>
                      <td>bread, rice, potatoes, pasta</td>
                  </tr>
                  <tr>
                      <td>Protein</td>
                      <td>4 calories per gram</td>
                      <td>meat, fish, eggs, chicken</td>
                      
                  </tr>
                  <tr>
                      <td>Fats</td>
                      <td>9 calories per gram</td>
                      <td>oils, dairy foods, oily fish, nuts, seeds</td>
                  </tr>
                  <tr>
                      <td>Alcohol</td>
                      <td>7 calories per gram</td>
                      <td>wine, rum, whiskey</td>
                  </tr>
              </table>
              
              <header>
                  <h3>What each group does:</h3>
              </header>
              <table>
                  <tr>
                      <th>Macronutrients:</th>
                      <th>Basic functions:</th>
                  </tr>
                  <tr>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>Carbohydrate</li>
                              <li>Protein</li>
                              <li>Fats</li>
                          </ul>
                      </td>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>collectively needed in greater amounts.</li>
                              <li>used within the body for structure, function and fuel.</li>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th>Micronutrients:</th>
                      <th>Basic functions:</th>
                  </tr>
                  <tr>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>Vitamins</li>
                              <li>Minerals</li>
                          </ul>
                      </td>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>-	needed in smaller amounts.</li>
                              <li>-	used for structure and function.</li>
                              <li>-	necessary to “unlock” the energy contained within the macronutrients.</li>
                              <li>-	support and manage vital physiological processes within the body.</li>
                          </ul>
                      </td>
                  </tr>
              </table>
              
              <table>
                  <tr>
                      <th>Protein:</th>
                      <th>Carbohydrates:</th>
                      <th>Fats:</th>
                  </tr>
                  <tr>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>one of the main building blocks of body tissue.</li>
                              <li>provides fuel and energy for the body (glucose).</li>
                              <li>back up fuel for energy.</li>
                          </ul>
                      </td>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>a fuel source for the body.</li>
                              <li>stops the breakdown of muscle mass.</li>
                              <li>helps with brain development.</li>
                          </ul>
                      </td>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>aid in repair of muscle tissue, organs and skin.</li>
                              <li>some organs will only use glucose therefore your body requires carbs.</li>
                              <li>helps insulate your body.</li>
                          </ul>
                      </td>
                  </tr>
              </table>
              <p>*alcohol also provides food but is not classified as a nutrient.*</p>
              
              <p>Below is a list of the macro value for common foods. As you can see certain foods are “low” in macro value compared to others. Take rice vs a snickers bar for example, you can eat a lot more of rice than 1 snicker for the same amount of carb value. This becomes very important when dieting to lose weight and creating a meal plan, factoring in your macros for the day and achieving the goal you set out.</p>
              <p>*Note that a 1G of a food does not equate to 1G of carbs, this is explained further on in macro-nutrition*</p>
              
              <header>
                  <h3>Food macro value:</h3>
              </header>
              <table>
                  <tr>
                      <th>Protein:</th>
                      <th>Macro Value per 100g:</th>
                  </tr>
                  <tr>
                      <td>Chicken breast</td>
                      <td>29g per 100g.</td>
                  </tr>
                  <tr>
                      <td>Steak</td>
                      <td>31g per 100g</td>
                  </tr>
                  <tr>
                      <td>Oats</td>
                      <td>17g per 100g</td>
                  </tr>
                  <tr>
                      <td>Eggs</td>
                      <td>13g per 100g</td>
                  </tr>
                  <tr>
                      <th>Carbohydrates:</th>
                      <th>Macro Value per 100g:</th>
                  </tr>
                  <tr>
                      <td>Oats</td>
                      <td>66g per 100g</td>
                  </tr>
                  <tr>
                      <td>Sweet Potato</td>
                      <td>15g per 100g</td>
                  </tr>
                  <tr>
                      <td>Brown Rice</td>
                      <td>26g per 100g</td>
                  </tr>
                  <tr>
                      <td>Snickers</td>
                      <td>62.6g per 100g</td>
                  </tr>
                  <tr>
                      <th>Fats:</th>
                      <th>Macro Value per 100g:</th>
                  </tr>
                  <tr>
                      <td>Avocado</td>
                      <td>14.7g per 100g</td>
                  </tr>
                  <tr>
                      <td>Egg (whole, raw)</td>
                      <td>9.5g per 100g</td>
                  </tr>
                  <tr>
                      <td>Chia seeds</td>
                      <td>30.8g per 100g</td>
                  </tr>
                  <tr>
                      <td>Dark chocolate (72 - 85%)</td>
                      <td>42.6g</td>
                  </tr>
              </table>
              
              <header>
                  <h3>Pros and cons of tracking  macros:</h3>
              </header>
              <table>
                  <tr>
                      <th>Pros:</th>
                      <th>Cons:</th>
                  </tr>
                  <tr>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>helps understanding intake.</li>
                              <li>you are what you eat.</li>
                              <li>satisfaction</li>
                          </ul>
                      </td>
                      <td>
                          <ul style="list-style-type : none;">
                              <li>can lead to stressful thinking.</li>
                              <li>quality vs quantity.</li>
                              <li>eating disorders.</li>
                          </ul>
                      </td>
                  </tr>
              </table>
              
               <!-- website section regarding weight loss -->
               <a id="weightLoss"></a>
              <header>
                  <h2>Weight (fat) loss:</h2>
              </header>
              <p>NUmber one rule: you will not lose any weight unless you are in a caloric deficit!</p>
              
              <header>
                  <h3>A brief introduction on how to lose weight:</h3>
              </header>
              <p>To understand how to lose weight we must first understand how the body functions, i.e. what is it exactly that makes us lose or put on weight. So how does the body work? Well to put it at its simplest, your body needs a certain number of calories per day to function and maintain itself. For example, the average male will need to consume 2500 calories per day and a female will need 2000. Therefore, taking from this, if you eat more than your daily required caloric intake (caloric surplus) you will put on weight, if you eat the required amount you will stay at your current weight (maintenance) and if you eat less you will lose weight (caloric deficit).</p>
              
              <p>So how does one lose weight then? Well the answer is as simple and complex as the question, yet equally as complex. As stated above, the only way to lose weight is to be in a caloric deficit, this way the body is forced to use up those fat stores to sustain itself. You're looking to be in a deficit of 500 calories, so if your body needs 2500 calories per day, you will be eating 2000. Why 500? Well scientists have found that this is the "golden amount" for weight loss. This way, the body isn't getting enough nutrients, so it is forced to use up those fat stores. However, it doesn't go into "starvation mode" where the body isn't getting anywhere near the right amount of nutrients, so it begins to actually hold onto food more and store it as fat, so you end up doing the opposite of the desired effect.</p>
              
              <p>Once you have your daily caloric intake down you can take it a step further diving into your daily macro-nutrition, i.e. your daily protein, carbohydrate and fat intake. I go into this under the macro-nutrition header. This will also explain why food like pizza and fast food are considered "unhealthy" and this method is used by professionals; for example, pizza will have 36g of carbs per 100g where as 100g of sweet potato will only have 17g, therefore, you will be able to eat more than double the amount of sweet potato than pizza and therefore feel fuller and happier.</p>
              
              <header>
                  <h3>Calorie Tracking (intermediate):</h3>
              </header>
              <p>Now that we have covered the basics of nutrition and how one can regulate their intake through portion control, we can take it one step further by calculating and tracking the caloric value of food to reach our daily intake without going over. I would strongly recommend this method over portion control as this is much more accurate and gives you more control over your food and guarantees results. This method will require you to use MyFitnessPal, I have created a basic guide at the bottom of the page: <a href="MyFitnessPal">Link to MyFitnessPal:</a></p>
              <p>Once you have calculated your daily caloric intake it is extremely simple to do. Simply log each meal into MyFitnessPal and it will tell you how many calories you have remaining.</p>
              
              <header>
                  <h3>Macro-Nutrition (advanced):</h3>
              </header>
              <p>As stated previously your body needs a certain number of calories per day to function and we get these calories from our foods. However, we can break this down even further and look at them in further detail. Furthermore, this is done by going into macro-nutrition, i.e. protein, fats and carbs (carbohydrates). Therefore, your body not only needs only a certain number of calories per day but also a specific amount of carbs, fat and protein per day. This will give you the greatest control over what you can eat and is used by any professional bodybuilder or athlete as it is the most affective, however, does require the most effort (less so with a meal plan in place).</p>
              
              <p>So how do we know how many proteins, carbs and fats we need per day? Well, 1 gram of protein will amount to 4kcal, 1 gram of carb will amount to 4kcal and 1 gram of fat will amount to 9kcal. Furthermore, you will want to break you diet down to 40% protein, 40% carbohydrates and 20% fats. Therefore, if you know you need 2500 calories per day you can quickly calculate your macros by taking 40% of 2500 and dividing it by 4 for proteins and carbs and taking 20% of 2500 and dividing it by 9 for your fats.</p>
              
              <p>Once you know your macros you will need to know the macros of food (I have put a table below for quick reference and examples). For this you can either google it or use MyFitnessPal. MyFitnessPal is your best and easiest bet as you can just scan a bar code and it'll tell you all of its nutritional information. I have made a guide of how to use MyFitnessPal at the bottom of the page. You will also need a weighing scale to weigh your food to know your portion size. Now granted that this is very time-consuming weighing and logging all your food everyday this is where a meal plan comes in. Which I will get on to later.</p>
              
              <header>
                  <h3>Common issues and solutions:</h3>
              </header>
              
               <!-- website section regarding muscle gain -->
               <a id="muscleGain"></a>
              <header>
                  <h2>Muscle Gain:</h2>
              </header>
              <p>As covered earlier to gain weight one must eat more calories than they burn. However, no one wants to just pack on layers of fat, at least you’d think so. This section will cover how-to put-on muscle whilst putting on as little fat as possible.</p>
              
              <header>
                  <h3>A brief introduction on how to gain muscle:</h3>
              </header>
              <p>So, we know to put on muscle we need to eat more calories than we are burning, for example if you burn 2500 calories a day you must eat more than 2500, but how much more? When putting on muscle, it is different for each person just like losing weight. Some people will say to just eat as much as you can stomach; i.e. “eat big to get big”. Some will say to eat in a 250-calorie surplus and if you feel like you can eat more then eat more but if you pack on too much fat to eat less. </p>
              
              <p>As previously mentioned, one must be in a caloric surplus, so step 1 would be to figure out your calories and or macros, as with losing weight, there are many ways of doing this. I would personally recommend using MyFitnessPal and inputting all your data in it and the app will tell you. Moreover, by using the app you can track your daily food to make sure you are in this surplus. Step 2 would be to track your food (again using MyFitnessPal) to make sure you are hitting those number consistently for optimal progress.</p>
              
              <p>When calculating your caloric requirements for the day you must also take into account your activity levels. For example, how often you exercise, do you have a sedentary job or time of year, for example, in the summer one would assume they are more “active” as the weather is nice and therefore going out walking more, therefore, increasing calories burned. MyFitnessPal does this “automatically” when you input your data but something one should be conscious of. We will look into this further below:</p>
              
              <header>
                  <h3>Calorie Tracking (intermediate):</h3>
              </header>
              <p>Once you now know your caloric requirements for the day and are tracking what you eat on a daily basis. The next step would be to weigh yourself once a week to track progress and monitor if any adjustments need to be made. With that said a few side notes:</p>
              <ul>
                  <li>when weighing yourself the reason I said once a week is for consistency in progress.
                      <ul>
                          <li>any more than that and it can lead to negative feelings and thoughts towards your diet.</li>
                      </ul>
                  </li>
                  <li>in keeping with consistency for the best results, always way yourself on the same day of the week at the same time. I would personally recommend on a Sunday morning as you will have an empty stomach and usually free time.</li>
              </ul>
              
              <header>
                  <h3>Macro-Nutrition (advanced):</h3>
              </header>
              <p>Macro tracking is ideally the way to go, though again, it does take more effort (at least at first).</p>
              
              <header>
                  <h3>Common issues and solutions</h3>
              </header>
              <ol type="1">
                  <li>I’m gaining quite a bit of at and not so much muscle:</li>
              </ol>
              <p>A common issue people face when trying to put on lean muscle mass. This is most likely due to the caloric surplus being too high, or your macros not being right. The simplest solution is to simply dial back on the surplus. This is assuming you are training properly.</p>
              <ol type="1">
                  <li>I can’t get all the food down.</li>
              </ol>
              
              
               <!-- website section regarding maintanance -->
               <a id="maintenance"></a>
              <header>
                  <h2>Maintenance:</h2>
              </header>
              <p>When should I be looking for a maintenance approach to my diet? The simple answer is when you are at the end of your weight loss or if you are simply happy with how you look and don’t want to gain or lose any weight.</p>
              
               <header>
                  <h3>A brief introduction on how to maintain body weight:</h3>
              </header>
              <p>To gain weight you need to eat more than you burn, to lose weight you need to eat less than you burn, so to maintain you weight you “simply” need to eat what you burn. So once again set up your calories & macros and tack them to make sure you are not going over or under.</p>
              
              <header>
                  <h3>Calorie Tracking (intermediate):</h3>
              </header>
              
              <header>
                  <h3>Macro-Nutrition (advanced):</h3>
              </header>
              
              <header>
                  <h3>Common issues and solutions:</h3>
              </header>
              
              <!-- website section regarding diet fads -->
               <a id="diet"></a>
            <header>
                <h2>Diets:</h2>
            </header>
              
            <table>
                <tr>
                    <th>Diet:</th>
                    <th>Positives:</th>
                    <th>Drawbacks:</th>
                </tr>
                <tr>
                    <td>Paleo:</td>
                    <td>
                        <ul>
                            <li>founded on the principle that 99.9% of our genes were formed 10,000 years ago at the beginning of the Neolithic eat.</li>
                            <li>suggests that we are well-suited to this diet because this is what we evolved with.</li>
                            <li>recommends protein intake of approximately 30%; varied according to the season.</li>
                            <li>ideal omega 6 to omega 3 fatty acid ration of 1:1.</li>
                            <li>greater percentage of monounsaturated fat and less saturated fat.</li>
                            <li>CHO limited to seasonal fruit, wild vegetables, roots, legumes and nuts.</li>
                            <li>in line with hunter gatherer lifestyle, i.e. exercise important part of diet.</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>lack of dairy produce and associated poor calcium intake; won’t suit everyone.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Fasting:</td>
                    <td>
                        <ul>
                            <li>helps detoxify many systems of the body.</li>
                            <li>creates negative energy balance; i.e. weight loss.</li>
                            <li>rest the digestive system.</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>risk of dehydration</li>
                            <li>lack of essential nutrients.</li>
                            <li>lack of energy.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Low carb high fat:</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Low fat high carb:</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Banting:</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ketogenic diet (keto):</td>
                    <td>
                        <ul>
                            <li>high fat, moderate protein, low carbs.</li>
                            <li>reduction in carbs results in reduces blood glucose causing body to change metabolically.</li>
                            <li>rise in use of fatty acids from reserves.</li>
                            <li>fatty acids circulate to liver where they are converted into smaller fragments and released back into  circulation.</li>
                            <li>in a “ketogenic” state.</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>increased fat intake, CDH risk.</li>
                            <li>increased protein turnover, kidney function and blood acidity.</li>
                            <li>calcium reduction in bones.</li>
                            <li>less suited to people with history of kidney function problems.</li>
                        </ul>
                    </td>
                </tr>
            </table>
              
            <!-- website section regarding supplements -->
            <a id="supplements"></a>
            <header>
                <h2>Supplements:</h2>
            </header>
            
            <header>
                <h3>Pre-Work Out:</h3>
                <h4>What is a "pre-workout" and what does it do?</h4>
            </header>
            <p>Besides it being in the name, it is a supplement one takes before working out. These can then be broken down into 2 subcategories, 
            stim-free pre-workout and stim pre-workout; a stim free one means it is stimulant free (i.e. no caffeine). Moreover, there are pre-workouts that focus on different aspects; for example. 
            a stim-free pre-workout will usually focus on giving you a "pump" and better "focus". Meaning the product will contain some sort of ingredient to boost vasodilation (i.e. dilation of blood vessels) 
            which will result in the muscle filling up with more blood and giving that better "pump". On the other hand, pre-workouts with caffeine in them are usually designed to give that extreme boost in energy due to them
            high caffeine and vitamin B content.</p>
            
            <header>
                <h4>When should I take a pre-work out?</h4>
            </header>
            <p></p>
            
            <header>
                <h4>How often should I take a pre-work out?</h4>
            </header>
            <p>First of all, the impact a pre-workout has on you will depend on the products contents itself and your tolerance to caffeine. Some people will have such a high tolerance to pre-workout they will need 2 or more scoops.
            In my personal opinion if you reach a point where you feel you need more than 1 scoop you need to give your body a break.</p>
            
            <header>
                <h4>Why take pre-work out over a coffee or emery drink?</h4>
            </header>
            <p>A pre-workout is designed to be taken to enhance your work outs and its ingredients will reflect that (at least if it’s any good), whereas a coffee or energy drinks are designed / used to give you an energy kick. 
            For example, a stim-free pre-work out may contain arginine which results in an improved blood flow and circulation, again working towards that better pump. Moreover, a pre-workout's ingredients are all used in specific measures 
            tailored to achieve a specific goal, e.g. pump or focus or energy boost. And these measurements are backed up by research. Again, granted the product is any good. Moreover, a good pre-workout should be designed to avoid a high
            amount of energy then a horrible dip in energy at the end.</p>
            
            <header>
                <h4>Which pre work out is right for me</h4>
            </header>
            
            
            <header>
                <h3>Creatine:</h3>
            </header>
            
            <h3>Supplement companies I recommend:</h3>
              
            <header>
                <h2>Vitamins:</h2>
            </header>
            <table>
                <tr>
                    <th>Vitamin:</th>
                    <th>Functions:</th>
                    <th>Sources:</th>
                </tr>
                <tr>
                <td>Vitamin A</td>
                <td>
                    <ul>
                        <li>aids protein digestion.</li>
                        <li>vital role in bone building.</li>
                        <li>helps maintain vision.</li>
                        <li>protects against pollution.</li>
                        <li>protects against degenerative damage.</li>
                    </ul>
                </td>
                <td>
                    <ul>
                        <li>butter from grass-fed cows.</li>
                        <li>whole eggs.</li>
                        <li>liver.</li>
                        <li>seafood.</li>
                        <li>cod liver oil.</li>
                    </ul>
                </td>
              </tr>
              <tr>
                  <td>Vitamin D</td>
                  <td>
                      <ul>
                          <li>needed for calcium and phosphorus absorption.</li>
                          <li>absorb calcium, for bone growth and teeth.</li>
                          <li>protect against cancer.</li>
                          <li>protect against multiple sclerosis.</li>
                      </ul>
                  </td>
                  <td>
                      <ul>
                          <li>butter from grass-fed cows.</li>
                          <li>whole eggs.</li>
                          <li>liver.</li>
                          <li>seafood.</li>
                          <li>cod liver oil.</li>
                      </ul>
                  </td>
              </tr>
              <tr>
                  <td>Vitamin E</td>
                  <td>
                      <ul>
                          <li>aids blood circulation.</li>
                          <li>helps with tissue repair and healing.</li>
                          <li>maintains structural integrity of cells (e.g. skin, nails, hair).</li>
                          <li>slows ageing.</li>
                          <li>acts as powerful antioxidant.</li>
                      </ul>
                  </td>
                  <td>
                      <ul>
                          <li>unrefined vegetable oil..</li>
                          <li>butter.</li>
                          <li>organ meats.</li>
                          <li>whole grains.</li>
                          <li>raw nuts and seeds.</li>
                          <li>dark green leafy vegetables</li>
                      </ul>
                  </td>
              </tr>
              <tr>
                  <td>Vitamin K</td>
                  <td>
                      <ul>
                          <li>blood clotting.</li>
                          <li>bone formation.</li>
                      </ul>
                  </td>
                  <td>
                      <ul>
                          <li>liver.</li>
                          <li>pastured whole eggs.</li>
                          <li>butter from grass-fed cows.</li>
                          <li>whole grains.</li>
                          <li>dark green leafy vegetables.</li>
                      </ul>
                  </td>
              </tr>
              <tr>
                  <td>Vitamin B</td>
                  <td>
                      <ul>
                          <li>healthy nerves, skin, eyes, hair, liver and muscle.</li>
                          <li>prevent fatigue..</li>
                          <li>vital role in metabolism.</li>
                          <li>helps produce cholesterol.</li>
                          <li>maintain fertility and normal growth.</li>
                      </ul>
                  </td>
                  <td>
                      <ul>
                          <li>-	whole unrefined grains.</li>
                          <li>fresh fruit.</li>
                          <li>fresh vegetables.</li>
                          <li>raw nuts.</li>
                          <li>legumes.</li>
                          <li>seafood</li>
                          <li>organ meat.</li>
                      </ul>
                  </td>
              </tr>
              <tr>
                  <td>Vitamin C</td>
                  <td>
                      <ul>
                          <li>immune system function.</li>
                          <li>aid tissue growth and repair.</li>
                          <li>strengthens capillary walls.</li>
                          <li>supports adrenal gland function.</li>
                          <li>vital for formation of collagen and connective tissue health.</li>
                          <li>helps healing wounds</li>
                          <li>powerful antioxidant.</li>
                      </ul>
                  </td>
                  <td>
                      <ul>
                          <li>fresh fruit.</li>
                          <li>fresh vegetables.</li>
                          <li>some organ meats.</li>
                      </ul>
                  </td>
              </tr>
          </table>
              
        <!-- website section regarding MyFitnessPal -->
        <a id="MyFitnessPal"></a>
        <header>
            <h2>MyFitnessPal:</h2>
        </header>
        <p>MyFitnessPal is a super useful tool in anyones arsenal and should be used by anyone concidering changing the way they look if they are serious. 
        MyFitnessPal will help you track your calories, macros and set achievable goals, as well as, many other great feature.</p>
        
        <header>
            <h3>Setting up your goals:</h3>
        </header>
        
        <header>
            <h3>Creating recipes:</h3>
        </header>
            
        </div>
            
    </main>