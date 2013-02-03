<?php get_header(); ?>
<?php $options = get_option('Newer_options'); ?>
	<article>        
				
			<div id="content">
			 <div class="bigfa-content">					
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>													
				      <div class="breadcrumbsclear"><div class="breadcrumbs"><a href="<?php bloginfo('url'); ?>">Home&nbsp;</a> &gt; Categories &gt; <?php the_category(' &gt; '); ?> &gt; <?php the_title(); ?></div></div>				
				      <?php if (has_post_format( 'audio' )){ ?> <!--音频类型-->
				<div class="musicbg">
					<div class="musiccover"><img src="http://ceezi.com/img/defaultcover.png"></div>
					<div class="musicsep"></div>
					<div class="musicname"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
					<div class="singer"><?php $key="演唱者"; echo get_post_meta($post->ID, $key, true); ?></div>
					<div class="zhuanji"><?php $key="所属专辑"; echo get_post_meta($post->ID, $key, true); ?></div>
					<div class="stars"><?php $key="歌曲评分"; echo get_post_meta($post->ID, $key, true); ?></div>
					<div class="flash"><embed src="<?php $key="音乐链接"; echo get_post_meta($post->ID, $key, true); ?>" quality='high' width='362' height='35' align='middle' type='application/x-shockwave-flash'  wmode='transparent' ></embed></div>
					<div class="musictimes">Played <?php if (function_exists('the_views')): ?><?php the_views(); ?><?php endif; ?> Times,</div>
					<div class="musiccom"><?php comments_popup_link('还没有乐评', '只有1条乐评', '已有%条乐评'); ?></div>
				</div>
				<?php the_content(__('Read More'));?>
				<div class="clear"></div>
			<?php } else { ?> <!--默认类型--> 
				      
					   <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2> 	
					  	 
    <!--.postMeta-->	<script type="text/javascript">
	$(function(){
		$("#share").hover(function(){if(!$(this).children("#share ul").is(":animated")){$(this).children("#share ul").slideDown("800");}},function(){$(this).children("#share ul").slideUp("400");});//willin
	})
</script>

 

	<div id="share">分享到...
     	<ul>
           <li id="tengxunweibo"><a href="http://v.t.qq.com/share/share.php?title=<?php the_title(); ?>&url=<?php the_permalink(); ?>&site=<?php bloginfo('url');?>" target="_blank" rel="nofollow">腾讯微博</a></li>
           <li id="sinaweibo"><a href="http://v.t.sina.com.cn/share/share.php?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" rel="nofollow">新浪微博</a></li>
           <li id="twitter"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" rel="nofollow">Twitter</a></li>
           <li id="fanfou"><a href="http://fanfou.com/sharer?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" rel="nofollow">饭否</a></li>
           <li id="wangyi"><a href="http://t.163.com/article/user/checkLogin.do?link=<?php the_permalink(); ?>source=<?php bloginfo('url');?>&info=<?php the_title(); ?><?php the_permalink(); ?>" target="_blank" rel="nofollow">网易微博</a></li>
           <li id="sohu"><a href="http://t.sohu.com/third/post.jsp?&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&content=utf-8" target="_blank" rel="nofollow">搜狐微博</a></li>
           <li id="facebook"><a href="http://facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" rel="nofollow">Facebook</a></li>
           <li id="kaixin"><a href="http://www.kaixin001.com/repaste/share.php?rurl=<?php the_permalink(); ?>&rcontent=<?php the_permalink(); ?>&rtitle=<?php the_title(); ?>" target="_blank" rel="nofollow">开心网</a></li>
           <li id="renren"><a href="http://share.renren.com/share/buttonshare?link=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" rel="nofollow">人人网</a></li>
           <li id="douban"><a href="http://www.douban.com/recommend/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" rel="nofollow">豆瓣网</a></li>
           <li id="greader"><a href="http://www.google.com/reader/link?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&snippet=&srcTitle=&srcUrl=<?php bloginfo('url');?>" target="_blank" rel="nofollow" title="更多方式">GReader</a></li>    
           <li id="digg"><a href="http://digg.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" rel="nofollow">Digg</a></li>     
           <li id="delicious"><a href="http://delicious.com/post?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" rel="nofollow">delicious</a></li>                                            
     		</ul>
		</div><!--share end-->					
				        <div class="post-content">									
					        <?php the_content(__('Read More'));?>
						<a href="http://zhuji.gd" title="主机格调" target="_blank" rel="nofollow" ><img src="http://ceezi.com/wp-content/uploads/2012/11/ad_960x60a.jpg" alt="ad"></a></div>
                        <div class="clear"></div>
						<?php } ?>
                        <div class="postinfo">													
							
	<div class="relatedposts"><?php include('relatedpost.php'); ?></div>
	
	
							<div class="clear"></div>
								
						</div>
						
					<?php comments_template( '', true ); ?>

					
				
				<?php endwhile; endif;?>    
				
				<div class="clear"></div></div>
			</div>
		
		<script type="text/javascript">
		$("#loadbar").show();
		$("#loadbar div").animate({width:"50%"});
</script>
		
		<?php include('sidebar-single.php'); ?>
		<div class="clear"></div>  
		
	</article>
	  <?php get_footer(); ?>