<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="webbg">
	<div class="abanner">
		<?php if($parentid==0) { ?>
		<img src="<?php echo $CATEGORYS[$catid]['image'];?>"/> 
		<?php } else { ?> 
		<img src="<?php echo $CATEGORYS[$parentid]['image'];?>" />
		<?php } ?>   
	</div>

	<div class="anliclass"> 
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=187ca9f41dce542105ae6730ea2d4773&action=category&catid=%24cat&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat,'order'=>'listorder ASC','limit'=>'6',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>		
		<a href="<?php echo $r['url'];?>" <?php if($r[catid]==$catid) { ?>class="cur"<?php } ?>><?php echo $r['catname'];?></a>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>

	<div class="anlilist bcenter">
		<ul class="clearfix">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8cb29010a91021b1b566c85932f93154&action=lists&catid=%24catid&num=6&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
			<li> 
				<a href="<?php echo $r['url'];?>">
					<img src="<?php echo $r['thumb'];?>" width="360" height="276">
					<h3><?php echo $r['title'];?></h3>
				</a> 
			</li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

		</ul>
		<div class="Page clearfix"> 
			<?php echo $pages;?>
		</div>
	</div>
</div>
<?php include template("content","footer"); ?>