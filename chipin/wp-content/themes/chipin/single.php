<?php

    /*
    Template Name: Single Template
    */

    $projPerma      = pods_var(-1, 'url');
    $projectPod     = pods('project', $projPerma);

    get_header();

?>

    <div class="content clearfix">

        <section class="single clearfix">
            
            <article class="top clearfix">

                <?php if($projectPod->display('image') == '') { ?>

                    <img src="<?php echo bloginfo('template_url'); ?>/img/backup.png" alt="Backup" />

                <?php } else { ?>

                    <img src="<?php echo $projectPod->display('image'); ?>" alt="<?php echo $projectPod->field('name'); ?>" />

                <?php }; ?>

                <aside class="details">

                    <ul>
                        <li>Name : <span><?php echo $projectPod->field('name'); ?></span></li>
                        <li>Timeline : <span><?php echo $projectPod->field('timeframe'); ?></span></li>
                        <li>Budget : <span>$<?php echo $projectPod->field('budget'); ?></span></li>
                        <br/>
                        <br/>

                        <?php if(is_user_logged_in()){ ?>

                            <li>Username : <span><?php echo $projectPod->field('author.user_login'); ?></span></li>
                            <li>Email : <span><?php echo $projectPod->field('author.user_email'); ?></span></li>
                    
                        <?php }else{ ?>

                            <li>Please login to view contact information.</li>

                        <?php }; ?>
                    </ul>

                </aside><!-- aside -->

            </article><!-- top -->
            
            <article class="bottom clearfix">

                <aside class="region">
                        
                    <img src="<?php echo bloginfo('template_url'); ?>/img/map/<?php echo $projectPod ->field('region.permalink'); ?>.png" alt="<?php echo $projectPod ->field('region.permalink'); ?>" />
                    <div class="region-title">
                        <h2><?php echo $projectPod ->display('region'); ?></h2>
                    </div>
                </aside><!-- region -->

                <aside class="description">
                    <p><?php echo $projectPod->field('description'); ?></p>
                </aside><!-- description -->

            </article><!-- bottom -->

        </section><!-- single -->

<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>