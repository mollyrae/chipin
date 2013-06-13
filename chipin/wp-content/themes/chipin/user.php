<?php

    /*
    Template Name: User Template
    */

    $projPerma      = pods_var(-1, 'url');
    $projPod        = pods('project', $projPerma);

    get_header();

?>

    <div class="content clearfix">
        <div class="center-text"><h1>Projects in Your area</h1></div>

           <div class="featured clearfix">
                <div class="project">

                    <img src="img/project.jpg" alt="project">

                    <div class="desc">

                        <h2>Clean Up The Beach</h2>

                        <p>Aenean diam arcu, pretium ut ullamcorper eu, imperdiet a augue.</p>

                        <p>Location: Auckland</p>

                    </div>

                </div>

                <div class="project">

                    <img src="img/project.jpg" alt="project">

                    <div class="desc">

                        <h2>Clean Up The Beach</h2>

                        <p>Aenean diam arcu, pretium ut ullamcorper eu, imperdiet a augue.</p>

                        <p>Location: Auckland</p>

                    </div>

                </div>

                <div class="project">

                    <img src="img/project.jpg" alt="project">

                    <div class="desc">

                        <h2>Clean Up The Beach</h2>

                        <p>Aenean diam arcu, pretium ut ullamcorper eu, imperdiet a augue.</p>

                        <p>Location: Auckland</p>

                    </div>

                </div>

                <div class="project">

                    <img src="img/project.jpg" alt="project">

                    <div class="desc">

                        <h2>Clean Up The Beach</h2>

                        <p>Aenean diam arcu, pretium ut ullamcorper eu, imperdiet a augue.</p>

                        <p>Location: Auckland</p>

                    </div>

                </div>
            </div>    

     <div class="newRow">       
        <div class="user-btns">
        
            <div class="start-btn">
                <a href="#newproject.html">Start a Project</a>
            </div>
            <div class="join-btn">
                <a href="#Browse.html">Join a Project</a>
            </div>

        </div>
    </div>

<?php

    #retrieve the footer and include it in the doc
    get_footer();

?>