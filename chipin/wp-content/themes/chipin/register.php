<?php

    /*
    Template Name: Register Template
    */

    get_header();

?>

    <div class="content clearfix">
        <section class="header clearfix">
            <div class="symbol">
                <img src="<?php bloginfo('template_url') ?>/img/upload.png" alt="Upload">
            </div>
            
            <div class="intro">
                <h1>Sign Up to ChipIn</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div> 
        </section>

        <div class="sign-up clearfix">
        
            <form class="signup-form" action="<?php //echo get_bloginfo('url'); ?>/register" method="post">
                <p id="status"></p>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" />
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" />
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" />
                </div>
                <div>
                    <label>&nbsp;</label>
                    <input type="submit" value="Sign up" />
                </div>

                <input class="submit" name="action" type="hidden" value="newUser" />
            </form>
        
        </div>
                
 <?php

    #retrieve the footer and include it in the doc
    get_footer();

?>