<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    /*
    *to ensure 1 header for multiple pages, creates header HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "header.php" 
?>


<!-------------------- HTML -------------------->
<!------ Side menu------>
        <div class="sidebar">
            <a href="#introduction">Introduction:</a>
            <a href="#calories">Calories:</a>
            <a href="#BMR">BMR:</a>
            <a href="#TDEE">TDEE:</a>
            <a href="#macroNutrition">Macro-Nutrition:</a>
            <a href="#weightLoss">Weight Loss:</a>
            <a href="#muscleGain">Muscle Gain:</a>
            <a href="#maintenance">Maintenance</a>
            <a href="#diet">Different Diets:</a>
            <a href="#supplements">Supplements</a>
            <a href="#MyFitnessPal">MyFitnessPal</a>
        </div>
        
<!------ Main content------>     
    <main>
        
        <div class="wrapper-main">
        <!------------------------------------------------------------------
        ---------- website section regarding intro to nutrition ------------
        --------------------------------------------------------------------->
        <a name="introduction"></a>
            <header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <h2>Introduction:</h2>
            </header>
                <p>To understand how to lose weight, gain muscle or whatever your goal is you must first understand the relationship between your body and food. We will achieve this by looking at calories, macros and what it is we put into our bodies.</p>
                <a href="https://www.gov.uk/government/publications/the-eatwell-guide" target="_blank">UK Governement guideliness:</a>

            <header>
                <h3>UK National Food Guidelines:</h3>
            </header>
              
              
              <table border="5">
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
            
        </div>
            
    </main>