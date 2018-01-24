<?php
include "CMSHeader.php";
 $conn = mysqli_connect("localhost", "root", "")
                OR DIE("Could not connect with localhost!");
        mysqli_select_db($conn, "pdp")
                Or Die("Could not connect with the database!");
        
  ?>

<form name="insert_header" action="header_insert.php" method="post">
    title header:<input type="text" name="header">
    <input type="submit" value="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"])){
    if($_POST['header']){
        $headertitle= $_POST['header'];
        
         $query= "INSERT INTO form_template VALUES('NULL','$headertitle')";
         $result = mysqli_query($conn,$query);
         session_start();
         $_SESSION['Header_Title'] = $headertitle;
        header("Location:insert_column.php");
         ?>
         <a href="insert_column.php">Insert columns</a>
         
<?php
    }else{
        echo "you must fill in the title!";
    }
}
    
    
    
    
    
include  "CMSFooter.php";
    ?>
