<?php get_header(); ?>
<?php $options = get_option('newer_options'); ?>
	<div align="left"></div>
	<div id="layout"> 		
			<div id="contentbg">										
				<div id="content">
					<div class="content-header"></div>	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
						<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<div class="post-meta">
				<span class="com-writer">
					<?php the_time('Y/m/j'); ?>
				</span>
				<span class="con-cate">
					<?php the_category(', ') ?>
				</span>
                
 				<span class="con-commt">
					<?php comments_popup_link('没有评论', '1条评论', '%条评论'); ?>
				</span>
                <span class="con-edit">
                <?php edit_post_link('<span class="edit">编辑</span>');?>
                </span>
                <span class="con-time">
                <?php if(function_exists('the_views')) { the_views(); } ?>　
                </span	
			></div><!--.postMeta-->									 					
				
							<div class="post-content">
							<?php if($options['thumbnail']) : ?>
							<div class="selfthum"><?php post_thumbnail( 150,150 ); ?></div>
                    		<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 470,"……"); ?>	
							<span class="more-link"><a href="<?php the_permalink() ?>">readmore</a></span>													
					
					</div>	
					<?php else : ?>
							
							<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 370,"……"); ?>
				</div>	
			
			<?php endif; ?>
					<div class="sep"></div> 
					<div class="post-bottom"> </div>
					<?php endwhile; endif;?>			      
				</div><!--#end content-->				
				<div id="postnavigation">   
				<div class="page_navi"> <?php par_pagenavi(9); ?> </div>  
				<div class="clear"></div>  
			</div><!-- end -->
			
				<div class="clear"></div>
				<div class="contentft"></div>
				
			</div><!--#end contentbg-->		
		<?php get_sidebar(); ?>
		<div class="clear"></div>  
		<?php get_footer(); ?>
	</div><!--#end layout-->
	<div class="clear"></div>