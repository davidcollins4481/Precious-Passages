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
        
        $induction = array();
        $induction_count = 7;
        $option_name = "induction";

        for ($i = 1; $i < $induction_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($induction, $_POST[$current_option]);
            }
        }
        
        $anes = array();
        $anes_count = 10;
        $option_name = "anes";

        for ($i = 1; $i < $anes_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($anes, $_POST[$current_option]);
            }
        }
        
        $cesarean = array();
        $cesarean_count = 14;
        $option_name = "cesarean";

        for ($i = 1; $i < $cesarean_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($cesarean, $_POST[$current_option]);
            }
        }
        
        $peri = array();
        $peri_count = 7;
        $option_name = "peri";

        for ($i = 1; $i < $peri_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($peri, $_POST[$current_option]);
            }
        }
        
        $delivery = array();
        $delivery_count = 13;
        $option_name = "delivery";

        for ($i = 1; $i < $delivery_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($delivery, $_POST[$current_option]);
            }
        }
        
        $after = array();
        $after_count = 11;
        $option_name = "after";

        for ($i = 1; $i < $after_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($after, $_POST[$current_option]);
            }
        }
        
        $newborn = array();
        $newborn_count = 13;
        $option_name = "newborn";

        for ($i = 1; $i < $newborn_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($newborn, $_POST[$current_option]);
            }
        }
        
        $post = array();
        $post_count = 12;
        $option_name = "post";

        for ($i = 1; $i < $post_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($post, $_POST[$current_option]);
            }
        }
        
        $bfing = array();
        $bfing_count = 7;
        $option_name = "bfing";

        for ($i = 1; $i < $bfing_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($bfing, $_POST[$current_option]);
            }
        }

        $other = array();
        $other_count = 13;
        $option_name = "other";

        for ($i = 1; $i < $other_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($other, $_POST[$current_option]);
            }
        }

        $circ = array();
        $circ_count = 13;
        $option_name = "circ";

        for ($i = 1; $i < $circ_count; $i++) {
            $current_option = $option_name . $i;
            if ($_POST[$current_option]) {
                array_push($circ, $_POST[$current_option]);
            }
        }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title><?php echo $title ?></title>
</head>

<body>
    <div style="width: 700px;">
        <p class="MsoNormal" style="border: medium none; padding: 0in"><span style="font-family: Arial">DATE</span></p>
        <p class="MsoNormal" style="border: medium none; padding: 0in"><span style="font-family: Arial">Dear _________________________ ,</span></p>
        <p>
            <span style="font-family: Arial">We are looking forward to sharing our birth experience with you. 
            We have created this birth plan in order to outline some of our preferences for birth. We
            would appreciate you reviewing this plan, and would be happy to do so with you. We understand 
            that there may be situations in which our choices may not be possible, but we hope that you will 
            help us to move toward our goals as much as possible and to make this labor and birth a great
            experience. We do not want to replace the medical personnel, but instead want to be informed of 
            any procedures in advance, and to be allowed the chance to give informed consent. Please feel free 
            to ask if you have any questions or comments. Thank you!</span>
        </p>
    </div>
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
    
    <p>Induction:</p>
    <ul>
    <?php
        foreach ($induction as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>Anesthesia/Pain Medication:</p>
    <ul>
    <?php
        foreach ($anes as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>

    <p>Cesarean Section Delivery:</p>
    <ul>
    <?php
        foreach ($cesarean as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>Perineal Care:</p>
    <ul>
    <?php
        foreach ($peri as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>Delivery:</p>
    <ul>
    <?php
        foreach ($delivery as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>After birth:</p>
    <ul>
    <?php
        foreach ($after as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
        
    <p>Newborn Care:</p>
    <ul>
    <?php
        foreach ($newborn as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>Postpartum Care:</p>
    <ul>
    <?php
        foreach ($post as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>Breastfeeding:</p>
    <ul>
    <?php
        foreach ($bfing as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>Other:</p>
    <ul>
    <?php
        foreach ($other as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
    
    <p>Circumcision:</p>
    <ul>
    <?php
        foreach ($circ as $value) {
            echo "<li>" . $value . "</li>";
        }
    ?>
    </ul>
</body>

</html>
