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
                <h1>Frequently Asked Questions:</h1>
            </header>
            <p>In this section you will find questions PT's are often asked and questions you might have in general.</p>
            
            <!-- Training related questions. -->
            <header>
                <h2>Training related Questions:</h2>
                <h3>Definition of Tempo:</h3>
            </header>
            <p>For the explanation of tempo, I will be using the bench press as the example exercise; i.e. bottom of the exercise is when the bar is on your chest, top of the exercise is when your arms are locked out at the top.</p>
            <table>
                <tr>
                    <th>Tempo:</th>
                    <th>Timing:</th>
                    <th>Explanation:</th>
                </tr>
                <tr>
                    <td>Slow:</td>
                    <td>4-0-4</td>
                    <td>4 seconds down, 0 seconds at the bottom and 4 seconds back up.</td>
                </tr>
                <tr>
                    <td>Medium:</td>
                    <td>2-0-2</td>
                    <td>2 seconds down, 0 seconds at the bottom and 2 seconds back up.</td>
                </tr>
                <tr>
                    <td>Fast:</td>
                    <td>1-0-1</td>
                    <td>1 seconds down, 0 seconds at the bottom and 1 seconds back up.</td>
                </tr>
                <tr>
                    <td>Pause:</td>
                    <td>2-2-2</td>
                    <td>2 seconds down, 2 count at the bottom and 2 seconds back up.</td>
                </tr>
                 <tr>
                    <td>Squeeze:</td>
                    <td>2-2-2</td>
                    <td>2 seconds down, 2 second squeeze of target muscle at the end of the movement and 2 seconds back up.</td>
                </tr>
            </table>
            
            <header>
                <h3>What training style is the one for me?</h3>
            </header>
            <p>Strenght if you want to get strong, bodybuilding if you want to put on muscle. Hybrid if you want both. </p>
            
            <header>
                <h3>Abreviation dictionary:</h3>
            </header>
            <table>
                <tr>
                    <th>Abreviation:</th>
                    <th>Meaning:</th>
                </tr>
                <tr>
                    <td>DB</td>
                    <td>Dumbbell</td>
                </tr>
                <tr>
                    <td>BB</td>
                    <td>Barbell</td>
                </tr>
                <tr>
                    <td>OH</td>
                    <td>One Hand</td>
                </tr>
                <tr>
                    <td>WG</td>
                    <td>Wide Grip</td>
                </tr>
            </table>
            
            <!-- Cardio related questions. -->
            
            <header>
                <h2>Cardio:</h2>
                <h3>What are the benefits of cardio?</h3>
            </header>
            <p>Cardio can be a great tool if utilised properly and help you achieve your results with greater success. If you are trying to lose weight doing cardio can greatly increase your chances of success and with a combination of diet it will come off much easier. Moreover, this could be a simple walk around the block rather than sprints up a hill for an hour.</p>
                
            <header>
                <h3>How often should I do cardio?</h3>
            </header>
            <p>Depends on your goal and many other variables. Typically at least 3 times a week, again this can be a half hour walk around the neighbourhood, it doesn't have to be something crazy or extreme. Walking on an incline cardio is a great method as it's low impact and will burn consistent calories.</p>
            
            
      </div>
        
        
    </main>


<!-- PHP -->
<?php
    /*
    *to ensure 1 footer for multiple pages, creates footer HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "footer.php";
?>
