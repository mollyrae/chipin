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

    # Get the information on the different categories from Pods
    $categoryPod = pods('category');
    $categoryparams = array('orderby' => 'name ASC', 'limit'=>-1);
    $categoryPod ->find($categoryparams);

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
            <p>Check out all the projects you could chip in on, or use our smart filter system to find specific projects.</p>
        </div> 
    </section> 

    <div class="sorting clearfix">

         <div id="dd" class="wrapper-dropdown" tabindex="2">
            <span id="category">Category</span>
            <ul class="dropdown category">
                
                <?php while($categoryPod->fetch()): ?>
                    <li><a class="category" href="#" data-category="<?php echo $categoryPod->field('permalink'); ?>"><?php echo $categoryPod->field('name'); ?></a></li>
                <?php endwhile; ?>
            
            </ul>
        </div>

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

            <div class="project clearfix" data-location-name="<?php echo $projectPod ->field('region.permalink'); ?>" data-category-name="<?php echo $projectPod ->field('category.permalink'); ?>">

                <a href="<?php echo get_bloginfo('url'); ?>/single/<?php echo $projectPod->display('region'); ?>/<?php echo $projectPod->field('permalink'); ?>">

                        <?php if($projectPod->display('image') == '') { ?>

                            <div class="crop" style="background: url(<?php echo bloginfo('template_url') ?>/img/backup.png) center no-repeat;background-size: auto 150%;"></div>

                        <?php } else { ?>

                            <div class="crop" style="background: url(<?php echo $projectPod->display('image') ?>) center no-repeat;background-size: auto 150%;"></div>

                        <?php }; ?>

                    <div class="desc">

                        <h2><?php echo substr($projectPod->field('name'),0,20); ?>...</h2>

                        <p>Location: <?php echo $projectPod->display('region'); ?></p>

                        <p>Category: <?php echo $projectPod->display('category'); ?></p>

                    </div>

                </a>

            </div>

        <?php endwhile; ?>       

    </div>

<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>