<?php

    #retrieve the header and include it in the doc
    get_header();

?>

    <div class="home-header">

        <img src="<?php bloginfo('template_url') ?>/img/logo-reverse.png" alt="logo-reverse">

        <div class="mission"><h6>The online user driven project community.</h6></div>

    </div>

    <div class="home-content clearfix">

    <div class="action-btns">

        <?php if(is_user_logged_in()){ ?>

            <div class="start-btn">
                <a href="<?php echo get_bloginfo('url'); ?>/start">Start a Project</a>
            </div>

        <?php }else{ ?>

            <div class="start-btn">
                <a href="<?php echo get_bloginfo('url'); ?>/register">Start a Project</a>
            </div>

        <?php }; ?>
    
        <div class="join-btn">
            <a href="<?php echo get_bloginfo('url'); ?>/browse">Join a Project</a>
        </div>

    </div>
    
    <div class="about clearfix">

        <h1>How Chip In Works</h1>
        <hr />
        <p class="blurb">Chipin is a NZ community where users can post and contribute to projects going on in their communities.</p>

        <div class="steps">
            <img src="<?php bloginfo('template_url') ?>/img/upload.png" alt="Upload">
            <h2>Upload</h2>
            <p>Upload the project or projects that you need help with to Chip In's project database.</p>
        </div>

        <div class="steps">
            <img src="<?php bloginfo('template_url') ?>/img/meetup.png" alt="meetup">
            <h2>Meetup</h2>
            <p>Get in contact and meetup with people from Chip In who have the skills you need to complete your project.</p>
        </div>

        <div class="steps">
            <img src="<?php bloginfo('template_url') ?>/img/complete.png" alt="complete">
            <h2>Complete</h2>
            <p>Complete your project and then Chip In on other peoples projects if you can.</p>
        </div>


    </div>

<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>