<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>To:</label>
        <input type="text" name="t" required /><br>
        <label>Subject:</label>
        <input type="text" name="s" required /><br>
        <label>Message:</label>
        <textarea name="m" cols="40" rows="10" required></textarea><br><br>
        <input type="submit" name="send" value="send" />
    </form>

    <?php
    if (isset($_POST['send'])) {
        $t = $_POST['t'];
        $s = $_POST['s'];
        $m = $_POST['m'];
        mail($t, $s, $m);
        echo "Email sent";
    }
    ?>
</body>

</html>