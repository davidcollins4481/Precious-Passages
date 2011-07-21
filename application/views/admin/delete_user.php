<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("admin/includes/js.php") ?>
<?php $this->load->view("admin/includes/css.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>

<div class="admin-container claro">
    <h2>Delete User(s)</h2>

    <div>
        <p id="response"></p>
    </div>

    <div class="users">
        <table>
            <?php
                foreach ($users as $u) {
                    echo "<tr id='row-" . $u->id . "'>";
                    echo "<td>" . $u->username . "</td>";
                    echo "<td width='200'>";
                    echo "<form action='/index.php/admin/delete_user_post_json' method='POST' class='useritem'>";
                    echo "<input type='hidden' name='user_id' value='" . $u->id . "' />";
                    echo "<a class='remove-link' href='#'>remove</a>";
                    echo "</form>";
                    echo "</td>";
                }
            ?>
        </table>
    </div>

    <p><a href="/index.php/admin">back</a></p>
</div>

<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

