      <!--Projects-->
      <article class="pt-page pt-page-4" id="works">
        <div class="outer-wrapper page-bg" id="gallery">
          <!--Header-->
          <header class="row-fluid">
            <div class="container">
              <div class="span8 relative">
              	<div class="page-navi">
                	<a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                </div>
                <h1>Progetti</h1>
                <nav class="submenu page4-submenu">
                  <ul>
                    <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">Chi sono</a></li>
                    <li><a href="#skills" class="page-transition" onclick="gotoPageWithTrans5(2)">Skills</a></li>
                    <li class="current"><a href="#projects">Progetti</a></li>
                    <li class="inline"><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans4(4)">Contatti</a></li>
                  </ul>
                </nav>
              </div>
              <?php get_template_part('template-parts/content', 'social'); ?>
            </div>
          </header>
          <!--Content-->
          <section class="row-fluid">
            <div class="container">

            <div id="filterOptions" class="portfolio-toolbar toolbar">
                <a href="#" class="category active" data-target="all">Tutto</a>
                <a href="#" class="category" data-target="WordPress">WordPress</a>
                <a href="#" class="category" data-target="Laravel">Laravel</a>
                <a href="#" class="category" data-target="PHP">PHP</a>
                <a href="#" class="category" data-target="jQuery">jQuery</a>
                <a href="#" class="category" data-target="Javascript">Javascript</a>
                <a href="#" class="category" data-target="CSS">CSS</a>
                <a href="#" class="category" data-target="SASS">SASS</a>
                <a href="#" class="category" data-target="Bootstrap">Bootstrap</a>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

              <ul class="og-grid ourHolder">

              <?php 
              
              $projects = new WP_Query([

              'post_type' => 'project'

              ]); 
              
              ?>

              <?php if($projects->have_posts()){ 
                    while($projects->have_posts()){ 
                        $projects->the_post();?>

                <li class="item-p" data-id="id-1" data-type="<?php echo get_field('data-type') ?>">
                  <a href="http://www.google.com" data-largesrc="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php the_title(); ?>" data-category="<?php echo get_field('data-category'); ?>" data-description="<?php the_content(); ?>">
                    <span class="figcap"></span>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                    <h2><?php the_title(); ?></h2>
                    <h3><?php echo get_field('data-category'); ?></h3>
                    <span class="arrow"></span>
                  </a>
                </li>

                <?php } ?>
                <?php } ?>
              </ul>
            </div>
          </section>
          <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
        </div>
      </article>