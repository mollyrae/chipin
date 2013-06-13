<?php

    /*
    Template Name: User Template
    */


    # Get the information on the different projects from Pods
    $user           = pods_var(-1, 'url');

    $projectPod     = pods('project');
    $projectParams  = array('orderby' => 'id ASC', 'limit'=>-1, 'where' => "author.user_nicename='$user'");
    $projectPod     ->find($projectParams);

    $numPods        = $projectPod ->total();
    // echo $numPods;

?>

<?php get_header(); ?>

   <section class="header clearfix">
            <div class="symbol">
                <img src="<?php bloginfo('template_url') ?>/img/upload.png" alt="Upload">
            </div>
            
            <div class="intro">
                <h1 class="username">Hi <?php echo $user; ?></h1>
            </div>
        </section>

    <div id="featured" class="featured clearfix">
    

        <?php if(!$numPods === 0){ $projectPod->reset(); while($projectPod->fetch()) : ?>

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

                </a>

                <div class="edit-btn">
                    <a class="edit" href="<?php echo get_bloginfo('url'); ?>/edit/<?php echo $projectPod ->field('id'); ?>">Edit</a>
                </div>

                <div class="delete-btn">
                    <a data-projid="<?php echo $projectPod ->field('id'); ?>" class="delete" href="#">Delete</a>
                </div>

            </div>

        <?php endwhile; }else{ ?>   
            <h1>Sorry you have started no projects</h1>

        <?php }; ?>    

    </div>

<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>