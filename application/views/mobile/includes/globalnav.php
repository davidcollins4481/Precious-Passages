        <div id="menu">
            <div class="container">
                <div class="logo-container">
                    <img class="main-header-logo" style="width:300px;" src="/images/logo5.png" />
                </div>
            </div>
        </div>
        <br/>
        <div class="search-container">
            <form method="GET" action="/search">
                <input type="input" name="query" value="<?php if (isset($_GET["query"])) echo $_GET["query"]; ?>"/>
                <input value="Search" type="image" src="/images/mobile/search_btn.gif" />
            </form>
        </div>
