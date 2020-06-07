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
        <!-- training section regarding bodybuilding -->
        <header>
            <h1>Training:</h1>
            <h2>General resources & Information:</h2>
            <h3>To download the training programs</h3>
        </header>
        <ul>
            <li><a href="documents/BodyBuilding.docx" download>Bodybuilding word document:</a></li>
            <li><a href="documents/Hybrid.pdf" download>Hybrid pdf document:</a></li>
            <li><a href="documents/Hybrid.docx" download>Hybrid word document:</a></li>
        </ul>
        
        <header>
            <h3>Journals & Articles:</h3>
        </header>
        <ul>
            <li><a href="https://journals.lww.com/nsca-scj/Abstract/publishahead/Magnitude_and_Composition_of_the_Energy_Surplus.99278.aspx" target="_blank">Magnitude and Composition of the Energy Surplus for Maximizing Muscle Hypertrophy</a></li>
            <li><a href="https://journals.lww.com/nsca-jscr/Abstract/publishahead/Effect_of_Rest_Interval_Duration_on_the_Volume.94484.aspx" target="_blank">The effect of rest interval Duration on the volume completed during a high-intensity bench press exercise</a></li>
            <li><a href="https://journals.lww.com/nsca-jscr/Fulltext/2020/05000/Comparison_of_Linear_and_Reverse_Linear_Periodized.17.aspx?context=FeaturedArticles&collectionId=1" target="_blank">Comparison of linear and reverse linear periodized programs with equated volume and intensity for endurance running performance</a></li>
        </ul>
              
            <a id="Bblock1"></a>
              <header>
                  <h2>Bodybuilding:</h2>
                  <h3>Block 1: Introduction to lifting</h3>
              </header>
              <p>The goal of this training block is two-fold. One if you are a beginner in the gym this block is perfect to familiarise yourself with exercises and movements to build on later. Really focus on range of motion, tempo, mind to muscle connection and form; the rest (i.e. weight) will all come in due time.  Second, if you are a more experienced lifter this block is excellent for a de-load; i.e. stepping back from the intensity and still training but giving the body time to recover. Keeping in mind that if you do use this program for a de-load phase, do not take any of these sets to failure, pick a weight where you could still do 2 or so reps, i.e. get a good pump / blood into the muscle which will aid in recovery.</p>
              
              <p>The work outs are broken down into pre-work out, warm up and the actual work out. The pre-work outs goal is to hit those “accessories” that are often neglected and not done if left ill the end of the training session. Such as, calf’s or abs. The goal of the warm up section is to warm up all your joints before working out, warming up is once again so often neglected and will lead to injuries down the road.</p>
              
              <header>
                  <h4>Back:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Straight Arm Pulldown</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raise</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>T-Bar Row</td>
                      <td>4</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Arm DB Row</td>
                      <td>3</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Wide Grip Lat Pulldown</td>
                      <td>3</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Bar Cable Row (under arm)</td>
                      <td>3</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Machine Row</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Rack Deadlift (above the knee)</td>
                      <td>4</td>
                      <td>15</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Chest:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>DB Pull-Over</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Push Ups</td>
                      <td>3</td>
                      <td>Failure</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Seated Incline Cable Flies</td>
                      <td>5</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Flat Bench Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Flat DB Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline Bench Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dips</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Quads:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Leg Extensions</td>
                      <td>5</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Thigh Abductors / Thigh Adductors</td>
                      <td>5</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Squats</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Narrow Hack Squat</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Press (wide stance)</td>
                      <td>5</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                   <tr>
                      <td>Walking Lunges</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Arms:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>One Hand Triceps Extension</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand Bicep CurlUps</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>V-Bar Triceps Pushdown</td>
                      <td>2</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dip Machine</td>
                      <td>5</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Arm Triceps Kick Back</td>
                      <td>3</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Reverse Cable Curl</td>
                      <td>5</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Incline DB Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                   <tr>
                      <td>Close Grip EZ Bar Curl</td>
                      <td>3</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Hammer Curl</td>
                      <td>3</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Delts:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>One Hand Triceps Extension</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand Bicep CurlUps</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Shoulder Press Machine</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Side Lateral Machine</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Rear Delt Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Smith Machine Military Press</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                   <tr>
                      <td>Upright Row</td>
                      <td>5</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Shrug</td>
                      <td>5</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Hamstrings:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>DB Pull-Over</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Push Ups</td>
                      <td>3</td>
                      <td>Failure</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Standing One Leg Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Lying Leg Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Stiff Leg Deadlift</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Glute Kickback</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Thigh Adductor</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
            </div>
        
            <div class="wrapper-main">
              <a id="Bblock2"></a>
              <header>
                  <h3>Block 2: Strength</h3>
              </header>
              <p>The aim here is to focus on strength and mass, this is achieved through lower reps for heavier weight but also staying in that “hypertrophy” rep range. Make sure to always maintain a focus on form, range of motion and warming up properly. The approach taken here is for people looking to gain in terms of both muscle mass and strength, for this block the reps are lower for focus on that strength gain, but volume is equally high. </p>
              
              <header>
                  <h4>Legs:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>1</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Leg Extension / Lying Leg Curl</td>
                      <td>5</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg press (wide)</td>
                      <td>5</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Back Squat</td>
                      <td>3</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Front Squat</td>
                      <td>5</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lunges</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Stiff Leg Deadlift</td>
                      <td>5</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Chest:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>DB Pull-Over</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Push Ups</td>
                      <td>3</td>
                      <td>Failure</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Pec Deck</td>
                      <td>5</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline Bench Press</td>
                      <td>5</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline DB Press</td>
                      <td>4</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Flat DB Press</td>
                      <td>5</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Flat Machine Chest Press</td>
                      <td>4</td>
                      <td>6 - 10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Wide Grip Decline Bench Press</td>
                      <td>5</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              
              <header>
                  <h4>Back:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Straight Arm Pulldown</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raises</td>
                      <td>3</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Pull Ups</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>T-Bar Rows</td>
                      <td>5</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Bent Over BB Row</td>
                      <td>5</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Rack Pulls</td>
                      <td>4</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Cable Row (wide grip)</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Underhand Lat-Pulldown</td>
                      <td>4</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Pullover</td>
                      <td>2</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Arms:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>One Hand Triceps Extension</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand Bicep Curl</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Rope Triceps Pushdown</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Triceps Dip Machine</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB French Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Curl</td>
                     <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Incline DB Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Delts:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>One Hand Triceps Extension</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand Bicep Curl</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Reverse Peck Deck</td>
                      <td>4</td>
                      <td>8</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Bent Over DB Side Raises</td>
                      <td>4</td>
                      <td>8</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Standing Military Press</td>
                      <td>5</td>
                      <td>6</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Seated DB Hammer Front Raise</td>
                      <td>4</td>
                      <td>6</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Lateral Raises Cable</td>
                      <td>4</td>
                      <td>8</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Upright Row</td>
                      <td>3</td>
                      <td>6</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Shrug</td>
                      <td>4</td>
                      <td>6</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
            </div>
        
            <div class="wrapper-main">
              <a id="Bblock3"></a>
              <header>
                  <h3>Block 3: Volume</h3>
              </header>
              <p>At its core, increasing muscle size or strength comes from exerting the muscle over a long period of time. Your body will adapt to training over time as it adapts and as a result you will be able to do more work load over time. So, to keep the body growing and challenged one method is volume, i.e. overloading the muscle over time to maximise growth.</p>
              
              <header>
                  <h3>Legs:</h3>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Leg Extensions</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Press (wide)</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Squat</td>
                      <td>3</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Front Squat</td>
                      <td>3</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lunges</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Lying Leg Curl</td>
                      <td>3</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Stiff Leg Deadlift</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Chest / Delt's / Tri's:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>One Hand Triceps Extension</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand Bicep Curl</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Cable Cross Over</td>
                      <td>3</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Smith Machine Behind the Neck Shoulder Press</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline Bench Press</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Side DB Lateral Raises</td>
                      <td>3</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Wide Grip Decline Bench Press</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Bar Rope Triceps Pushdown</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Kickback</td>
                      <td>5</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Back / Bi's / Traps:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>One Hand Triceps Extension</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand Bicep Curl</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>DB Pull Over</td>
                      <td>3</td>
                      <td>12</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Bent Over BB Row</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>T-Bar Row</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Arm Rope Row</td>
                      <td>3</td>
                      <td>12</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Curl</td>
                      <td>3</td>
                      <td>10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Hammer Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Reverse Shrug</td>
                      <td>5</td>
                      <td>10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
              </table>
            </div>
        
            <div class="wrapper-main">
              <a id="Bblock4"></a>
              <header>
                  <h3>Block 4: Fixing Imbalances</h3>
              </header>
              <p>explain.</p>
              
              <header>
                  <h4>Back / Rear Delts:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="10">Work Out:</td>
                      <td>Leg Extensions</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Pull Ups</td>
                      <td>4</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Cable Rows</td>
                      <td>3</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>T-Bar Rows</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One-Arm DB Row</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Bent Over BB Row</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Pull-Over</td>
                      <td>3</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Shrug</td>
                      <td>4</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Reverse Peck Deck</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Cable Rear Delt Fly</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Chest / Front Delts:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Straight Arm Pulldown</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raises</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Peck Deck</td>
                      <td>5</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Incline Bench Press</td>
                      <td>4</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline DB Fly’s</td>
                      <td>3</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline Machine Chest Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Decline DB Fly’s</td>
                      <td>3</td>
                      <td>12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Side DB Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Standing One Arm Lateral Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Quads / Hams:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Straight Arm Pulldown</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raises</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="8">Work Out:</td>
                      <td>Lying Leg Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Extension</td>
                      <td>4</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Thigh Adductor</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Thigh Abductor</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lunges</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Press (narrow feet)</td>
                      <td>4</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Squat</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Stiff Leg Deadlift</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Arms / Delts:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Straight Arm Pulldown</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raises</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="9">Work Out:</td>
                      <td>Alternate Hammer Curl</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Bicep Curl</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>EZ Bar Curl</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Straight Bar Triceps Pushdown</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Lying Skull Crushers</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Triceps Dip Machine</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Front Raises</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Upright Row</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Smith Machine Shrugs</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
            </div>
        
            <div class="wrapper-main">  
              <a id="Bblock5"></a>
              <header>
                  <h3>Block 5: Volume pt.2</h3>
              </header>
              <p>explain.</p>
              
              <header>
                  <h4>Chest / Tris:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="8">Work Out:</td>
                      <td>Cable Cross Over</td>
                      <td>3</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Flat Bench Press</td>
                      <td>4</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline Bench Press</td>
                      <td>4</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hammer Grip Incline DB Press</td>
                      <td>2</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Wide Grip Decline Bench Press</td>
                      <td>4</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Decline DB Fly’s</td>
                      <td>2</td>
                      <td>12</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Reverse Grip Triceps Pushdown</td>
                      <td>3</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Kickback</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Back / Bi's:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="8">Work Out:</td>
                      <td>Wide-Grip Lat Pulldown</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Bent Over BB Rows</td>
                      <td>4</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>T-Bar Rows</td>
                      <td>4</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Close-Grip Front Lat Pulldown</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Pullovers</td>
                      <td>3</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Curls</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Hammer Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Shrug</td>
                      <td>5</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Quads / Hams:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Leg Extensions</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Lying Leg Curl</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Press (wide feet)</td>
                      <td>3</td>
                      <td>10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Back Squat</td>
                      <td>4</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Front Squat</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lunges</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Stiff Leg Deadlift</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Delts / Traps:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="7">Work Out:</td>
                      <td>Seated DB Side Raises</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Side DB Raises</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Seated DB Hammer Front Raises</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Cable Front Raises</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Smith Machine Military Press</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Shrug</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Shrug</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
            </div>
        
            <div class="wrapper-main">  
              <a id="Bblock6"></a>
              <header>
                  <h3>Block 6: Muscle Gainer</h3>
              </header>
              <p>explain.</p>
              
              <header>
                  <h4>Quads / Hams:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="8">Work Out:</td>
                      <td>Lying Leg Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Extensions</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Back Squat</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Press (narrow stance)</td>
                      <td>4</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hip Adductor</td>
                      <td>3</td>
                      <td>15</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hip Abductor</td>
                      <td>3</td>
                      <td>15</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Stiff Leg Deadlift</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lunges</td>
                      <td>3</td>
                      <td>8</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Chest:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Peck Deck</td>
                      <td>5</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB incline Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline DB Fly</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Chest Press (machine)</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Decline DB Fly’s</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Back:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Cable Row</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>T-Bar Row</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One-Arm DB Row</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Row</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Pull Over</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Pull Ups</td>
                      <td>4</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Arms:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hanging Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Straight-Bar Triceps Pushdown</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Hammer Curl</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Skull Crushers</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Bicep Curl</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dips</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>EZ Bar Curls</td>
                      <td>3</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Delts / Traps:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td rowspan="2">Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>DB Rear Delt Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Reverse Peck Deck</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Cable Side Lateral Raises</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Upright Row</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Arnold DB Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
              </div>
            
            <!-- training section regarding Hybrid  -->
            <div class="wrapper-main">
              <header>
                  <h1>Hybrid:</h1>
              </header>
              
              <a id="Hblock1"></a>
              <header>
                  <h3>Block 1: Introduction to lifting</h3>
              </header>
              <p>description.</p>
              
              <header>
                  <h4>Chest:</h4>
              </header>
              <p>pec fly can be done using DB, machine or cables</p>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>DB Pull Over</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Push Ups</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Bench Press</td>
                      <td>5</td>
                      <td>5</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Incline Bench Press</td>
                      <td>5</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Pec Fly</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Close-Grip Bench press</td>
                      <td>4</td>
                      <td>6</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dips</td>
                      <td>4</td>
                      <td>6</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Back:</h4>
              </header>
              <p>BB row can be done on the smith</p>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Plank</td>
                      <td>3</td>
                      <td>45</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Straight Arm Pulldown</td>
                      <td>3</td>
                      <td>15 - 12 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Lat Pulldown</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Pull Ups</td>
                      <td>5</td>
                      <td>5</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Rack Pull (below the knee)</td>
                      <td>5</td>
                      <td>8</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Row</td>
                      <td>4</td>
                      <td>6</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Low Row (wide grip)</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand DB Row</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Legs:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>0</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Squats</td>
                      <td>5</td>
                      <td>5</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Front Squats</td>
                      <td>3</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Extensions</td>
                      <td>4</td>
                      <td>10 - 10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Walking Lunges</td>
                      <td>3</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                   <tr>
                      <td>Hip Adductor</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
                          
              <header>
                  <h4>Delts:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Plank</td>
                      <td>3</td>
                      <td>45</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Laterall Raises</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Face Pul</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>OHP</td>
                      <td>5</td>
                      <td>5</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Upright Row</td>
                      <td>4</td>
                      <td>8</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Arnold Press</td>
                      <td>4</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Laterall Raise</td>
                      <td>4</td>
                      <td>15</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Reverse Cable Fly</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Front DB Raise</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Arms:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Lying Leg Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>One Hand Triceps Extension</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>One Hand Bicep CurlUps</td>
                      <td>3</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>EZ Bar Bicep Curl</td>
                      <td>5</td>
                      <td>5</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dips</td>
                      <td>5</td>
                      <td>5</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Rope Extension / BB Bicep Curl</td>
                      <td>4</td>
                      <td>10 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Skull Crushers / DB Bicep Curl</td>
                      <td>4</td>
                      <td>10 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Alternate Incline DB Curl</td>
                      <td>4</td>
                      <td>10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Legs:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>1</td>
                      <td>10 minutes</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>3</td>
                      <td>1</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="5">Work Out:</td>
                      <td>Deadlifts</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Stiff Leg Deadlift</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Press</td>
                      <td>4</td>
                      <td>10</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Curl</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hip Abductor</td>
                      <td>4</td>
                      <td>12</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
              </table>
            </div>
        
            <div class="wrapper-main">  
              <a id="Hblock2"></a>
              <header>
                  <h3>Block 2: Volume</h3>
              </header>
              <p>description.</p>
              
              <header>
                  <h4>Back / Shoulders:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Standing Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Warm Up:</td>
                      <td>Straight Arm Pulldown</td>
                      <td>3</td>
                      <td>15 - 12 -10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Deadlifts</td>
                      <td>4</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Row</td>
                      <td>5</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Cable Row (WG)</td>
                      <td>5</td>
                      <td>15</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Lat Pulldown</td>
                      <td>4</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Front Raise</td>
                      <td>3</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Lateral Raise</td>
                      <td>3</td>
                      <td>20</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Arms / Chest:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Plank</td>
                      <td>3</td>
                      <td>45</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Warm Up:</td>
                      <td>DB Pull Over</td>
                      <td>3</td>
                      <td>15 - 12 -10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Bench Press</td>
                      <td>4</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Close Grip Bench</td>
                      <td>5</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>BB Bicep Curl</td>
                      <td>5</td>
                      <td>15</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Tricep Pushdown</td>
                      <td>4</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Bicep Curl</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Over-head Extension / Rope Hammer Curl</td>
                      <td>4</td>
                      <td>12 - 12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Legs:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Seated Calf Raise</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="2">Warm Up:</td>
                      <td>Incremental Cardio</td>
                      <td>3</td>
                      <td>15 - 12 -10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Dynamic Stretching</td>
                      <td>1</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Squats</td>
                      <td>4</td>
                      <td>6</td>
                      <td>180</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>RDL's</td>
                      <td>5</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Lunges</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Press</td>
                      <td>4</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Leg Extensions</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Hip Adductor / Abductor</td>
                      <td>3</td>
                      <td>10 - 10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Shoulders / Back:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Plank</td>
                      <td>3</td>
                      <td>45</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Warm Up:</td>
                      <td>DB Pull Over</td>
                      <td>3</td>
                      <td>15 - 12 -10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Rack Pulls</td>
                      <td>12 - 10 - 8 - 8 - 6</td>
                      <td>5</td>
                      <td>90</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Pull Ups</td>
                      <td>3</td>
                      <td>8</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Smith Shoulder Press</td>
                      <td>5</td>
                      <td>12 - 10 - 8 - 8 - 6</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Front DB Raise</td>
                      <td>4</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Face Pull</td>
                      <td>4</td>
                      <td>15</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Shrugs</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
              </table>
              
              <header>
                  <h4>Chest / Arms:</h4>
              </header>
              <table>
                  <tr>
                      <th></th>
                      <th>Exercise:</th>
                      <th>Sets:</th>
                      <th>Reps:</th>
                      <th>Rest:</th>
                      <th>Tempo:</th>
                  </tr>
                  <tr>
                      <td>Pre-Work Out:</td>
                      <td>Calf Raises</td>
                      <td>4</td>
                      <td>10</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Warm Up:</td>
                      <td>DB Pull Over</td>
                      <td>3</td>
                      <td>15 - 12 -10</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td rowspan="6">Work Out:</td>
                      <td>Incline Bench</td>
                      <td>5</td>
                      <td>8</td>
                      <td>120</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Press / Pec Fly</td>
                      <td>3</td>
                      <td>12 - 12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Pec Fly</td>
                      <td>5</td>
                      <td>15</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Incline</td>
                      <td>4</td>
                      <td>12</td>
                      <td>60</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>Tricep Pushdown</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
                  <tr>
                      <td>DB Bicep Curl</td>
                      <td>4</td>
                      <td>12</td>
                      <td>45</td>
                      <td>Medium</td>
                  </tr>
              </table>
          
        </div>
</main>