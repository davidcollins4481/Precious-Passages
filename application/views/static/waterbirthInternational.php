<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Waterbirth")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Welcome to Waterbirth International
                    <h4>
                        Taken from 
                        <a href="http://www.waterbirth.org/mc/page.do;jsessionid=3E3B8172527D5ADC385FBD07EAC8F2D8.mc0?sitePageId=38425" target="_blank">
                            www.waterbirth.org 
                        </a>.
                    </h4>
                </h1>
                <p>
                    
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

