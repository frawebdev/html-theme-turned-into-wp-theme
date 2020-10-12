  <?php get_header(); ?>

  <!--Body-->
  <body>
  	<div id="pt-main" class="pt-perspective">
      
      <?php get_template_part('template-parts/pages/content', 'home') ?>
        
      <?php get_template_part('template-parts/pages/content', 'about') ?>
      
      <?php get_template_part('template-parts/pages/content', 'skills') ?>
      
      <?php get_template_part('template-parts/pages/content', 'projects') ?>
      
      <?php get_template_part('template-parts/pages/content', 'contacts') ?>
      
		</div>

        <?php get_footer(); ?>
