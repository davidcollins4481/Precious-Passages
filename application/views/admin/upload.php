<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<?php $this->load->view("admin/includes/js.php") ?>
<?php $this->load->view("admin/includes/css.php") ?>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

<div class="admin-container claro">
    <h2>Upload files</h2>

    <?php
        $class = isset($error) ? 'error' : 'success';
        echo "<span class='$class'>" . $message . "</span>";
    ?>

    <?php echo form_open_multipart('/admin/do_upload');?>
        <label for="description">Description of File</label>
        <input type="text" name="description" style="width: 300px" />
        <input type="file" name="userfile" size="20" />
        <br /><br />
        <input type="submit" value="upload" />
    </form>

    <h2>All uploaded files</h2>
    <table>
        <?php
            $files = $this->file->get_all();
            if ($files) {
                foreach ($files as $file) {
                    echo "<tr>";
                    echo "<td>" . $file->filename . " </td>";
                    echo "<td>" . $file->description . " </td>";
                    echo "<td><a href='/admin/delete_file?id=" . $file->id . "'>delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr class='no-files'>";
                echo "<td><i>No files uploaded</i></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "</tr>";
            }
        ?>
    </table>

    <p><a href="/index.php/admin">back</a></p>
</div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
