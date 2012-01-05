<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Twins")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Twins
                </h1>
                
                <p>
                    Here are some informative websites:
                    <ul>
                        <li>
                            <a href="http://www.birthbalance.com/stories/zachamelia.shtml" target="_blank">
                                Birth Balance
                            </a>
                        </li>
                        <li>
                            <a href="http://www.homebirth.org.uk/marycronk/marytwins.htm" target="_blank">
                                A Guide for Women Expecting Twins
                            </a>
                        </li>
                        <li>
                            <a href="http://www.homebirth.org.uk/twins.htm" target="_blank">
                                Twin birth at home?
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ivillage.com/pregnancy-parenting" target="_blank">
                                iVillage.com
                            </a>
                        </li>
                        <li>
                            <a href="http://pregnancy.about.com/od/birthstories/a/twinmiracles.htm" target="_blank">
                                Twin Miracles - The Home Birth of Twins
                            </a>
                        </li>
                        <li>
                            <a href="http://www.changesurfer.com/Hlth/homebirth.html" target="_blank">
                                The Safety of Home Birth
                            </a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>


