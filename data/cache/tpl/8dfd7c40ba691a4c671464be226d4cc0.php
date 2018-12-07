<?php exit;?>00157234151978f938f06784477513089c2cf7d54255s:4018:"a:2:{s:8:"template";s:3954:"<?php $__Template->display("themes/default/head"); ?>

<link rel="stylesheet" href="/assets/css/amazeui.datatables.min.css">

<!--<img src="/assets/image/32.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />-->

<section class="gallery-ring-list am-padding-vertical-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a> &gt; <a href="/list-luozuan.html">裸钻</a></p>

        <article class="category-block am-padding-bottom-xl">

            <ul class="am-avg-sm-2 tab-two">
                <?php foreach ($condition as $vo) { ?>

                    <?php foreach ($vo["config"] as $v) { ?>
                    <li <?php if ($v["value"] == $v["i"]){ ?> class="active" <?php } ?> >
                        <a href="<?php echo $v["url"];?>"><?php echo $v["name"];?> <span class="am-icon-caret-down"></span></a>
                    </li>
                    <?php } ?>

                <?php } ?>

            </ul>

            <ul class="am-avg-sm-2 am-margin-top-xs am-padding-bottom-lg filter-box">


                <?php foreach ($condition as $vo) { ?>
                <li>
                    <span class="category-head"><?php echo $vo["name"];?></span>
                    <div>
                        <?php foreach ($vo["config"] as $v) { ?>
                        <p <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> >
                            <a href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a>
                        </p>
                        <?php } ?>
                    </div>

                </li>
                <?php } ?>
            </ul>

            <a href="/list-luozuan.html" class="clearChosen am-text-center">清空筛选器</a>
        </article>

        <div class="loose-ring-block am-padding-top-xl">
            <?php foreach ($pageList as $vo) { ?>
            <p class="ring-block-line ">
                <span><?php echo $vo["ringShape"]['list'][$vo["ringShape"]['value'][0]] ;?></span>|<span>证书 <?php echo $vo["num"];?></span>|<span>钻重 <?php echo $vo["weight"];?></span>|
                <span>颜色 <?php echo $vo["colorNum"];?></span>|<span>净度 <?php echo $vo["clearNum"];?></span>|<span>切工 <?php echo $vo["cutDegree"];?></span>|<span>抛光 <?php echo $vo["polish"];?></span>|
                <span>对称 <?php echo $vo["sym"];?></span>|<span>荧光 <?php echo $vo["fluo"];?></span>|<span class="red">会员价 ¥<?php echo $vo["priceNum"];?></span><a href="<?php echo $vo["aurl"];?>">立即查看</a>
            </p>
            <?php } ?>

            <div class="pagination"><?php echo $page;?></div>

        </div>


    </div>
</section>

<section class="product-ring-interest">
    <div class="am-container am-padding-bottom-lg">
        <div class="title-withline"><span>热门推荐</span></div>
    </div>

    <article class="recommendation-box am-padding-vertical-xl">
        <div class="am-container">
            <ul class="am-avg-sm-2 am-padding-bottom-lg">
               <li class="am-padding-right-sm">
                   <a href="">
                       <img src="/assets/image/115.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />
                   </a>
               </li>
                <li class="am-padding-left-sm">
                    <a href="">
                        <img src="/assets/image/116.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />
                    </a>
                </li>
            </ul>

            <a href="">
                <img src="/assets/image/117.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />
            </a>

        </div>
    </article>

</section>

<?php $__Template->display("themes/default/three_boxes"); ?>

<?php $__Template->display("themes/default/foot"); ?>
";s:12:"compile_time";i:1540805519;}";