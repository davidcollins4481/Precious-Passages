<?php
    $t = isset($title) && $title ? $title : 'Precious Passage';
    $default_keywords = "Erika Obert, Doula, labor support, Midwife, midwifery, pregnancy, childbirth, Ohio, Akron, pregnant, labor, support, homebirth";
    $keywords = isset($meta_keywords) && $meta_keywords ? $meta_keywords : $default_keywords;
?>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="<?php echo $keywords ?>">
    <title><?php echo $t ?></title>
        <?php $this->load->view("includes/css.php") ?>
        <?php $this->load->view("includes/js.php") ?>

        <?php
            $session = $this->session;
            
            if ($session->userdata('logged_in')) {
                
                echo '<script type="text/javascript">';
                
                $user = array(
                    'username' => $session->userdata('username')
                );
                
                echo "var user = " . json_encode($user);
                
                echo '</script>';
            }
        ?>
