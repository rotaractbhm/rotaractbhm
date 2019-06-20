<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <div class="main-section-header main-section-header--centered">
          <h1 class="main-section-heading"><?php the_title(); ?></h1>
          <div class="main-section-copy"><?php the_content(); ?></div>
        </div>
      </div>
      <dl class="main-section directors">
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/henry-joe.jpg" alt="Henry Joe">
          <dt class="director-name"><h6>Henry Joe</h6></dt>
          <dd class="director-title">President</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:president@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/brass-bralley.jpg" alt="Brass Bralley">
          <dt class="director-name"><h6>Brass Bralley</h6></dt>
          <dd class="director-title">President-Elect</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:elect@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/allison-swagler-webb.jpg" alt="Allison Swagler-Webb">
          <dt class="director-name"><h6>Allison Swagler-Webb</h6></dt>
          <dd class="director-title">Executive Vice President</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:vicepresident@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/james-kemp.jpg" alt="James Kemp">
          <dt class="director-name"><h6>James Kemp</h6></dt>
          <dd class="director-title">VP Finance</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:treasurer@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/knox-richardson.jpg" alt="Knox Richardson">
          <dt class="director-name"><h6>Knox Richardson</h6></dt>
          <dd class="director-title">VP Communications</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:communications@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/brandon-williams.jpg" alt="Brandon Williams">
          <dt class="director-name"><h6>Brandon Williams</h6></dt>
          <dd class="director-title">VP Signature Service</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:signature@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/ying-lin.jpg" alt="Ying Lin">
          <dt class="director-name"><h6>Ying Lin</h6></dt>
          <dd class="director-title">VP Programs</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:programs@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/clay-mcdowell.jpg" alt="Clay McDowell">
          <dt class="director-name"><h6>Clay McDowell</h6></dt>
          <dd class="director-title">VP Social</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:social@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/caitlin-mullin.jpg" alt="Caitlin Mullin">
          <dt class="director-name"><h6>Caitlin Mullin</h6></dt>
          <dd class="director-title">VP Service</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:service@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/caitlyn-burchfield.jpg" alt="Caitlyn Burchfield">
          <dt class="director-name"><h6>Caitlyn Burchfield</h6></dt>
          <dd class="director-title">VP Development</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:development@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="director">
          <img class="director-photo" src="<?php bloginfo('template_url'); ?>/assets/images/board/giuli-williams.jpg" alt="Giuli Williams">
          <dt class="director-name"><h6>Giuli Williams</h6></dt>
          <dd class="director-title">VP Recruitment</dd>
          <ul class="director-social social-channels">
            <li class="social-channel"><a href="mailto:recruitment@rotaractbhm.org"><i class="far fa-envelope"></i></a></li>
            <li class="social-channel"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
            <li class="social-channel"><a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </dl>
      <div class="main-section">
        <div class="main-section-header main-section-header--centered">
          <h2 class="main-section-heading">Past Boards</h2>
          <!-- <p class="main-section-copy">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p> -->
        </div>
        <div class="boards">
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2018-2019</h6>
              <a class="board-links" href="<?php echo get_permalink('219'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Michael Stone</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Henry Joe</dt>
                <dd class="board-director-title">President-Elect</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Christianna Rudder</dt>
                <dd class="board-director-title">Executive Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Allison Swagler-Webb</dt>
                <dd class="board-director-title">VP Finance</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Patrick Talley</dt>
                <dd class="board-director-title">VP Communications</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Derrick Gooden</dt>
                <dd class="board-director-title">VP Signature Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">M'Kayl Lewis</dt>
                <dd class="board-director-title">VP Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Brass Bralley</dt>
                <dd class="board-director-title">VP Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Uma Srivastava</dt>
                <dd class="board-director-title">VP Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Brittney King</dt>
                <dd class="board-director-title">VP Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Christina Rossi</dt>
                <dd class="board-director-title">VP Recruitment</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2017-2018</h6>
              <a class="board-links" href="<?php echo get_permalink('218'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Martha Miller</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Cameron Shevlin</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Aaron Fons</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Drew Fravert</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Lorenzo Johnson</dt>
                <dd class="board-director-title">Signature Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Michael Stone</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Allison Sidbury</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Ashley Rhea</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Erica Murphy</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Henry Joe</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jeris Gaston</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2016-2017</h6>
              <a class="board-links" href="<?php echo get_permalink('197'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Jeris Gaston</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Mary Meadows Livingston</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Martha Miller</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Mary Elizabeth Roberson</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Brandon Glover</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Avani Patel</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Marcus Carson</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Will Hardison</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Cameron Shevlin</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Lora Terry</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2015-2016</h6>
              <a class="board-links" href="<?php echo get_permalink('196'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Lora Terry</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">George Stegall</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Taylor Bartlett</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Sarah Beth Combs</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Josh Cirulnick</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Ben Foster</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Mary Meadows Livingston</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Molly Murphy</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Addie Mancuso</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">John Smola</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2014-2015</h6>
              <a class="board-links" href="<?php echo get_permalink('195'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">John Smola</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Lora Terry</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Barbara Blackburn</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Allison Westlake</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Starr Drum</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Ben Foster</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Sara Beth Combs</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Sarah Graffeo</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Amanda Martin</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Henry Long</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2013-2014</h6>
              <a class="board-links" href="<?php echo get_permalink('194'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Henry Long</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jeremy Carter</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">George Stegall</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Lora Terry</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Robert Thuston</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jay Saxon</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Nicole Hedrick</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Amanda Martin</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Lochrane Smith</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Niki Harris</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2012-2013</h6>
              <a class="board-links" href="<?php echo get_permalink('193'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Niki Harris</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">John Smola</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Henry Long</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Christian Smith</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jeremy Carter</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Laura Montgomery</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Nicole Hendrick</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Reed Avant</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Courtney Truss</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Andrew Case</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2011-2012</h6>
              <a class="board-links" href="<?php echo get_permalink('192'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Andrew Case</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Niki Harris</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">John Smola</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Laura Lavendar</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">David Knight</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Richard Davis</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Wesley Carpenter</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Laura Montgomery</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Carly Jayne Rullman</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Justin Weintraub</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2010-2011</h6>
              <a class="board-links" href="<?php echo get_permalink('191'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Justin Weintraub</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Caroline Downing</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Niki Harris</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Julie Ward</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Kevin Garrison</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Andrew Case</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Bains Fleming</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Sherrelle Hudson</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jeris Burns</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">V.J. Graffeo</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2009-2010</h6>
              <a class="board-links" href="<?php echo get_permalink('190'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">V.J. Graffeo</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Justin Weintraub</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Kimberly Jackson</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Lindsay Gill</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Meredith Davidson</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Holly Brown</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Bains Fleming</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Caroline Downing</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jon Macklem</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Anthony Oni</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2008-2009</h6>
              <a class="board-links" href="<?php echo get_permalink('189'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Anthony Oni</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Sarah Peinhardt</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Justin Weintraub</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Hallie Bradley</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">V.J. Graffeo</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Wilson Long</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Brandon Wilson</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jon Macklem</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Caroline Williams</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">April Mason</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2007-2008</h6>
              <a class="board-links" href="<?php echo get_permalink('188'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">April Mason</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jared Brown</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Andrew Petrofsky</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jason Goggins</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Grant Lauderdale</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Sarah Peinhardt</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Anthony Oni</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Caroline Williams</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Bentley Sloan</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Ben Moncrief</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2006-2007</h6>
              <a class="board-links" href="<?php echo get_permalink('187'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Ben Moncrief</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">D.J. Hampton</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Andrew Petrofsky</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Ginny DeBardeleben</dt>
                <dd class="board-director-title">Communications / Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">April Mason</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">V.J. Graffeo</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Eve Rhea</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jared Brown</dt>
                <dd class="board-director-title">Membership Development</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Emily Duff</dt>
                <dd class="board-director-title">Membership Recruitment</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Bill Hankins</dt>
                <dd class="board-director-title">Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2005-2006</h6>
              <a class="board-links" href="<?php echo get_permalink('186'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">Bill Hankins</dt>
                <dd class="board-director-title">President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Scott Ainsworth</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Tim Johnson</dt>
                <dd class="board-director-title">Vice President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jonathan Mitchell</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Marietta Urquhart</dt>
                <dd class="board-director-title">Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Ben Moncrief</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Watson McCollister</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Katye Pinkerton</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">D.J. Hampton</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Ali Louis</dt>
                <dd class="board-director-title">Membership</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Jennifer Breland</dt>
                <dd class="board-director-title">Membership</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">John Peinhardt</dt>
                <dd class="board-director-title">Co-Chair</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Mike Mahon</dt>
                <dd class="board-director-title">Co-Chair</dd>
              </div>
            </dl>
          </div>
          <div class="board">
            <div class="board-header">
              <h6 class="board-term">2004-2005</h6>
              <a class="board-links" href="<?php echo get_permalink('185'); ?>">Year In Review&nbsp;&nbsp;<i class="far fa-long-arrow-right"></i></a>
            </div>
            <dl class="board-directors">
              <div class="board-director">
                <dt class="board-director-name">John Peinhardt</dt>
                <dd class="board-director-title">Co-President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Mike Mahon</dt>
                <dd class="board-director-title">Co-President</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Kelly O’Donnel Taylor</dt>
                <dd class="board-director-title">Treasurer</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Rachel Thompson Powell</dt>
                <dd class="board-director-title">Secretary</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Matt Menendez</dt>
                <dd class="board-director-title">Programs</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Allen Jones</dt>
                <dd class="board-director-title">Social</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Brian Boehm</dt>
                <dd class="board-director-title">Service</dd>
              </div>
              <div class="board-director">
                <dt class="board-director-name">Leslie Wood</dt>
                <dd class="board-director-title">Membership</dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
