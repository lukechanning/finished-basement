<?php
/*
Template Name: Agent Wall
*/

// Get all users order by amount of posts
$allUsers = get_users('orderby=post_count&order=DESC');

$users = array();

// Remove subscribers from the list as they won't write any articles
foreach($allUsers as $currentUser)
{
	if(!in_array( 'subscriber', $currentUser->roles ))
	{
		$users[] = $currentUser;
	}
}

?>

<?php get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
	<?php

		foreach($users as $user)
		{
			?>

			    <div class="large-6 small-12 author columns">
			        <?php //Begin author card ?>
                    <div class="author-card row">
                        
        			    <div class="author-top large-12 columns">
        			        <div class="row">
        			            <div class="large-6 columns">
                    				<div class="author-photo">
                                        <?php
                                            if ( userphoto_exists($user) ) :
                                               userphoto($user -> ID);
                                            else:
                                                echo get_avatar( $user->user_email, '128' );
                                            endif;
                                        ?>
                    				</div>
                    			</div>
                				
                				<div class="large-6 columns">
                    				<div class="author-info">
                    					<h2 class="author-name"><?php echo $user->display_name; ?></h2>
                    					<span class="email"><i class="fa fa-envelope"></i> <?php echo $user->email; ?></span><br>
                    					<span class="phone"><i class="fa fa-phone"></i> <?php echo $user->phone; ?></span><br>
                    					<span class="cell"><i class="fa fa-mobile"></i> <?php echo $user->cell; ?></span><br>
                    				</div>
                    			</div>
        			        </div>
        			    </div>
            			
            			<div class="large-12 columns">
                            <div class="author-social row">
                                <div class="large-4 columns">
                                    <a href="http://facebook.com/<?php echo $user->facebook ?>"><span class="facebook"><i class="fa fa-facebook"></i><?php echo $user->facebook; ?></span></a>
                                </div>
                                <div class="large-4 columns">
                                    <a href="http://twitter.com/<?php echo $user->twitter ?>"><span class="twitter"><i class="fa fa-twitter"></i> <?php echo $user->twitter; ?></span></a>
                                </div>
                                <div class="large-4 columns">
                                    <a href="http://linkedin/<?php echo $user->linkedin ?>" ><span class="linkedin"><i class="fa fa-linkedin"></i> <?php echo $user->linkedin; ?></span></a>
                                </div>
                            </div>
            			</div>
            			
    			    </div>
    			    <?php //End author card ?>
			    </div>
			
			<?php
		}
	?>
	
	</div>
</div>

<?php get_footer(); ?>

