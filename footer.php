<?php $options = get_option('Newer_options'); ?>
<footer>
<div class="footer-inner">
<div class="madeon"></div>
<div id="footerinfo">
 <p>Copyright&nbsp;©&nbsp;2013&nbsp;<a href="http://ceezi.com" title="神一样的网站">大发贱志</a>&nbsp;|&nbsp;This&nbsp;is&nbsp;a&nbsp;private&nbsp;theme&nbsp;|&nbsp;<a href="https://plus.google.com/116339521172373137445?rel=author">Google+</a></p>
 valid&nbsp;<a href="http://validator.w3.org/check?uri=referer" rel="external nofollow">HTML&nbsp;5</a>&nbsp;&&nbsp;<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" rel="external nofollow">CSS&nbsp;3</a>&nbsp;|&nbsp;<a href="http://ceezi.com/archives/908.html" title="xCoozer">xBorder</a> Designed By Bigfa
</div>
</div><!-- end #footer -->
</footer>

<p class="link-back2top"><a href="#" title="Back to top">Back to top</a></p>



<?php if($options['footercode']) : ?> 
	<div class="statistic">
		<?php echo($options['footercode']); ?>
	</div>
<?php endif; ?>

<div id="msg_ie">您正在使用IE浏览器，请下载<a href="https://www.google.com/intl/zh-CN/chrome/browser/" target="blank">Chrome</a>已获得更好的体验。</div>
<div class="longhu">龙虎榜</div>
<div id="four">
	<ul id="fourlist"></ul>
	<a href="#" id="nowtime"></a>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
function currentTime(){  //JavaScript原生的获取当前时间函数
var d = new Date(),str = '更新于： ';
 str += d.getHours()+':'; 
 str  += d.getMinutes()+':'; 
str+= d.getSeconds(); 
return str;
}
jQuery(document).ready(function($){
	var Frl=$("#fourlist"),Ntm=$("#nowtime");
	Frl.load("http://ceezi.com/four");  //jQuery里的Ajax方式一种 load，网页刷新直接加载我们之前新建的页面 four 里的内容到 #fourlist 里；
	Ntm.text(currentTime());  //更新当前更新的时间戳；
	Ntm.click(function(){  //点击 #nowtime 事件；
		Frl.text("加大马力更新中...").load("http://ceezi.com/four");  //再次加载 four 页面，这个就是核心了～
		Ntm.text(currentTime());
		return false;
	});
});
</script>
    
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/xBorder.js"></script>	
	<script type="text/javascript">
	$("#loadbar div").animate({width:"100%"},function(){
setTimeout(function(){$("#loadbar").hide();},1000);
}); 
</script>
</body>
</html>