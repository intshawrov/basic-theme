<?php global $redux_opt; ?>

</div>
<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<?php dynamic_sidebar('footer-one'); ?>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<?php dynamic_sidebar('footer-two'); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<?php dynamic_sidebar('footer-three'); ?>
				</div>
			</div>

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<?php dynamic_sidebar('footer-four'); ?>
				</div>
			</div>
		</div>
		
		<div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
						<?php
						if( isset($redux_opt['copyright']) && !empty($redux_opt['copyright'])) {
							echo $redux_opt['copyright'];
						}
						?>
						
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12">
					<?php 
					if( isset($redux_opt['rightcopy']) && !empty($redux_opt['rightcopy'])) {
						echo $redux_opt['rightcopy'];
					}
					?>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
					<ul class="list-inline footer-socials">


					<li class="list-inline-item">
						<?php if( isset($redux_opt['github_link']) && !empty($redux_opt['github_link'])) :  ?>    
						<a href="<?php echo esc_url($redux_opt['github_link']); ?>" target="_blank">
							<i class="ti-github mr-2"></i>Github
						</a>
						<?php endif; ?>
					</li>



					<li class="list-inline-item">
						<?php if( isset($redux_opt['twitter_link']) && !empty($redux_opt['twitter_link'])) :  ?>    
							<a href="<?php echo esc_url($redux_opt['twitter_link']); ?>" target="_blank">
								<i class="ti-twitter mr-2"></i>Twitter
							</a>
						<?php endif; ?>
					</li>

							
					<li class="list-inline-item">
						<?php if( isset($redux_opt['linkedin_link']) && !empty($redux_opt['linkedin_link'])) :  ?>    
						<a href="<?php echo esc_url($redux_opt['linkedin_link']); ?>" target="_blank">
							<i class="ti-linkedin mr-2"></i>LinkedIn
						</a>
						<?php endif; ?>
					</li>

					</ul>
				</div>
			</div>
			<?php echo get_theme_file_uri(); ?>
		</div>
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/jquery/jquery.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/bootstrap/js/popper.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="<?php echo get_theme_file_uri(); ?>/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="<?php echo get_theme_file_uri(); ?>/js/script.js"></script>

    <?php wp_footer(); ?>
  </body> 
  </html>
   