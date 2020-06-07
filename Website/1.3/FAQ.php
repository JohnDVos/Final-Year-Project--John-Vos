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
              <header>
                    <h2>Definition of Tempo:</h2>
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
                    <h2>What do I do if I don't have a piece of equipment:</h2>
                </header>
                <p>LIST OF REPLACEMENT EXERCISES FOR EACH EXERCISE.</p>
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
