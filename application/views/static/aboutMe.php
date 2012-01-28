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
                        <td>
                            Erika Obert, DEM
                        </td>
                        <td>
                            <img src="/images/resources/erika.jpg" alt="Erika Obert" title="Erika Obert" width="100px" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Alyssa Taylor, DEM
                        </td>
                        <td>
                            <img src="/images/resources/alyssa.jpg" alt="Alyssa Taylor" title="Alyssa Taylor" width="100px" />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>


