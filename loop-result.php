<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loop Result</title>
</head>
<body>
<a href= "index.php">
    <div class="result">
            <?php
                $start = $end = "";
                $start = isset($_POST['start']) ? $_POST['start'] : '';
                $end = isset($_POST['end']) ? $_POST['end'] : '';

                if (empty($start) || empty($end)) {
                    echo "Input failed!";
                    return;
                }

                if ($start > $end) {
                    echo "Loop won't start because start value is greater than end value!";
                    return;
                }

                echo "Start Value: ".$start."<br>";
                echo "End Value: ".$end."<br>";
                echo "<br>";

                for ($i = $start; $i <= $end; $i++) {
                    if ($i == $start) {
                        echo "Start: ".$i."<br>";
                    } else if ($i == $end) {
                        echo "End: ".$i."<br>";
                    } else {
                        echo "Value: ".$i."<br>";
                    }
                }
            ?>
        </div>
    </a>    
</body>
</html>