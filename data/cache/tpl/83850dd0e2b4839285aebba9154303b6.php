<?php exit;?>001572248326c1a0730d1b28ecbcd7caf2d5f5ed5a6ds:2044:"a:2:{s:8:"template";s:1980:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="class-list-top am-padding-sm">

    <p class="am-margin-vertical-0 am-text-xs"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

</section>

<hr class="grey" />

<div class="class-list-container am-padding-sm">
    <p class="article-title am-text-center am-margin-vertical-xs"><?php echo $contentInfo["title"];?></p>
    <p class="article-time am-text-center am-margin-vertical-xs am-text-sm">时间：<?php echo date('Y-m-d H:i:s',$contentInfo["time"]);?></p>
    <div class="article-box am-text-sm"><?php echo $contentInfo["content"];?></div>
    <p class="am-text-right article-from am-text-sm am-margin-vertical-xs">来源：<?php echo $contentInfo["copyfrom"];?></p>

    <ul class="am-avg-sm-1 am-padding-top-sm am-padding-bottom-sm am-text-sm">
        <li>
            <div class="am-text-truncate"><span>上一篇：</span>
                <?php if (empty($prevInfo['aurl'])){ ?>
                <a class="am-link-muted ">暂无</a>
                <?php }else{ ?>
                <a href="<?php echo $prevInfo["aurl"];?>" class="am-link-muted"><?php echo $prevInfo["title"];?></a>
                <?php } ?>
            </div>
        </li>
        <li>

            <div class="am-text-truncate"><span>下一篇：</span>
                <?php if (empty($nextInfo['aurl'])){ ?>
                <a class="am-link-muted">暂无</a>
                <?php }else{ ?>
                <a href="<?php echo $nextInfo["aurl"];?>" class="am-link-muted"><?php echo $nextInfo["title"];?></a>
                <?php } ?>
            </div>
        </li>
    </ul>

</div>



<hr class="grey" />

<?php $__Template->display("themes/mobile/three_boxes"); ?>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>";s:12:"compile_time";i:1540712326;}";