<?php 
include "Header.php";
?>
        <div id="Guestbook">
            <div class="Guestbook_Box">
                <form method="POST" action="Profile_Guestbook.php">
                    <p>Name <input class="Guestbook_FormFormat" type="text" name="Name" placeholder="Name"/></p>
                    <p>E-mail <input class="Guestbook_FormFormat" type="email" name="Email" placeholder="E-mail"/></p>
                    <p>Message <textarea class="Guestbook_FormFormat" name="Content" cols="20" rows="4" placeholder="Insert text here"></textarea></p>
                    <input type="submit" name="SUBMIT"/>
                </form>
                <?php
                include "dbci.php";
                                    $tempID = 0;

                if (isset($_POST["SUBMIT"])) {
                    $name = $_POST["Name"];
                    $email = $_POST["Email"];
                    $content = $_POST["Content"];
                    $insertQuery = "INSERT INTO guestbook_entry(Guestbook_ID, Name, Email, Content) VALUES($tempID, '$name', '$email', '$content')";
                    $result = mysqli_query($coni, $insertQuery);
                    if(!$result){
                        echo "insert query is niet gelukt";
                    }
                    mysqli_free_result($result);
                }
                ?>
            </div>
            <div class=Guestbook_Box">
                <?php 
                    $fetchQuery = "SELECT Name, Email, Content FROM guestbook_entry WHERE Guestbook_ID = $tempID ";
                    $result = mysqli_query($coni, $fetchQuery);
                    if(mysqli_num_rows($result) >= 1){
                    while($fetch = mysqli_fetch_assoc($result)){
                        echo "<p class='Guestbook_Entry_Text_Height'>". $fetch["Name"] . "</p><p class='Guestbook_Entry_Text_Height'>" . $fetch["Email"] . "</p><p class='Guestbook_Entry_Text_Height'>" . $fetch["Content"] . "</p>";
                    }
                    mysqli_free_result($result);
                    }
                    ?>
            </div>
        </div>
<?php
include "Footer.php";
?>