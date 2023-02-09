<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
function selectQuery($conn) {
    $sql = "Select * from users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        // Going to fetch from the result into the row array
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['id'] . "<br>";
        }
    }
}
?>

</body>
</html>