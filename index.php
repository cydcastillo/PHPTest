<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>

    <?php 
    $start = $end = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = isset($_POST["start"]) ? $_POST["start"] : "";
        $end = isset($_POST["end"])? $_POST["end"] : "";
    }

    ?>
    <body>
        <div class="container">
            <form action="" method = "POST">
                    <div class="loop">
                            <label for="start">Start of the Loop</label>
                            <input type="number" name="start">
                            <label for="end">End of the Loop</label>
                            <input type="number" name="end">
                            <br>    
                            <button type="submit"> SUBMIT! </button>
                    </div>

                    <div class="result">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                if (empty($start) || empty($end)) {
                                    echo "Input failed!";
                                    return;
                                }

                                echo "Start: ".$start."<br>";
                                echo "End: ".$end."<br>";
                                echo "<br>";


                                for ($i = $start; $i <= $end; $i++) {
                                    if ($i == $start) {
                                        echo "Start: ".$i."<br>";
                                    } else if ($i == $end) {
                                        echo "End: ".$i."<br>";
                                    } else {
                                        echo "Index: ".$i."<br>";
                                    }
                                }
                            }
                        ?>
                    </div>
            </form>
        </div>
    </body>
</html>