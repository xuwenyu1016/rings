<?php exit;?>001572080590d017f94c34eaa4f2c9af6656553585b7s:9081:"a:2:{s:8:"template";s:9017:"<?php $__Template->display("themes/default/head"); ?>

<link rel="stylesheet" href="/assets/css/amazeui.datatables.min.css">

<!--<img src="/assets/image/32.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />-->

<section class="class-list am-padding-top-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <div class="class-container">
            <article class="class-body am-padding-sm">
                <div class="nav-links">
                    <?php foreach ($condition as $vo) { ?>

                    <a href="<?php echo $vo["url"];?>" class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">全部文章</a>
                    <?php foreach ($vo["config"] as $v) { ?>


                    <a <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> href="<?php echo $v["url"];?>"><?php echo $v["name"];?></a>

                    <?php } ?>

                    <?php } ?>
                </div>

                <div class="news-container">
                    <?php foreach ($pageList as $vo) { ?>
                    <a href="<?php echo $vo["aurl"];?>" class="news-box am-padding-vertical-sm">
                        <img src="<?php echo $vo["image"];?>" alt="<?php echo $vo["title"];?>" class="am-img-responsive" />

                        <div class="news-content am-padding-left-sm">
                            <p class="am-text-truncate am-margin-vertical-xs"><?php echo $vo["title"];?></p>
                            <p class="am-margin-vertical-xs am-text-sm"><?php echo $vo["description"];?></p>

                            <span>阅读全文 >> </span>
                        </div>
                    </a>
                    <?php } ?>
                </div>

                <div class="pagination"><?php echo $page;?></div>


            </article>

            <article class="class-suggest am-padding-left-sm">
                <div class="am-tabs" data-am-tabs>
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="#tab1">近期文章</a></li>
                        <li><a href="#tab2">热门推荐</a></li>

                    </ul>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                            <?php if ( $categoryInfo['name'] ==  '钻石课堂'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"12", "sub"=>true, "limit"=>5, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>

                            <?php if ( $categoryInfo['name'] ==  '戒指课堂'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"15", "sub"=>true, "limit"=>5, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>

                            <?php if ( $categoryInfo['name'] ==  '珠宝课堂'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"16", "sub"=>true, "limit"=>5, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>

                            <?php if ( $categoryInfo['name'] ==  '结婚百科'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"17", "sub"=>true, "limit"=>5, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>

                        </div>
                        <div class="am-tab-panel am-fade" id="tab2">

                            <?php if ( $categoryInfo['name'] ==  '钻石课堂'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"12", "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>

                            <?php if ( $categoryInfo['name'] ==  '戒指课堂'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"15", "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>

                            <?php if ( $categoryInfo['name'] ==  '珠宝课堂'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"16", "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>

                            <?php if ( $categoryInfo['name'] ==  '结婚百科'  ){ ?>
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>"17", "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </article>
        </div>


    </div>
</section>



<?php $__Template->display("themes/default/three_boxes"); ?>

<?php $__Template->display("themes/default/foot"); ?>

";s:12:"compile_time";i:1540544590;}";