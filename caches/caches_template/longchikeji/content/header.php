<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
  <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
  <meta name="description" content="<?php echo $SEO['description'];?>">

  <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/style.css">
  <script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-1.8.3.min.js"></script>

  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "<?php echo JS_PATH;?>js/hm.js-324af8cdd661aaecedd5e22bffb6af7e";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
  <!-- Baidu Tongji END -->
</head>
<?php $tmp=explode(',',$CATEGORYS[$catid][arrparentid]);$num=count($tmp);?>
<?php if($num==1) { ?>
<?php $cat=$catid;?>
<?php } else { ?>
<?php $cat=$tmp[1];?>
<?php } ?>
<body>
  <!--header 开始-->
  <div class="headerbg">
    <div class="bcenter">
      <h1 class="logo">
        <a href="<?php echo siteurl($siteid);?>">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0114afb12953864e26027ad3469bef94&action=lists&catid=26&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1','limit'=>'1',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <img src="<?php echo $r['logo'];?>" width="350">
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </a>
      </h1>
      <div class="nav">
        <ul class="clearfix">
          <li><a href="<?php echo siteurl($siteid);?>">网站首页</a></li>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </div>
    </div>
  </div>
<!--header 结束-->