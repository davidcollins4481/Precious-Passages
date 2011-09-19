<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <?php $this->load->view("includes/sidebar.php") ?>
            
            <div id="mainbar">
                <h2>All uploaded files</h2>
                <table>
                    <?php
                        $files = $this->file->get_all();
                        if ($files) {
                            foreach ($files as $file) {
                                echo "<tr>";
                                echo "<td><b>" . $file->filename . "</b></td>";
                                echo "<td><i>" . $file->description . "</i></td>";
                                echo "<td><a href='/p/download?download_file=" . $file->filename . "'>download</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr class='no-files'>";
                            echo "<td><i>No files available</i></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

