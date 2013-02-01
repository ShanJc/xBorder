<?php get_header(); ?>
<article>
  <div id="content">
   
   <div class="content-inside">
 <?php include(TEMPLATEPATH . '/postformat.php'); ?>
    <nav class="pagenavi cf">
      <?php if (  $wp_query->max_num_pages > 1 ) : ?>
      <div id="pagenavi">
        <?php pagenavi(); ?>
      </div>
      <?php endif; ?>
    </nav>
	</div><div class="loop-loading"></div>
  </div>
  <!--#end content-->
  <script type="text/javascript">
		$("#loadbar").show();
		$("#loadbar div").animate({width:"50%"});
</script>	
  <?php get_sidebar(); ?>
  
 
</article>
 <?php get_footer(); ?>

