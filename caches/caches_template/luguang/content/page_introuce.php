<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","postion"); ?>
    <div class="main w1200 fix">
        <?php include template("content","nav"); ?>
        <div class="synopsis mian_right rt">
            <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>
            <?php echo $content;?>
        </div>
    </div>
<?php include template("content","foot"); ?>