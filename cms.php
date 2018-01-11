<?php
include 'CMSHeader.php';
include 'dbci.php';
?>
<div class="tekst">
    <table style="width:80%">
        <tr>
            <th>Naam</th>
            <th>Achternaam</th>
            <th>Geboortedatum</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Biography</th>
            <th>Acces level</th>
        </tr>
        <tr>
            <td><?php
                $mysqli = "SELECT FirstName FROM user";
                $result = $coni->query($mysqli);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["FirstName"] . "<br>";
                    }
                }
                ?>
            </td>
            <td> <?php
                $mysqli = "SELECT LastName FROM user";
                $result = $coni->query($mysqli);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["LastName"] . "<br>";
                    }
                }
                ?>
            </td>
            <td><?php
                $mysqli = "SELECT Date_of_Birth FROM user";
                $result = $coni->query($mysqli);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["Date_of_Birth"] . "<br>";
                    }
                }
                ?>
            </td>
            <td><?php
                $mysqli = "SELECT Email FROM user";
                $result = $coni->query($mysqli);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["Email"] . "<br>";
                    }
                }
                ?>
            </td>
            <td><?php
                $mysqli = "SELECT Password FROM user";
                $result = $coni->query($mysqli);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["Password"] . "<br>";
                    }
                }
                ?>
            </td>   
            <td><?php
                $mysqli = "SELECT Bio FROM user";
                $result = $coni->query($mysqli);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["Bio"] . "<br>";
                    }
                }
                ?>
            </td>
            <td><?php
                $mysqli = "SELECT User_level_ID FROM user";
                $result = $coni->query($mysqli);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["User_level_ID"] . "<br>";
                    }
                }
                $coni->Close();
                ?>
            </td>     
        </tr>
    </table> 

</div>
</div>
<?php
include 'CMSFooter.php';
?>
