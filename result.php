<html lang="en-US">

    <head>
        <meta charset="utf-8" />
        <title>Result</title>
        <link type="text/css" rel="stylesheet" href="resultsheet.css" />
        <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
    </head>

    <body>
        <div>
            <span>
            <?php
                $a = $_COOKIE["a"];
                $b = $_COOKIE["b"];
                $c = $_COOKIE["c"];
                // Result
                if ($c ** 2 == ($a ** 2) + ($b ** 2)) {  // Check if given dimensions make a right triangle
                    echo "Area: " . ($a * $b) / 2;
                }
                else {
                    echo "Given dimensions are not proper for a right triangle";
                }
            ?>
        </span>
        </div>
    </body>

</html>