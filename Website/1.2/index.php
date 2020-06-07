<!------ PHP ------>
<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    /*
    *to ensure 1 header for multiple pages, creates header HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "header.php" 
?>

<!------ HTML ------>
<main>
    <div class="wrapper-main">
        <header>
            <h1>Welcome to the home page:</h1>
        </header>
        
        <!--can chose what content to show depending on if logged in or not.-->
        <?php
            if (!isset($_SESSION['id'])) {
                echo '<p class="login-status">You are currently logged out!</p>';
            } else if (isset($_SESSION['id'])) {
                echo '<p class="login-status">You have succesfully logged in!</p>';
            }
        ?>
            
        <header>
            <h2>About this website:</h2>
        </header>
            <p>This website was designed for Personal Trainers (PT's) and the general populous who are looking for the following:</p>
            
        <header>
            <h3>General Users:</h3>
        </header>
             <ol>
                <li><a href="nutrition.php">Nutrition Page:</a></li>
                <li><a href="training.php">Training Programs:</a></li>
                <li><a href="trainers.php">Personal Trainers</a></li>
            </ol>
        
        <header>
            <h3>Personal Trainers:</h3>
        </header>
            <ol>
                <li><a href="nutrition.php">Nutrition Resources</a></li>
                <li><a href="training.php">Training Resources</a></li>
            </ol>
    <div class="wrapper-main">
</main>


<!------ PHP ------>
<?php
    /*
    *to ensure 1 footer for multiple pages, creates footer HTML markup; can be called multiple times.
    *for making changes, can be done in 1 place.
    */
    require "footer.php";
?>