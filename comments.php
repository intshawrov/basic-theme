<?php
if ( post_password_required() ) {
	return; // Protected post – no comments.
}
?>
<div class="col-lg-12 mb-5">
		<div class="comment-area card border-0 p-5">
			<h4 class="mb-4"><?php comments_number(); ?></h4>
			            <ul class="comment-tree list-unstyled">
                                    <li class="mb-5">
                                    <?php 
                                    wp_list_comments( array(
                                          'style'     => 'ul',
                                          'short_ping' => true,     
                                    )); 
                                    ?>
                              </ul>
                        </div>
                  </div>      
                  
<div class="col-lg-12">
<?php comment_form( array(
      'class_form' => 'contact-form bg-white rounded p-5',
      'submit_button'=> '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-main btn-round-full" value="%4$s" />',
)); ?>
</div>                  
