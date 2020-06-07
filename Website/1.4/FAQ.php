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
                <h3>What do I do if I don't have a piece of equipment:</h3>
            </header>
            
            <header>
                <h3>What training style is the one for me?</h3>
            </header>
            
            <header>
                <h3>Importance of warming up & stretching:</h3>
            </header>
            
            <!-- Cardio related questions. -->
            
            <header>
                <h2>Cardio:</h2>
                <h3>What are the benefits of cardio?</h3>
            </header>
            
            <p>SOMETHING SOMETHING CARDIO.</p>
                
            <header>
                <h3>How often should I do cardio?</h3>
            </header>
            
            <header>
                <h3>What kind of cardio should I do?</h3>
            </header>
            
            <header>
                <h3>When & how often should I do cardio:</h3>
            </header>
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
