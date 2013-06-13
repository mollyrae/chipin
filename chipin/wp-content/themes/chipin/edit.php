<?php

    /*
    Template Name: Edit A Project Template
    */

    $projectID      = pods_var(-1, 'url');

    $podForm        = pods('project');

    get_header();

?>

    <div class="content clearfix">
        <div class="header">
            <h1>Edit your project</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>    

        <div class="start-project clearfix">

            <?php if(is_user_logged_in()){

                // Only show the 'name', 'description', and 'other' fields.
                $fields = array( 'name', 'timeframe', 'budget', 'image', 'description', 'region' );

                // Output a form with specific fields
                echo pods( 'project', $projectID )->form($fields);
            
            }else{ ?>

                <h1>Please Login or Register to start a project.</h1>

            <?php }; ?>

        </div>
                
<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>