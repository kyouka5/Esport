<html>

<head>
    <meta charset="utf-8">
    <title>DEAC-Hackers versenytevékenység</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "") or die("nem sikerült kapcsolódni az adatbázishoz");
    mysqli_select_db($link, "esport") or die("nem sikerült kiválasztani az adatbázist");
    mysqli_query($link, "SET NAMES 'utf8'");
    mysqli_query($link, "SET CHARACTER SET 'utf8'");
    mysqli_query($link, "SET COLLATION_CONNECTION='utf8_unicode_ci'");
    $query = mysqli_query($link, "SELECT * FROM versenyzesek");
    ?>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Versenyzés ID</th>
                <th scope="col">Játék</th>
                <th scope="col">Dátum</th>
                <th scope="col">Verseny</th>
                <th scope="col">URL</th>
                <th scope="col">Csapatnév</th>
                <th scope="col">Tag</th>
                <th scope="col">IGN</th>
                <th scope="col">Közvetítés/videó</th>
                <th scope="col">Eredmény</th>
                <th scope="col">Bejegyzést tette</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<th scope='row'>" . $row['versenyzes_id'] . "</td>";
                echo "<td>" . $row['jatek'] . "</td>";
                echo "<td>" . $row['datum'] . "</td>";
                echo "<td>" . $row['verseny'] . "</td>";
                echo "<td>" . "<a href='" . $row['url'] . "'>" . $row['url'] . "</a>" . "</td>";
                echo "<td>" . $row['csapatnev'] . "</td>";
                echo "<td>" . $row['tag'] . "</td>";
                echo "<td>" . $row['ign'] . "</td>";
                echo "<td>" . "<a href='" . $row['kozvetites'] . "'>" . $row['kozvetites'] . "</a>" . "</td>";
                echo "<td>" . $row['eredmeny'] . "</td>";
                echo "<td>" . $row['bejegyzest_tette'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>