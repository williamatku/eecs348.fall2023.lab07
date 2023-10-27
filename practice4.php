<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practice 4: Multiplication Table Generator</title>
    </head>

    <body>
        <h1>Multiplication Table Generator</h1>

        <form method="post" action="">
            Enter a value N: <input type="text" name="n" />
            <input type="submit" name="submit" value="Generate Table" />
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $n = (int)$_POST['n'];

            if ($n > 0) {
                echo "<h2>Multiplication Table for 1 to $n</h2>";
                echo "<table border='1'>";
                echo "<tr><th>&times;</th>";

                for ($i = 1; $i <= $n; $i++) {
                    echo "<th>$i</th>";
                }

                echo "</tr>";

                for ($i = 1; $i <= $n; $i++) {
                    echo "<tr><th>$i</th>";
                    for ($j = 1; $j <= $n; $j++) {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Please enter a positive integer.";
            }
        }
        ?>

    </body>
</html>
