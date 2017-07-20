
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>


<!-- CODE FOR viewing something just one specific page -->
			<h5>
				<?php if(is_page('featured-projects')) {?>
				 - Thanks for viewing featured projects
				<?php }?>
			</h5>


<!-- SEARCH BAR -->
			<div class="hd-search">
				<?php get_search_form();?>
			</div><!-- END OF .hd-search -->



<!-- POTENTIAL LOOP TO ADD CONTENT WITH CATEGORY TO SPECIFIC PAGE -->
<?php 

	//category posts loop begins here
	//returns opbject containing posts from given category
	//then temporarily save that object to access it within out loop
	$landingPosts = new WP_Query('cat=4&orderby=title&order=ASC');

	//running have_posts method on our object
	if ($landingPosts->have_posts()) :
		while ($landingPosts->have_posts()) : $landingPosts->the_post();
			//content
		?>
		
		<!-- every post's title -->
		<!-- <h2><?php #the_title(); ?></h2> -->
		<?php endwhile;

		else :

	endif;
?>


<!-- SKELETON FOR home page grid -->

			<div class="row noMargin">
	<div class="col-lg-6 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/ZGAx4K5.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin">The New York Times Magazine</h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/r0qHfve.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin">American Illustration 34</h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/R2pinD6.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/ITE7v2U.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/vxisDfa.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/9cAPkbH.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/AQlfuom.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/7DZ3VZQ.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/wbkCRUD.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/ibEdol7.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/rTtdT9V.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/obUmeai.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/sbPAwlO.jpg"></a>
		<div class="projectTitleHoverContainer">
			<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
		</div>
	</div>
	
	<div class="col-lg-3 noPadding projectThumbnails featuredProjectThumbnailContainer">
		<a href=""><img class="featuredProjectThumbnail" src="http://i.imgur.com/QUpr1AZ.jpg"></a>
	<div class="projectTitleHoverContainer">
		<a href="<?php the_permalink();?>"><h2 class="noMargin"><?php the_title(); ?></h2></a>
	</div>
	</div>
</div>