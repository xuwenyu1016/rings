<?php exit;?>0015715700233cccf3bb599b4ec27c3ee8af97f6f7cas:2640:"a:2:{s:8:"template";s:2576:"<?php $__Template->display("themes/default/head"); ?>

<!--<img src="/assets/image/32.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />-->

<section class="gallery-ring-list am-padding-top-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <article class="category-line">
            <ul class="am-avg-sm-6 am-margin-top-xs product-category">
                <?php foreach ($condition as $vo) { ?>
                <li>
                    <div class="category-list-title"><?php echo $vo["name"];?> <span class="am-icon-angle-down"></span></div>

                    <ul class="product-dropdown am-avg-sm-5">
                        <li class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">
                        <a href="<?php echo $vo["url"];?>"> - 全部</a>
                        </li>
                        <?php foreach ($vo["config"] as $v) { ?>
                        <li <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> >
                        <a href="<?php echo $v["url"];?>"> - <?php echo $v["name"];?></a>
                        </li>
                        <?php } ?>

                    </ul>

                </li>
                <?php } ?>
            </ul>

            <a href="/list-peishi.html" class="">清空筛选</a>
        </article>


        <ul class="am-avg-sm-4 am-padding-horizontal-sm product-list">
            <?php foreach ($pageList as $vo) { ?>
            <li class="am-padding-xs">
                <article>
                    <a href="<?php echo $vo["aurl"];?>">
                        <img src="<?php echo $vo["image"];?>" class="am-img-responsive am-center" width="250" alt="<?php echo $vo["title"];?>" />
                        <p class="am-margin-vertical-xs price"><b>¥<?php echo $vo["price"];?></b></p>
                        <p class="am-margin-vertical-xs am-text-truncate"><b><?php echo $vo["title"];?></b></p>
                        <p class="am-margin-vertical-xs show-detail am-center am-text-sm"><b>查看详情</b></p>
                    </a>
                </article>
            </li>
            <?php } ?>
        </ul>

        <div class="pagination"><?php echo $page;?></div>

    </div>
</section>

<?php $__Template->display("themes/default/three_boxes"); ?>

<?php $__Template->display("themes/default/foot"); ?>";s:12:"compile_time";i:1540034023;}";