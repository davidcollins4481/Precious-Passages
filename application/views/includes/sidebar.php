            <div id="sidebar">
                <div id="logo-container">
                    <img src="/images/resources/logo.jpg" alt="Your Logo" class="logo" style="width: 175px" />
                </div>


                <div id="menu-container">
                    <div id="navigation-container" dojoType="pp.sidebar.navigation"></div>

                    <div id="user-container">
                        <?php 
                            $session = $this->session;
                            $session->userdata('logged_in') ? 
                            $this->load->view('includes/user.php')
                            :
                            $this->load->view('includes/login.php') 
                        ?>
                    </div>
                </div>
            </div>
