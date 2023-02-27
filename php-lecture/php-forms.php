 <?php
    if (isset($_POST['divide'])) {
        $x = $_POST['x'];
        if (!is_numeric($x)) 
        {
            die("please enter numeric value for x");     
        }
        $y = $_POST['y'];
        if (!is_numeric($y)) 
        {
            die("please enter numeric value for y");     
        }
        if ($y==0) 
        {
            die("can not divide by zero");     
        }
        $z = $x / $y;
        echo "Result of division = $z";
    }
    ?>
