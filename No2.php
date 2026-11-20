<?php
echo "<table border='1' cellpadding='5'>";

        echo "<tr>";
        echo "<td bgcolor='white'>Bilangan</td>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<td bgcolor='lime'>" . $i . "</td>";
        }
        echo "</tr>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td bgcolor='lime'>" . $i . "</td>";

            for ($j = 1; $j <= 10; $j++) {
                $kali = $i * $j;

                if ($kali % 2 == 1) {
                    echo "<td bgcolor='yellow'>" . $kali . "</td>";
                } else {
                    echo "<td bgcolor='cyan'>" . $kali . "</td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";
?>