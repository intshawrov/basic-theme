
<?php get_header(); ?>

<?php while( have_posts() ): the_post(); ?>

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white"><?php the_title(); ?></span>
          <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="<?php echo home_url(); ?>" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50"><?php the_title(); ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
			<?php if( !empty( get_the_post_thumbnail())) : ?>
                  <?php the_post_thumbnail() ; ?> 

                        <?php else : ?>
                              <img src="<?php echo get_theme_file_uri();  ?>/images/blog/2.jpg" alt="" class="img-fluid rounded">


                         <?php endif; ?>     
                  
			<div class="blog-item-content bg-white p-5">
				<div class="blog-item-meta bg-gray py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i><?php the_category(', '); ?></span>
					<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i><?php comments_number(); ?></span>
					<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> <?php the_date(); ?></span>
				</div> 

				<h2 class="mt-3 mb-4"><a><?php the_title(); ?></a></h2>

				<?php the_content(); ?>

				<div class="tag-option mt-5 clearfix">
				    <?php
				   	 the_tags(); 
				    ?>



			    	</div>
			</div>
		</div>
		</div>


			<div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between">
    
				<?php if ( get_previous_post() ) : ?>
					<a class="post-prev align-items-center text-left" href="<?php echo get_permalink( get_previous_post() ); ?>">
						<div class="posts-prev-item mb-4 mb-lg-0">
						<span class="nav-posts-desc text-color">← Previous Post</span>
						<h6 class="nav-posts-title mt-1">
							<?php echo get_the_title( get_previous_post() ); ?>
						</h6>
						</div>
					</a>
				<?php endif; ?>

				<?php if ( get_next_post() ) : ?>
					<a class="post-next align-items-center text-right" href="<?php echo get_permalink( get_next_post() ); ?>">
						<div class="posts-next-item">
						<span class="nav-posts-desc text-color">Next Post →</span>
						<h6 class="nav-posts-title mt-1">
							<?php echo get_the_title( get_next_post() ); ?>
						</h6>
						</div>
					</a>
				<?php endif; ?>

</div>

	


		<div class="col-lg-12">
					
			<?php comments_template(); ?>

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