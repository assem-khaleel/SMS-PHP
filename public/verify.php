<?php include "../includes/header.php"; ?>


<?php

    if(isset($_POST['submit'])){

        if(isset($_POST['code'])){
            $code = $_SESSION['code'];
            $result = $con->query("SELECT * FROM verifications WHERE code='{$code}'");
            $row = $result->fetch_assoc();
//            print_r($row);
            if(trim($_POST['code']) == $row['code']){
                $dbcode = $row['code'];
                $con->query("DELETE FROM verifications WHERE code='{$dbcode}'");
                header("Location: success.php");
            }else{
                echo "<div>";
                echo "<h3>Wrong code</h3>";
                echo "</div>";
            }
        }
    }

?>






<form method="post">
    <div class="form-group">
        <input type="text" name="code" class="form-control" id="code" placeholder="Enter Code">
    </div>
    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Verify">
</form>


<?php include "../includes/footer.php"; ?>
