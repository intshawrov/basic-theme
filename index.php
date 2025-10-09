
<?php get_header(); ?>

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="section blog-wrap bg-gray">
    	<div class="container">
		<?php if(have_posts() ): ?>
	<div class="row">
		<?php while( have_posts() ) : the_post(); ?>
		<div class="col-lg-6 col-md-6 mb-5">
		<div class="blog-item">
			<!-- <img src="<?php echo get_theme_file_uri(); ?>/images/blog/1.jpg" alt="" class="img-fluid rounded"> -->
			 <?php 
			 if (has_post_thumbnail(  get_the_ID())){
				echo get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'img-fluid rounded'] );
			 }else{
				echo '<img src="' . get_theme_file_uri('/images/blog/1.jpg'). '" alt="" class="img-fluid rounded">';
			 }
			 ?>

			<div class="blog-item-content bg-white p-5">
				<!-- <div class="blog-item-meta bg-gray py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
				</div>  -->
				<?php the_category(); ?>

				<h3 class="mt-3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="mb-4">
				<?php 
				$content = strip_tags(get_the_content());
				echo wp_trim_words( $content, 30 , '...'); 
				?>
				
			</p>

				<a href="<?php the_permalink(); ?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
			</div>
			
		
		</div>
	  

	</div>
	<?php endwhile; ?>
</div>
			<?php the_posts_pagination(); ?>
	<!-- <div class="col-lg-6 col-md-6 mb-5">
		<div class="blog-item">
			<img src="images/blog/2.jpg" alt="" class="img-fluid rounded">

			<div class="blog-item-content bg-white p-5">
				<div class="blog-item-meta bg-gray py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Design</span>
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
				</div>   

				<h3 class="mt-3 mb-3"><a href="blog-single.html">Interactivity connect consumer</a></h3>
				<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

				<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
			</div>
		</div>
	</div> -->

	
	
</div>

     <?php endif; ?>   
    
</section>
</div>
<?php get_footer(); ?>