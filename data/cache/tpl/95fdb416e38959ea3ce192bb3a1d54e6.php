<?php exit;?>001572334552d4813b3bcbe7436939c8ea2b3df607des:4421:"a:2:{s:8:"template";s:4357:"<?php $__Template->display("themes/default/head"); ?>

<link rel="stylesheet" href="/assets/css/amazeui.datatables.min.css">

<!--<img src="/assets/image/32.png" alt="<?php echo $contentInfo["title"];?>" class="am-img-responsive am-center" />-->

<section class="class-list am-padding-top-xl">
    <div class="am-container">
        <p class="am-margin-top-0 am-margin-bottom-sm am-text-sm"><a href="/">首页</a> <?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>

        <div class="class-container">
            <article class="class-body am-padding-lg">

                <p class="article-title am-text-center am-margin-vertical-xs"><?php echo $contentInfo["title"];?></p>
                <p class="article-time am-text-center am-margin-vertical-xs">时间：<?php echo date('Y-m-d H:i:s',$contentInfo["time"]);?></p>
                <div class="article-box"><?php echo $contentInfo["content"];?></div>
                <p class="am-text-right article-from">来源：<?php echo $contentInfo["copyfrom"];?></p>

                <ul class="am-avg-sm-1 am-avg-md-2 am-padding-top-sm am-padding-bottom-sm">
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

            </article>

            <article class="class-suggest am-padding-left-sm">
                <div class="am-tabs" data-am-tabs>
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="#tab1">近期文章</a></li>
                        <li><a href="#tab2">热门推荐</a></li>

                    </ul>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>12, "sub"=>true, "limit"=>5, "order"=>"time desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="am-tab-panel am-fade" id="tab2">
                            <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>12, "sub"=>true, "limit"=>5, "order"=>"views desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
                            <a href="<?php echo $list["aurl"];?>">
                                <p class="am-margin-vertical-xs am-text-truncate am-text-sm"><?php echo $list["title"];?></p>
                                <p class="am-margin-vertical-xs am-text-xs"><?php echo $list["description"];?></p>
                            </a>
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

";s:12:"compile_time";i:1540798552;}";