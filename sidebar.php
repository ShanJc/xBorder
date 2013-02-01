<aside>

  <div class="microblog">
  
  
	<?php
/* 使用WP评论作为公告栏 by zwwooooo | zww.me */
////参数设定
$page_ID=238; //用来作为公告栏的页面或者文章id
$num=3; //显示公告的条数
?>
			
			

			
			<ul>
	<?php
	$announcement = '';
	$comments = get_comments("number=$num&post_id=$page_ID&comment_parent=0");
	if ( !empty($comments) ) {
		foreach ($comments as $comment) {
			$announcement .= '<li>'. convert_smilies($comment->comment_content) . ' <br/><a href="' . get_page_link($page_ID) . '#respond" rel="nofollow" class="anno"><span style="color:#cc0000;font-size:11px">诅咒于:' . get_comment_date('Y/m/d H:i',$comment->comment_ID) . '</span></a></li>';
		}
	}
	if ( empty($announcement) ) $announcement = '<li>欢迎光临本博！</li>';
	echo $announcement;
	?>
</ul>
			
		</div>
		
  
      
      
    <div id="sidebarwidgit">
	  
	
	<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
	
	<?php endif; ?>
	</div>
   

</aside>
<script type="text/javascript">
		$("#loadbar").show();
		$("#loadbar div").animate({width:"80%"});
</script>