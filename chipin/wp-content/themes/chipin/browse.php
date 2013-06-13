<?php

    /*
    Template Name: Browse Template
    */
    
    # Get the information on the different locations from Pods
    $locationPod    = pods('location');
    $params         = array('orderby' => 'name ASC', 'limit'=>-1);
    $locationPod    ->find($params);

    # Get the information on the different projects from Pods
    $projectPod    = pods('project');
    $projectParams = array('orderby' => 'id ASC', 'limit'=>-1);
    $projectPod    ->find($projectParams);

    //$projectParams  = array('orderby' => 'id ASC', 'limit'=>-1, 'where'=>"project.permalink = '$projPerma'");

?>

<?php get_header(); ?>

    <div class="content clearfix">

    <section class="header clearfix">
        <div class="symbol">
            <img src="<?php bloginfo('template_url') ?>/img/upload.png" alt="Upload">
        </div>
        <div class="intro">
            <h1>Browse all projects</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div> 
    </section> 

    <div class="sorting clearfix">

        <div id="dd-2" class="wrapper-dropdown" tabindex="2">
            <span id="location">Location</span>
            <ul class="dropdown location">

                <?php while($locationPod->fetch()): ?>
                        <li><a class="location" href="#" data-location="<?php echo $locationPod->field('permalink'); ?>"><?php echo $locationPod->field('name'); ?></a></li>
                   <?php endwhile; ?>

            </ul>
        </div>

    </div>
    
    <div id="featured" class="featured clearfix">

        <?php $locationPod->reset(); while($projectPod->fetch()): ?>

            <div class="project clearfix" data-location-name="<?php echo $projectPod ->field('region.permalink'); ?>">

                <a href="<?php echo get_bloginfo('url'); ?>/single/<?php echo $projectPod->display('region'); ?>/<?php echo $projectPod->field('permalink'); ?>">

                        <?php if($projectPod->display('image') == '') { ?>

                            <div class="crop" style="background: url(<?php echo bloginfo('template_url') ?>/img/backup.png) center no-repeat;background-size: auto 120%;"></div>

                        <?php } else { ?>

                            <div class="crop" style="background: url(<?php echo $projectPod->display('image') ?>) center no-repeat;background-size: auto 120%;"></div>

                        <?php }; ?>

                    <div class="desc">

                        <h2><?php echo substr($projectPod->field('name'),0,20); ?>...</h2>

                        <p>Location: <?php echo $projectPod->display('region'); ?></p>

                    </div>

                    <?php

                        $author = $projectPod ->display('author.user_login');

                        $current_user = wp_get_current_user();
                        
                        if ($author == $current_user->user_login) {

                    ?>

                       <p><a data-projid="<?php echo $projectPod ->field('id'); ?>" class="delete" href="#">Delete project</a></p>

                       <p><a class="edit" href="<?php echo get_bloginfo('url'); ?>/edit/<?php echo $projectPod ->field('id'); ?>">Edit project</a></p>

                    <?php } ?>

                </a>

            </div>

        <?php endwhile; ?>       

    </div>

<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>