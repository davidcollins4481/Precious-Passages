<?php
    $t = isset($title) && $title ? $title : 'Precious Passage';
?>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
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
