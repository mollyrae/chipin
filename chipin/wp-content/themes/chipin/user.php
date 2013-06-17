<?php

    /*
    Template Name: User Template
    */

    require_once('connections.php');

    # Get the information on the different projects from Pods
    $user           = pods_var(-1, 'url');

    $projectPod     = pods('project');
    $projectParams  = array('orderby' => 'id ASC', 'limit'=>-1, 'where' => "author.user_nicename='$user'");
    $projectPod     ->find($projectParams);

    $numPods        = $projectPod ->total();

    $userInfo       = mysql_query("SELECT user_email, user_pass FROM ci_users WHERE user_login = '$user'") or die("unable to connect to table: ".mysql_error());
    $userRow        = mysql_fetch_assoc($userInfo);

    #$updateInfo     = mysql_query("UPDATE ci_users SET user_pass='(MD5-string-you-made)' WHERE user_login = $user")
    #-of-account-you-are-reseting-password-for)" (actually changes the password)

?>

<?php get_header(); ?>

   <section class="header clearfix">
            <div class="symbol">
                <img src="<?php bloginfo('template_url') ?>/img/profile.png" alt="Upload">
            </div>
            
            <div class="intro">
                <h1 class="username">Hi <?php echo $user; ?></h1>
                <p>This is your space, where you can view, edit and delete your projects as you wish. At the bottom of the page is your personal info where you can change your email and password.</p>
            </div>
        </section>

    <div id="featured" class="featured clearfix">
    

        <?php if(!$numPods == 0){ $projectPod->reset(); while($projectPod->fetch()) : ?>

            <div class="project clearfix" data-location-name="<?php echo $projectPod ->field('region.permalink'); ?>">

                <a href="<?php echo get_bloginfo('url'); ?>/single/<?php echo $projectPod->display('region'); ?>/<?php echo $projectPod->field('permalink'); ?>">

                        <?php if($projectPod->display('image') == '') { ?>

                            <div class="crop" style="background: url(<?php echo bloginfo('template_url') ?>/img/backup.png) center no-repeat;background-size: auto 150%;"></div>

                        <?php } else { ?>

                            <div class="crop" style="background: url(<?php echo $projectPod->display('image') ?>) center no-repeat;background-size: auto 150%;"></div>

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

    <div class="personal-info">

        <h1>Your Info</h1>
        <hr/>
        <h1 class="success"></h1>

        <form action="" class="change-info">
            <div>
                <label for="email">Email</label>
                <input type="text" class="new-email" name="email" placeholder="<?php echo $userRow['user_email']; ?>">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" class="new-password" name="password" data-currentpass="<?php echo $userRow['user_pass']; ?>" placeholder="Current Password">
            </div>
            <div class="update-button"><a data-userid="<?php echo $user; ?>" class="update-pass update-email" href="#">Update</a></div>
        </form>

    </div>

<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>