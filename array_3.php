<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <title>Document</title> -->
</head>
<body>
    <h2>Multidimesional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
            $movie = Array (
                Array("Avangers: Invinity War", 2018, 8.7),
                Array("The Avangers", 2012, 8.1),
                Array("Guardian of The Galaxy", 2014, 8.1),
                Array("Iron Man", 2008, 7.9)
            );
        echo "<tr>";
            echo "<td>". $movie[0][0] ."</td>";
            echo "<td>". $movie[0][1] ."</td>";
            echo "<td>". $movie[0][2] ."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>". $movie[1][0] ."</td>";
            echo "<td>". $movie[1][1] ."</td>";
            echo "<td>". $movie[1][2] ."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>". $movie[2][0] ."</td>";
            echo "<td>". $movie[2][1] ."</td>";
            echo "<td>". $movie[2][2] ."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>". $movie[3][0] ."</td>";
            echo "<td>". $movie[3][1] ."</td>";
            echo "<td>". $movie[3][2] ."</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>