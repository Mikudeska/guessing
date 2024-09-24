<html lang="en">
    <head>
        <title>Number guessing game</title>
    </head>
    <body>
        <h1>Guess the number game</h1>

        <form method="post">
            <label for="guess">Enter your guess (between 1 and 100):</label>
            <input type="number" id="guess" name="guess" min="1" max="100" step="1" value="<?php if (isset($_POST['guess'])) echo $_POST['guess']; ?>" required>
            <input type="submit" value="Submit">
            <input type="submit" name="giveup" value="Give up">
        </form>

        <?php
        // Include the PHP logic
        ob_start();    // Use output buffering
        include 'process_guess.php';
        $message = ob_get_clean();    // capture the output from process_guess.php and store it in the $message variable.
    
        if (isset($message) && !empty($message)) {
             echo "<p>$message </p>";
        }
        ?>

    </body>
</html>
