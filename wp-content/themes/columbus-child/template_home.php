<?php
/*
Template Name: Home page
*/

get_header(); ?>

<div id="banner">
  <div class="background-video" id="module" style="background: transparent url('<?php the_field('video_image_fallback'); ?>') no-repeat center center; background-size: cover;">
    <div id="video-container">
      <!-- <video id="bg-video" autoplay loop> -->
      <video id="bg-video">
        <source type="video/webm" src="<?php the_field('mp4_video'); ?>">
        </source>
        <source type="video/mp4" src="<?php the_field('webm_video'); ?>">
        </source>
        <img alt="President Aoun at Commencement" height="100%" src="$bgImagePath" width="100%"/> </video>
    </div>
    <script src="scripts/video-settings.js" type="text/javascript"></script> 
  </div>
</div>
<!-- <div id="twitter">
  <div class="wrapper">
    <ul class="wow fadeIn" data-wow-duration="2s">
      <li>
        <p class="handle-time"><a href="http://twitter.com/presidentaoun">@PresidentAoun</a> &bull; 19h</p>
        <p>In Amsterdam, <a href="http://twitter.com/mattbilotti">@mattbilotti</a> caught up with <a href="http://twitter.com/maddyohaire">@MaddyOHaire</a>, a #Northeastern student on co-op at @VUAmsterdam. <a href="">#iheartcoop</a> <a href="http://bit.ly/1EJDqkc">http://bit.ly/1EJDqkc</a></p>
      </li>
      <li>
        <p class="handle-time"><a href="http://twitter.com/presidentaoun">@PresidentAoun</a> &bull; Mar 2</p>
        <p>Music industry student <a href="http://twitter.com/marissamullen">@marissamullen</a> makes <a href="http://instagram.com/instagram">@Instagram</a>, videos for <a href="https://instagram.com/Meghan_Trainor">@Meghan_Trainor</a> that capture life on tour <a href="http://bit.ly/17KIE2b">http://bit.ly/17KIE2b</a></p>
      </li>
      <li>
        <p class="handle-time"><a href="http://twitter.com/presidentaoun">@PresidentAoun</a> &bull; Feb 27</p>
        <p>For their undergrad research project Mariya Lupandina and Joaquin Diaz looked at urbanism and public spaces in Brazil <a href="http://bit.ly/1LDyfSZ">http://bit.ly/1LDyfSZ</a></p>
      </li>
    </ul>
  </div>
</div>
<div id="news">
  <div class="wrapper">
    <div id="headlines">
      <h4 class="wow fadeIn" data-wow-duration="2s">News</h4>
      <ul class="wow fadeIn" data-wow-duration="2s">
        <li><a href="">President Aoun cautions about federal rating system, proposes innovative metrics to measure outcomes</a></li>
        <li><a href="">President Aoun talks Northeastern University-Silicon Valley with Bloomberg</a></li>
        <li><a href="">President Aoun on Northeaster-n's rising national profile</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="innovation" class="focus-area">
  <div class="wrapper">
    <div class="story-wrap wow bounceInLeft" data-wow-duration="2s">
      <h3><a href="">Innovation in Higher Education</a></h3>
      <p>"Colleges and universities must continue innovating to meet students' needs in higher education's evolving global landscape. This is a moment of tremendous opportunity. Learners are particularly eager for experiential learning opportunities&mdash;the integration of classroom and real-world learning.<br />
        &mdash; Joseph E. Aoun</p>
    </div>
  </div>
</div>
<div id="research" class="focus-area">
  <div class="wrapper">
    <div class="story-wrap">
      <h3 class="wow bounceInUp" data-wow-duration="1.5s"><a href="">Use-Inspired Research</a></h3>
      <p class="wow bounceInUp" data-wow-duration="1.5s">President Aoun has strategically aligned the University's research enterprise with three global imperatives&mdash;health, security, and sustainability. Northeastern focuses on transforming research into commercial solutions that address the world's most pressing problems.</p>
    </div>
  </div>
</div>
<div id="globalization" class="focus-area">
  <div class="wrapper">
    <div class="story-wrap wow bounceInRight" data-wow-duration="1.5s">
      <h3><a href="">Globalization of Higher Education</a></h3>
      <p>Under President Aoun's leadership, Northeastern has made a strategic decision to expand its signature co-op program globally. Since 2006, the university has increased global co-op opportunities by 345 percent. Students have participated in experiential learning opportunities, including co-op, study abroad and research in 114 countries and on all seven continents.</p>
      <p>"Any way you can explore the world is a good way. We don't want international students to see themselves as international students, but simply as students."<br />
        &mdash; Joseph E. Aoun</p>
    </div>
  </div>
</div>
<div id="experiential" class="focus-area">
  <div id="globe-bottom"> </div>
  <div class="story-wrap">
    <div class="wrapper">
      <h3 class="wow bounceInUp" data-wow-duration="1.5s"><a href="">Experiential Learning</a></h3>
      <p class="wow bounceInUp" data-wow-duration="1.5s">"This generation of graduates will need to navigation the unknown. They will need to be nimble and responsive to change, and become leaders of change. A strong foundation in their field of study is essential, but less tangible skills will be just as important: confidence, poise, adaptability, and the ability to work collaboratively. These are the foundations of leadership."<br />
        &mdash; Joseph E. Aoun</p>
    </div>
  </div>
</div> -->
<?php get_footer(); ?>
