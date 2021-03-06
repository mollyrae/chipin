<?php

    /*
    Template Name: Start A Project Template
    */

    $podForm        = pods('project');

    get_header();

?>

    <div class="content clearfix">
        <div class="header">
            <h1>Create a project</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>    

        <div class="start-project clearfix">

            <?php if(is_user_logged_in()){

                // Only show the 'name', 'description', and 'other' fields.
                $fields = array( 'name', 'timeframe', 'budget', 'image', 'description', 'region' );

                // Output a form with specific fields
                echo $podForm->form($fields);
            
            }else{ ?>
                <div class="oops">
                    <h4>Oops, you need to be logged in to do this!</h4>
                    <div class="oops-login">
                         
                        <div class="join-btn"><a class="toggle" href="#">Login</a></div>
                        <div class="start-btn"><a href="<?php echo get_bloginfo('url'); ?>/register">Register</a></div>
                        
                    </div><!--/oops-login-->
                </div><!--/opps-->


            <?php }; ?>

        </div>
                
<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>