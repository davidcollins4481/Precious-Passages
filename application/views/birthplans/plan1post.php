<?php
        # single answers
        $title = $_POST['title'];
        $name = $_POST['name'];
        $caregiver = $_POST['caregiver'];
        $hospital = $_POST['hosp'];
        $due = $_POST['due'];
        $support = $_POST['support'];
        $baby = $_POST['baby'];
        
        #multiple answers
        $special = array();
        $special_count = 7; # 1 .. 7
        $option_name = "special";
        
        for ($i = 1; $i < $special_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($special, $_POST[$current_option]);
            }
        }
        
        $labor = array();
        $labor_count = 19;
        $option_name = "labor";

        for ($i = 1; $i < $labor_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($labor, $_POST[$current_option]);
            }
        }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title><?php echo $title ?></title>
</head>

<body>
    
    <p>Title: <?php echo $title ?></p>
    <p>Name: <?php echo $name ?></p>
    <p>Caregiver: <?php echo $caregiver ?></p>
    <p>Hospital: <?php echo $hospital ?></p>
    <p>Due: <?php echo $due ?></p>
    <p>Support: <?php echo $support ?></p>
    <p>Baby: <?php echo $baby ?></p>
    
    <p>Please Note:</p>
    <ul>
    <?php
        foreach ($special as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
        <p>Labor:</p>
    <ul>
    <?php
        foreach ($labor as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
</body>

</html>
