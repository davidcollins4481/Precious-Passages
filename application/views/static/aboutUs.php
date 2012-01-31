<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Meet the Midwives
                </h1>
                
                <table>
                    <tr>
                        <td class="aboutTbl">
                            <a href="/d/erikaBio.php">
                                Erika Obert, DEM <img src="/images/resources/erika3.jpg" alt="Erika Obert" title="Erika Obert" class="aboutimg" />
                            </a>
                        </td>
                        <td width="50"></td>
                        <td class="aboutTbl">
                            <a href="/d/alyssaBio.php">
                                Alyssa Taylor, DEM <img src="/images/resources/alyssa3.jpg" alt="Alyssa Taylor" title="Alyssa Taylor" class="aboutimg" />
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>


