<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="sylink">
  <div class="Links bcenter">
    <h3>友情链接</h3>

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=3244aa3eeaa54b0456df16d44fbd5356&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
    <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
    <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> 
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

  </div>
</div>
<!--底部-->
<div class="footbg">
  <div class="foot bcenter">
    <dl class="clearfix">
      <dd>
        <h3>联系我们</h3>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9baad86060af30ced48d799af8630848&action=lists&catid=26&num=1&moreinfo=1&order=listorder+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1','order'=>'listorder asc','limit'=>'1',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <span class="ftel" style="background:url(<?php echo IMG_PATH;?>images/ftel.png) no-repeat;">电话：<em>&nbsp;&nbsp;<?php echo $r['tel'];?></em></span> 
        <span class="fcz" style="background:url(<?php echo IMG_PATH;?>images/fcz.png) no-repeat;">传真：<em>&nbsp;&nbsp;<?php echo $r['fax'];?></em></span>
        <span class="fyx" style="background:url(<?php echo IMG_PATH;?>images/fyx.png) no-repeat;">E-mail：<em>&nbsp;&nbsp;<?php echo $r['email'];?></em></span>
        <span class="fqq" style="background:url(<?php echo IMG_PATH;?>images/fqq.png) no-repeat;"><em>QQ : &nbsp;&nbsp;<?php echo $r['QQ'];?></em></span>
        <span class="fdz" style="background:url(<?php echo IMG_PATH;?>images/fdz.png) no-repeat;">地址：&nbsp;&nbsp;<?php echo $r['addr'];?></span>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </dd>
      <dt>
        <h3>快速导航</h3>
        <ul>
          <li class="dnav"> <span><?php echo $CATEGORYS['9']['catname'];?></span>
            <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9fefff7930150de0648e8377bca8492b&action=category&catid=9&moreinfo=1&num=4&order=listorder+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','moreinfo'=>'1','order'=>'listorder asc','limit'=>'4',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </ul>
          </li>
          <li class="dnav"> <span><?php echo $CATEGORYS['10']['catname'];?></span>
            <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3906dc7dc4cb81e11d9bcb05b62efbac&action=category&catid=10&moreinfo=1&num=4&order=listorder+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','moreinfo'=>'1','order'=>'listorder asc','limit'=>'4',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
          </li>
          <li class="dnav"> <span><?php echo $CATEGORYS['9']['catname'];?></span>
            <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=294845b6ae4458c43a683cf12ff6c7d9&action=category&catid=17&moreinfo=1&num=4&order=listorder+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','moreinfo'=>'1','order'=>'listorder asc','limit'=>'4',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
          </li>
          <li class="dnav" style="padding: 0px"> <span><?php echo $CATEGORYS['22']['catname'];?></span>
            <ul>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=be715bb46b77fc40c41d608f7973e611&action=category&catid=22&moreinfo=1&num=4&order=listorder+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','moreinfo'=>'1','order'=>'listorder asc','limit'=>'4',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
          </li>
        </ul>
      </dt>
    </dl>
  </div>
  <div class="footer bcenter">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9baad86060af30ced48d799af8630848&action=lists&catid=26&num=1&moreinfo=1&order=listorder+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1','order'=>'listorder asc','limit'=>'1',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <?php echo $r['bottom'];?>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
</div>
<!--右侧固定-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9baad86060af30ced48d799af8630848&action=lists&catid=26&num=1&moreinfo=1&order=listorder+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1','order'=>'listorder asc','limit'=>'1',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<div class="commonposition"> 
 <!--  <a href="javascript:;" class="Homedianhua"><span class="dianhuabggray"><?php echo $r['tel'];?></span></a> -->
  <a href="javascript:;" class="Homeweixin"><span class="weixinerweima"><img src="<?php echo $r['thumb'];?>" width="210" height="210" alt="" /></span></a> 
  <a href="#" class="Hometop"></a> 
</div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<script type="text/javascript">
 $(".commonposition a").hover(function(){
  $(this).find("span").show(300);   
},function(){
  $(this).find("span").hide(300);
})
 $(window).scroll(function(){

  if($(window).scrollTop()>500){
   $(".commonposition").show();
 }else{
   $(".commonposition").hide(); 
 }
})
</script>
<script type="text/javascript">
  $(function(){
    $(".jiejuebox").myscroll({
      prev: ".jiejueleft",
      next: ".jiejuerighr",
      scrollbox: ".indexjiejue"
    });
  })
</script>
</body>
</html>
