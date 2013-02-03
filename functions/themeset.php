<?php
////////////////ThemeOptions
	class NewerOptions {
	function getOptions() {
		$options = get_option('Newer_options');
		if (!is_array($options)) {
			
			$options['description_content'] = '';
			$options['keyword_content'] = '';
			$options['footercode'] = '';
			$options['imageLogo'] = false;
			/*外观*/
			
			$options['favicon_ck'] = false;
			$options['custom_favicon'] = '';
			$options['hovertotran'] = false;
			$options['hovertoclear'] = false;
			$options['isie'] = false;
		
			/*********侧边栏*********/

			$options['sidebar_post'] = false;
			$options['sidebar_recentComments'] = false;
			$options['favewebson'] = false;
			$options['notice_content'] = '';
			/**幻灯片的**/
				
			
			/*广告*/
			$options['sidebarad'] = false;
			$options['sidebaradcode'] = '';
			/*****页面模板*****/
			/*关于*/			
			$options['about_img'] = '';
			$options['about_content'] = '';
			$options['about_title'] = '';
			
			/*功能*/					
			
			$options['colorbox'] = false;
			
			$options['glide'] = false;
			$options['thumbnail'] = false;
			
			$options['topnotice'] = false;
			/*SNS*/
			$options['snsicon'] = false;
			$options['rss_select'] = false;			
			$options['twitter_select'] = false;
			$options['twitter_url'] = ''; 
			$options['facebook_select'] = false;
			$options['facebook_url'] = ''; 
			$options['da_select'] = false;
			$options['da_url'] = ''; 
			$options['googleplus_select'] = false;
			$options['googleplus_url'] = ''; 
			$options['dribbble_select'] = false;
			$options['dribbble_url'] = ''; 
			$options['flicker_select'] = false;
			$options['flicker_url'] = ''; 
			$options['spotify_select'] = false;
			$options['spotify_url'] = ''; 
			$options['tumblr_select'] = false;
			$options['tumblr_url'] = ''; 
			$options['weibo_select'] = false;
			$options['weibo_url'] = '';
            $options['qqweibo_select'] = false;
			$options['qqweibo_url'] = ''; 			
		    $options['kaixin_select'] = false;
			$options['kaixin_url'] = ''; 
			$options['renren_select'] = false;
			$options['renren_url'] = ''; 
			$options['douban_select'] = false;
			$options['douban_url'] = '';
            $options['sohu_select'] = false;
			$options['sohu_url'] = '';
            $options['wangyi_select'] = false;
			$options['wangyi_url'] = '';			
			update_option('Newer_options', $options);
		}
		return $options;
	}
	/* -- 初始化 -- */
	function init() {
		if(isset($_POST['Newer_save'])) {
			$options = NewerOptions::getOptions();
			// 数据限制		
			
			$options['description_content'] = stripslashes($_POST['description_content']);
			$options['keyword_content'] = stripslashes($_POST['keyword_content']);			
			$options['footercode'] = stripslashes($_POST['footercode']);

			/*外观的*/
			if ($_POST['cursor_mac']) { $options['cursor_mac'] = (bool)true; } else { $options['cursor_mac'] = (bool)false; }			
			if ($_POST['logo_url_ck']) { $options['logo_url_ck'] = (bool)true; } else { $options['logo_url_ck'] = (bool)false; }	
			$options['logo_url'] = stripslashes($_POST['logo_url']);
			if ($_POST['favicon_ck']) { $options['favicon_ck'] = (bool)true; } else { $options['favicon_ck'] = (bool)false; }			
			$options['custom_favicon'] = stripslashes($_POST['custom_favicon']);
			if ($_POST['hovertotran']) { $options['hovertotran'] = (bool)true; } else { $options['hovertotran'] = (bool)false; }
			if ($_POST['hovertoclear']) { $options['hovertoclear'] = (bool)true; } else { $options['hovertoclear'] = (bool)false; }
			if ($_POST['isie']) { $options['isie'] = (bool)true; } else { $options['isie'] = (bool)false; }
			/*************侧边栏**************/
			
			if ($_POST['sidebar_post']) { $options['sidebar_post'] = (bool)true; } else { $options['sidebar_post'] = (bool)false; }
			if ($_POST['sidebar_recentComments']) { $options['sidebar_recentComments'] = (bool)true; } else { $options['sidebar_recentComments'] = (bool)false; }
			if ($_POST['favewebson']) { $options['favewebson'] = (bool)true; } else { $options['favewebson'] = (bool)false; }
			$options['notice_content'] = stripslashes($_POST['notice_content']);
			
			
			/*广告*/
			if ($_POST['sidebarad']) { $options['sidebarad'] = (bool)true; } else { $options['sidebarad'] = (bool)false; }
			$options['sidebaradcode'] = stripslashes($_POST['sidebaradcode']);
			
			
			/*关于*/
				$options['about_img'] = stripslashes($_POST['about_img']);
				$options['about_content'] = stripslashes($_POST['about_content']);
				$options['about_title'] = stripslashes($_POST['about_title']);	
				
			/*功能*/			
			
			
			if ($_POST['colorbox']) { $options['colorbox'] = (bool)true; } else { $options['colorbox'] = (bool)false; }
			
			if ($_POST['glide']) { $options['glide'] = (bool)true; } else { $options['glide'] = (bool)false; }
			if ($_POST['thumbnail']) { $options['thumbnail'] = (bool)true; } else { $options['thumbnail'] = (bool)false; }
			
			if ($_POST['topnotice']) { $options['topnotice'] = (bool)true; } else { $options['topnotice'] = (bool)false; }
			
			/*SNS*/
			if ($_POST['snsicon']) { $options['snsicon'] = (bool)true; } else { $options['snsicon'] = (bool)false; }
			if ($_POST['rss_select']) { $options['rss_select'] = (bool)true; } else { $options['rss_select'] = (bool)false; }
			if ($_POST['twitter_select']) { $options['twitter_select'] = (bool)true; } else { $options['twitter_select'] = (bool)false; }
			$options['twitter_url'] = stripslashes($_POST['twitter_url']);
			if ($_POST['facebook_select']) { $options['facebook_select'] = (bool)true; } else { $options['facebook_select'] = (bool)false; }
			$options['facebook_url'] = stripslashes($_POST['facebook_url']);
			if ($_POST['da_select']) { $options['da_select'] = (bool)true; } else { $options['da_select'] = (bool)false; }
			$options['da_url'] = stripslashes($_POST['da_url']);
			if ($_POST['googleplus_select']) { $options['googleplus_select'] = (bool)true; } else { $options['googleplus_select'] = (bool)false; }
			$options['googleplus_url'] = stripslashes($_POST['googleplus_url']);
			if ($_POST['dribbble_select']) { $options['dribbble_select'] = (bool)true; } else { $options['dribbble_select'] = (bool)false; }
			$options['dribbble_url'] = stripslashes($_POST['dribbble_url']);
			if ($_POST['flicker_select']) { $options['flicker_select'] = (bool)true; } else { $options['flicker_select'] = (bool)false; }
			$options['flicker_url'] = stripslashes($_POST['flicker_url']);
			if ($_POST['spotify_select']) { $options['spotify_select'] = (bool)true; } else { $options['spotify_select'] = (bool)false; }
			$options['spotify_url'] = stripslashes($_POST['spotify_url']);
			if ($_POST['tumblr_select']) { $options['tumblr_select'] = (bool)true; } else { $options['tumblr_select'] = (bool)false; }
			$options['tumblr_url'] = stripslashes($_POST['tumblr_url']);
			if ($_POST['weibo_select']) { $options['weibo_select'] = (bool)true; } else { $options['weibo_select'] = (bool)false; }
			$options['weibo_url'] = stripslashes($_POST['weibo_url']);
			if ($_POST['qqweibo_select']) { $options['qqweibo_select'] = (bool)true; } else { $options['qqweibo_select'] = (bool)false; }
			$options['qqweibo_url'] = stripslashes($_POST['qqweiboo_url']);
			if ($_POST['kaixin_select']) { $options['kaixin_select'] = (bool)true; } else { $options['kaixin_select'] = (bool)false; }
			$options['kaixin_url'] = stripslashes($_POST['kaixin_url']);
			if ($_POST['renren_select']) { $options['renren_select'] = (bool)true; } else { $options['renren_select'] = (bool)false; }
			$options['renren_url'] = stripslashes($_POST['renren_url']);
			if ($_POST['douban_select']) { $options['douban_select'] = (bool)true; } else { $options['douban_select'] = (bool)false; }
			$options['douban_url'] = stripslashes($_POST['douban_url']);
			if ($_POST['sohu_select']) { $options['sohu_select'] = (bool)true; } else { $options['sohu_select'] = (bool)false; }
			$options['sohu_url'] = stripslashes($_POST['sohu_url']);
			if ($_POST['wangyi_select']) { $options['wangyi_select'] = (bool)true; } else { $options['wangyi_select'] = (bool)false; }
			$options['wangyi_url'] = stripslashes($_POST['wangyi_url']);
			
			
			
			update_option('Newer_options', $options);
			echo "<div id='message' class='updated fade'><p><strong>设置已保存</strong></p></div>";
		} else {NewerOptions::getOptions();	}
		
		add_theme_page("主题设置", "主题设置", 'edit_themes', basename(__FILE__), array('NewerOptions', 'display'));
	}

	/* -- 标签页 -- */
	function display() {
		$options = NewerOptions::getOptions();
?>



 
 <style type="text/css">
.wrap{padding:10px; font-size:12px; line-height:24px;color:#383838;}
.devetable td{vertical-align:top;text-align: left;border:none ;font-size:12px; }
.top td{vertical-align: middle;text-align: left; border:none;font-size:12px;}
.submit {
    border-color: #DFDFDF;
    margin-left: 15px;
}
table{border:none;font-size:12px;}
pre{white-space: pre;overflow: auto;padding:0px;line-height:19px;font-size:12px;color:#898989;}
strong{ color:#666}
textarea{ width:100%; margin:0 20px 0 0;  overflow:auto}
.none{display:none;}
fieldset{ border:1px solid #ddd;margin:5px 0 10px;padding:10px 10px 20px 10px;-moz-border-radius:5px;-khtml-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;}
fieldset:hover{border-color:#bbb;}
fieldset legend{padding:0 5px;color:#777;font-size:14px;font-weight:700;cursor:pointer}
fieldset .line{border-bottom:1px solid #e5e5e5;padding-bottom:15px;}
fieldset textarea{ padding:5px 5px;line-height:12px;-moz-border-radius:3px;-khtml-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;}
</style>


<script type="text/javascript">
jQuery(document).ready(function($){  
$(".toggle").click(function(){$(this).next().slideToggle('slow')});
});
</script>



<form action="#" method="post" enctype="multipart/form-data" name="Newer_form" id="Newer_form" />

	<div class="wrap">

					<h2>主题设置</h2>
<table width="800" border="1" class="devetable">					
					<br/>		
					<fieldset>
					<legend class="toggle">基本设置</legend>
						<div class="none">
							<strong>网站描述</strong> （用简洁干练的话对你的网站进行描述）<br/><label><textarea name="description_content"  rows="4"  id="description_content" style="width:540px;"  ><?php echo($options['description_content']); ?></textarea></label>
							<br/><br/>						
																	
							<strong>网站统计代码输入</strong>（添加统计代码，为了不影响主题美观，不被显示是正常现象）<br/>
							<label><textarea name="footercode"  rows="5"  id="footercode" style="width:540px;"  ><?php echo($options['footercode']); ?></textarea></label>		
							<br/><br/>											
						</div>
					</fieldset>
					
	  </table>				
					
					
					<fieldset>
					<legend class="toggle">外观设置</legend>
						<div class="none">                      
							                        
											
							<label><input name="favicon_ck" type="checkbox" value="checkbox" <?php if($options['favicon_ck']) echo "checked='checked'"; ?> /><strong>自定义网站图标地址 （favicon）</strong>  当前使用默认favicon：
									<?php ob_start();
										ob_implicit_flush(0);
										echo ($options['custom_favicon']); 
										$my_favicon = ob_get_contents();
										ob_end_clean();
										if ($my_favicon == ''): ?>
											<a href="<?php bloginfo("url"); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/favicon.ico" alt="<?php bloginfo('name'); ?>"></a>
										<?php else: ?>
											<a href="<?php bloginfo("url"); ?>/"><img src="<?php echo($options['custom_favicon']); ?>"></a>       		
										<?php endif ?>
							</label>

							
					</fieldset>		

					
					
							
								
					
					
					
					
		<!-- submit -->
		<p class="submit">
			<input type="submit" name="Newer_save" value="保存设置" />
		</p>
	</div>
</form>
 
<?php
	}
}
add_action('admin_menu', array('NewerOptions', 'init'));



?>