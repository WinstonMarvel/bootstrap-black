<?php
/**
 *This is for custom homepage
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header("nosidebar"); ?>

	<div class="container">

			

		<div class="row ">
			
			<div class="col-xs-12 col-sm-4">
			<a href="http://www.johngiftah.com/blog">
				<div class="polaroid">
				<img class="img-responsive center-block" src="http://www.johngiftah.com/webicons/blog.jpg"></img>
				<h1 class="front-page-polaroid-text"><i class="fa fa-chevron-right"></i>Blog</h1>
				<p class="fp-polaroid-description">
        		Tiny little devotions</p>
        		</div>
        	</a>
			</div>

			<div class="col-xs-12 col-sm-4">
			<a href="http://www.johngiftah.com/events">
			<div class="polaroid">
				<img class="img-responsive center-block" src="http://www.johngiftah.com/webicons/aboutus.jpg"></img>
				<h1 class="front-page-polaroid-text"><i class="fa fa-chevron-right"></i>Events</h1>
				<p class="fp-polaroid-description">Meet us soon</p>

			</div>
			</a>
			</div>

			<div class="col-xs-12 col-sm-4">
			<a href="http://www.johngiftah.com/about/who-are-we">
			<div class="polaroid">
				<img class="img-responsive center-block" src="http://www.johngiftah.com/webicons/events.jpg"></img>
				<h1 class="front-page-polaroid-text"><i class="fa fa-chevron-right"></i>About Us</h1>
				<p class="fp-polaroid-description">
          		Get to know us more</p>
			</div>
			</a>
			</div>
		
		</div>	

		<div class="row youtube-front-wrapper polaroid">
			<div class="col-md-4 col-md-down-hidden">
			<h1>Tuning Yourself to Hear God's Voice</h1>
			<p>Many times we can fall into the trap of putting GOD in a 'prayer time ' box. We can think GOD will speak to us only within our 'spiritual' boxes.
Tune in to this important teaching on how to tune yourself to hear His voice in all your ways in order to see Him direct your steps and to crown your efforts with success.
</p> <?php echo get_scp_widget(); ?>

			</div>
		
			<div class="col-sm-12 col-md-8 youtube-front-wrapper">
			<div class="embed-responsive embed-responsive-16by9">
  			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iECS3V-nrXo"></iframe>
			</div>
			</div>
			</div>


		<div class="row testimony-wrapper dropshadow">
			<h1 class="col-md-12">
			"...after listening that night, I asked God to confirm a Word to me by bringing down a shower of rain..."
			</h1>
			<a class="col-md-3 col-md-offset-8 col-xs-8 col-xs-offset-2 testimony-read-more" href="http://www.johngiftah.com/testimonies">Continue Reading</a>
		</div>






		<a href="http://www.johngiftah.com/get-saved">
		<div class="polaroid threesteps-wrapper">
				<div class="row">
					<h1 id="getsaved" >3 Steps to A New Beginning</h1>
				</div>

				<div class="row " style="padding-left: 1em;padding-right:1em">
				
			<div class="col-sm-4">
					<img class="img-responsive center-block front-page-icons" src="http://www.johngiftah.com/webicons/invite(black).png"></img>
					<h1 class="front-page-icon-text">Invite</h1>
					<p class="fp-icon-description">Invite JESUS into your life! It's as simple as you invite your friend to your home!</p>
				</div>


				<div class="col-sm-4">
					<img class="img-responsive center-block front-page-icons" src="http://www.johngiftah.com/webicons/invest(black).png"></img>
					<h1 class="front-page-icon-text">Invest</h1>
					<p class="fp-icon-description">Invest in habits that will develop your relationship with Him. Read your Bible and pray Everyday!</p>
				</div>

				<div class="col-sm-4">
					<img class="img-responsive center-block front-page-icons" src="http://www.johngiftah.com/webicons/inculcate(black).png"></img>
					<h1 class="front-page-icon-text">Inculcate</h1>
					<p class="fp-icon-description">Inculcate whatever you learn into your life. Be a doer of the Word!</p>
				</div>
		
		
			</div>
				
		</div>
		</a>
	</div>


<?php get_footer(); ?>