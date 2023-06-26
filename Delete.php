<?php
include 'common/connection.php';
include 'header.php';
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="delbtn" value="Delete" />
    </form>

    <?php

    if (isset($_POST['delbtn'])) {
        $student_id = $_POST['sid'];

        $sql = "DELETE FROM STUDENT WHERE sid = $student_id ";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful. " . mysqli_errno($conn));
    }

    ?>
</div>
</div>
</body>

</html>