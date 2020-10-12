      <!--Contact Us Screen-->
      <article class="pt-page pt-page-5" id="contacts">
        <div class="outer-wrapper page-bg">
          <!--Header-->
          <header class="row-fluid">
            <div class="container">
              <div class="span8 relative">
              	<div class="page-navi">
                	<a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                </div>
                <h1>Contatti</h1>
                <nav class="submenu page5-submenu">
                  <ul>
                    <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">Chi sono</a></li>
                    <li><a href="#skills" class="page-transition" onclick="gotoPageWithTrans5(2)">Skills</a></li>
                    <li><a href="#projects" class="page-transition" onclick="gotoPageWithTrans5(3)">Progetti</a></li>
                    <li class="current"><a href="#contacts">Contatti</a></li>
                  </ul>
                </nav>
              </div>
              <?php get_template_part('template-parts/content', 'social'); ?>
            </div>
          </header>
          <!--Content-->
          <section class="row-fluid">
            <div class="container">
              <div class="span6 addspace">
                <h2>Phone</h2>
                <p>Support: +777 (100) 1234 (10am - 6pm)</p>
              </div>
              <div class="span6 addspace">
                <h2>Email</h2>
                <p>Support: <a href="mailto:support@example.com" title="mailto:support@example.com">support@example.com</a></p>
              </div>
            </div>
          </section>
          <section class="row-fluid">
            <div class="container clearfix">
              <form method="post" name="feedback-form" id="feedback-form" class="addspace clearfix">
                <fieldset class="span6">
                  <span id="sprytextfield1">
                    <input type="text" name="name" id="name">
                  </span>
                  <span id="sprytextfield2">
                    <input type="text" name="email" id="email">
                  </span>
                </fieldset>
                <fieldset class="span6">
                  <span id="sprytextarea1">
                    <textarea name="message" id="message" cols="45" rows="5"></textarea>
                  </span>
                </fieldset>
                <input name="submit" type="submit" class="submit" id="submit" value="Submit">
                <div id="success"></div>
              </form>
            </div>
          </section>
          <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
        </div>
      </article>