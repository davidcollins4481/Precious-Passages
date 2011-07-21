            <div id="sidebar">
                <div id="logo-container">
                    <img src="/images/logo.jpg" alt="Your Logo" class="logo" />
                </div>

                <div id="menu-container">
                    <h1>Services</h1>

                    <div id="services-container">
                        <div class="submenu" dojoType="dijit.layout.AccordionContainer">
                            <div dojoType="dijit.layout.ContentPane" title="Doula">
                                <a href="#">Doula services link 1</a>
                                <a href="#">Doula services link 2</a>
                            </div>
                            <div dojoType="dijit.layout.ContentPane" title="Counseling">
                                <a href="#">Counseling link 1</a>
                                <a href="#">Counseling link 2</a>
                            </div>
                        </div>
                    </div>
                    
                    <h1>Resources</h1>
                    
                    <div id="resources-container">
                        <div class="submenu" dojoType="dijit.layout.AccordionContainer">
                            <div dojoType="dijit.layout.ContentPane" title="Nutrition">
                                <a href="#">nutrition link 1</a>
                                <a href="#">nutrition link 2</a>
                            </div>
                            <div dojoType="dijit.layout.ContentPane" title="Exercise">
                                <a href="#">exercise link 1</a>
                            </div>
                        </div>
                    </div>

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
