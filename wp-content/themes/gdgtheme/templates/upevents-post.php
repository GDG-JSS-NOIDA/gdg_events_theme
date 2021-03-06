
<div class="container upcoming_events_post">
 <?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
        <div class="about-head">
           <h3><b><?php the_title(); ?></b></h3>
           <span> </span>
        </div>
    </header>
    <div class="container upevent_post_field">
     <?php
             $key = 'Event Description';
             $themeta = get_post_meta($post->ID, $key, TRUE);
             if($themeta != '') {
             echo 'han hain';
              }
              ?>
        <div class="row">
         <div class="col-sm-12 col-xs-12"> 
             <div class="row custom_event_work" align="center">
                 <div class="col-lg-3 col-md-4 col-sm-6 ">
                  <span class="glyphicon glyphicon-calendar"></span>
                   <h4>Date</h4>
                   <p class="custom_event_date"><span class="c_month"></span> <span class="c_day"></span>, <span class="c_year"></span></p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                  <span class="glyphicon glyphicon-time"></span>
                   <h4>Time</h4>
                   <p class="custom_event_time"></p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                  <span class="glyphicon glyphicon-home"></span>
                   <h4>Venue</h4>
                   <p class="custom_event_venue"></p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                  <span class="glyphicon glyphicon-map-marker"></span>
                   <h4>Address</h4>
                   <p class="custom_event_address"></p>
                </div>
                <div class="col-sm-12 ">
                  <span class="glyphicon glyphicon-user"></span>
                   <h4>Speaker</h4>
                   <p class="custom_event_organisation"></p>
                </div>
             </div>
        <?php the_content(); ?>
         </div>
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <h4><b>Event Description</b></h4>
              <div class="event_post_desc"></div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="event_post_register"></div>
          </div>

           <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" >
              <h4><b>Featured</b></h4>
              <div class="event_post_eventpic" align="left"></div>
          </div>
      </div>
    </div>
</article>
<!--Blog-->

<!--Blog Ends-->
  <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>

</div>
