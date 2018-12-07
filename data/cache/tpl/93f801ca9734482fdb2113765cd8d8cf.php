<?php exit;?>001572250896f5407e1010a0be263f5f79b19ce83206s:1881:"a:2:{s:8:"template";s:1817:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="class-list-top am-padding-sm">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-xs"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

    <ul class="am-avg-sm-5">
        <?php foreach ($condition as $vo) { ?>
        <li>
            <a href="<?php echo $vo["url"];?>" class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">全部文章</a>
        </li>

        <?php foreach ($vo["config"] as $v) { ?>
        <li>
            <a <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a>
        </li>
        <?php } ?>

        <?php } ?>
    </ul>
</section>

<hr class="grey" />

<div class="class-list-container">
    <?php foreach ($pageList as $vo) { ?>
    <a href="<?php echo $vo["aurl"];?>" class="news-box am-padding-horizontal-sm am-margin-vertical-sm">
        <img src="<?php echo $vo["image"];?>" alt="<?php echo $vo["title"];?>" class="am-img-responsive" />

        <div class="news-content am-padding-left-sm">
            <p class="am-text-truncate am-margin-vertical-0 am-text-sm"><?php echo $vo["title"];?></p>
            <p class="am-text-truncate am-margin-vertical-0 am-text-xs"><?php echo $vo["description"];?></p>

        </div>
    </a>
    <?php } ?>

    <div class="pagination am-padding-horizontal-sm am-padding-bottom-sm am-text-sm"><?php echo $page;?></div>

</div>



<hr class="grey" />

<?php $__Template->display("themes/mobile/three_boxes"); ?>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>";s:12:"compile_time";i:1540714896;}";