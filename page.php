
<?php get_header(); ?>

<?php while( have_posts() ): the_post(); ?>

<div class="main-wrapper ">




<section class="section blog-wrap bg-gray">
    	<div class="container">
        	<div class="row">
           		 <div class="col-lg-12">
                		<div class="row">
					<div class="col-lg-12 mb-5">
						<div class="single-blog-item">
       
                  
							<div class="blog-item-content bg-white p-5">
				

								<h2 class="mt-3 mb-4"><a><?php the_title(); ?></a></h2>

								<?php the_content(); ?>

								<div class="tag-option mt-5 clearfix">
			    
							</div>
						</div>
					</div>


							<div class="col-lg-12 mb-5">
								
							</div>

							<div class="col-lg-12">
				
							</div>
				</div>
           		</div>
				<div class="col-lg-4">
					
					<div class="sidebar-wrap">
		
						<?php dynamic_sidebar('main-sidebar'); ?>
					</div>
           			 </div>   
      	</div>
    	</div>
</section>


	<?php endwhile; ?>
   
</div>


<?php get_footer(); ?>