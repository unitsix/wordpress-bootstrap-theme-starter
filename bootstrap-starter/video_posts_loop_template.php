<!-- Post Wrap Start-->
<div class="post hentry ivycat-post col-xs-12 col-md-6">
	
	

	<!-- 	This outputs the post.  To display experpt content including images and html, 
		replace the_excerpt(); with the_content();  below. -->
	<div class="entry-summary entry-summary-video">
		<?php the_content(); ?>
	</div>
    <!-- 	This outputs the post TITLE -->
	<p class="video-header entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

</div>
<!-- // Post Wrap End -->