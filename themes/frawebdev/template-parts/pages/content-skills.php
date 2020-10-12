      <!--Skills-->
      <article class="pt-page pt-page-3" id="team">
        <div class="outer-wrapper page-bg">
          <!--Header-->
          <header class="row-fluid">
            <div class="container">
              <div class="span8 relative">
              	<div class="page-navi">
                	<a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                </div>
                <h1>Skills</h1>
                <nav class="submenu page3-submenu">
                  <ul>
                    <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">Chi sono</a></li>
                    <li class="current"><a href="#team">Skills</a></li>
                    <li class="inline"><a href="#projects" class="page-transition" onclick="gotoPageWithTrans4(3); $($works.attr('href')).offset().top">Progetti</a></li>
                    <li><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans4(4)">Contatti</a></li>
                  </ul>
                </nav>
              </div>
              <?php get_template_part('template-parts/content', 'social'); ?>
            </div>
          </header>
          <!--Content-->
          <section class="row-fluid">
            <div class="container">
              <div class="span12">
                <p>Etiam enim lacus, ornare et tempor et, rhoncus rhoncus sem. Cras in velit ante, eget pellentesque sem. Duis tincidunt erat quam. Etiam placerat sapien. Fusce sed est orci, vel condimentum felis. Phasellus et enim sed est dictum luctus a in nibh. In metus dolor, interdum eget consectetur vel, ornare sodales felis.</p>
              </div>
            </div>
            <div class="container">

            <?php $skills = new WP_Query([
                'post_type' => 'skill'
            ]); ?>

            <div class="row">

            <?php if($skills->have_posts()){
            while($skills->have_posts()){
            $skills->the_post();
            ?>
            <div class="col-md-4 col-12 my-2">
            <div class="card col-12" style="background-color: rgba(255,255,255, 0.6);">
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                </div>
            </div>
            </div>
              
            <?php
            }
            } ?>

            </div>
            </div>
          </section>
          <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
        </div>
        <!--Footer-->
      </article>