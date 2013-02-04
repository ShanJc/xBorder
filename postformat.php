   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <div class="post">
	<?php if (has_post_format( 'audio' )){ ?> <!--音频类型-->
				<div class="musicbg">
					<div class="musiccover"><img src="http://ceezi.com/img/defaultcover.png" alt="musiccover"></div>
					<div class="musicsep"></div>
					<div class="musicname"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
					<div class="singer"><?php $key="演唱者"; echo get_post_meta($post->ID, $key, true); ?></div>
					<div class="zhuanji"><?php $key="所属专辑"; echo get_post_meta($post->ID, $key, true); ?></div>
					<div class="stars"><?php $key="歌曲评分"; echo get_post_meta($post->ID, $key, true); ?></div>
					<div class="flash"><embed src="<?php $key="音乐链接"; echo get_post_meta($post->ID, $key, true); ?>" quality='high' width='362' height='35' type='application/x-shockwave-flash'  wmode='transparent' ></embed></div>
					<div class="musictimes">Played <?php if (function_exists('the_views')): ?><?php the_views(); ?><?php endif; ?> Times,</div>
					<div class="musiccom"><?php comments_popup_link('还没有乐评', '只有1条乐评', '已有%条乐评'); ?></div>
				</div>
				
				<div class="clear"></div>
				<?php } else if ( has_post_format('status')) { ?>
				<div class="status">
				<div class="statusavatar left">
				<div class="statusavatarbg"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo get_avatar( get_the_author_email(), 56 ); ?></a></div>
				<div class="statustime"><?php the_time('D,g:h A'); ?></div>
				</div>
				<div class="statusleft right">
				<div class="statustop"></div>
				<div class="statuscon"><?php the_content();?></div>
				<div class="clear"></div>
				<div class="statusfot"></div>
				</div>
				</div>
				
			<?php } else { ?> <!--默认类型-->
    <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h2>
    

    <div class="post-content">
      <?php the_content(__('readmore'));?>
    </div>
	<div class="post-meta"> <span>
      <?php the_time('m,d'); ?>
      </span>&nbsp;/&nbsp;<span>
      <?php the_category(', ') ?>
      </span>&nbsp;/&nbsp;<span>
      <?php if(function_exists('the_views')) { the_views(); } ?>&nbsp;Views
      </span>&nbsp;/&nbsp;<span>
      <?php comments_popup_link('No comment', '1 comment', '% comments'); ?>
      </span> </div>
		<?php } ?>
		</div>
    <div class="sep"></div>
    <?php endwhile; endif;?>
	