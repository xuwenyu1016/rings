<?php exit;?>001571138729d39e97a7dfff771e6d0da3cdf4c1c08es:7117:"a:2:{s:8:"template";s:7053:"
<?php $__Template->display("themes/mobile/head"); ?>

<?php $__Template->display("themes/mobile/header"); ?>

<section class="am-padding-sm looseRing-filter">

    <p class="am-margin-top-0 am-margin-bottom-sm am-text-xs"><a href="/">首页</a><?php foreach ($crumb as $vo) { ?> &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a><?php } ?></p>


    <ul class="am-avg-sm-3 tab-two">
        <?php foreach ($condition as $vo) { ?>

        <?php foreach ($vo["config"] as $v) { ?>
        <li <?php if ($v["value"] == $v["i"]){ ?> class="active" <?php } ?> >
        <a href="<?php echo $v["url"];?>"><?php echo $v["name"];?> <span class="am-icon-caret-down"></span></a>
        </li>
        <?php } ?>

        <?php } ?>

        <li>
            <a href="#doc-oc-demo-filter" data-am-offcanvas>高级筛选</a>

            <!-- 侧边栏内容 -->
            <div id="doc-oc-demo-filter" class="am-offcanvas">
                <div class="am-offcanvas-bar am-offcanvas-bar-flip">
                    <div class="am-offcanvas-content">

                        <p class="filter-header">高级筛选</p>

                        <?php foreach ($condition as $vo) { ?>
                        <article>
                            <span class="category-head"><?php echo $vo["name"];?></span>
                            <ul class="am-avg-sm-3">
                                <li>
                                    <p class="select-all <?php if ($vo["value"]==="all"){ ?>  selected <?php } ?> ">
                                    <a>全部</a>
                                    </p>
                                </li>


                                <?php foreach ($vo["config"] as $v) { ?>
                                <li>
                                    <p <?php if ($v["value"] == $v["i"]){ ?> class="selected" <?php } ?> >
                                    <a><?php echo $v["name"];?></a>
                                    </p>
                                </li>

                                <?php } ?>


                            </ul>

                        </article>
                        <?php } ?>


                        <div class="last-line-text">
                            <a href="" class="go" id="looseRingGoLink">GO! 点击前往</a>
                            <a href="/list-peishi.html" class="clear-filter">清除筛选</a>

                        </div>

                        <div class="close-filter">Close</div>
                    </div>
                </div>
            </div>
        </li>

    </ul>

</section>

<hr class="grey" />

<section class="ring-lists am-padding-sm">
    <ul class="am-avg-sm-2">
        <?php foreach ($pageList as $vo) { ?>
        <li class="am-padding-xs">
            <article>
                <a href="<?php echo $vo["aurl"];?>">
                    <img src="<?php echo $vo["image"];?>" class="am-img-responsive am-center" width="200" alt="<?php echo $vo["title"];?>" />
                    <p class="am-margin-vertical-xs am-text-xs price am-text-center"><b>¥<?php echo $vo["price"];?></b></p>
                    <p class="am-margin-vertical-xs am-text-xs am-text-truncate am-text-center"><b><?php echo $vo["title"];?></b></p>
                </a>
            </article>
        </li>
        <?php } ?>
    </ul>

    <div class="pagination"><?php echo $page;?></div>
</section>

<?php $__Template->display("themes/mobile/footer"); ?>

<?php $__Template->display("themes/mobile/foot"); ?>

<script>
    $(document).ready(function(){


        $filterLink = $("#doc-oc-demo-filter article p");


        $filterLink["click"](function(){
            $(this).addClass("selected");
            $(this).parent().siblings().children().removeClass("selected");

//            console.log($(this).parent().index() + 1);

            $firstNum = (parseInt($("#doc-oc-demo-filter article:nth-child(2) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(2) .selected").parent().index()) ;
            $SecNum = (parseInt($("#doc-oc-demo-filter article:nth-child(3) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(3) .selected").parent().index()) ;
            $ThirdNum = (parseInt($("#doc-oc-demo-filter article:nth-child(4) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(4) .selected").parent().index()) ;
            $FourNum = (parseInt($("#doc-oc-demo-filter article:nth-child(5) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(5) .selected").parent().index()) ;
            $FivNum = (parseInt($("#doc-oc-demo-filter article:nth-child(6) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(6) .selected").parent().index()) ;
            $SixNum = (parseInt($("#doc-oc-demo-filter article:nth-child(7) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(7) .selected").parent().index()) ;
            $SevNum = (parseInt($("#doc-oc-demo-filter article:nth-child(8) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(8) .selected").parent().index()) ;
            $EigNum = (parseInt($("#doc-oc-demo-filter article:nth-child(9) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(9) .selected").parent().index()) ;
            $NinNum = (parseInt($("#doc-oc-demo-filter article:nth-child(10) .selected").parent().index())  === 0)?"all":parseInt($("#doc-oc-demo-filter article:nth-child(10) .selected").parent().index());


            console.log($firstNum);



            if($(".tab-two li:nth-child(1)").hasClass("active")){
                console.log("/peishi/select/series-1_categoryName-" + $firstNum + "_ringWeight-" + $SecNum + "_material-" + $ThirdNum + "_ringPrice-" + $FourNum + ".html");
                $('#looseRingGoLink').attr('href',"/peishi/select/series-1_categoryName-" + $firstNum + "_ringWeight-" + $SecNum + "_material-" + $ThirdNum + "_ringPrice-" + $FourNum + ".html");

            }else if($(".tab-two li:nth-child(2)").hasClass("active")){
                console.log("/peishi/select/series-2_categoryName-" + $firstNum + "_ringWeight-" + $SecNum + "_material-" + $ThirdNum + "_ringPrice-" + $FourNum + ".html");
                $('#looseRingGoLink').attr('href',"/peishi/select/series-2_categoryName-" + $firstNum + "_ringWeight-" + $SecNum + "_material-" + $ThirdNum + "_ringPrice-" + $FourNum + ".html");


            }else{
                console.log("/peishi/select/series-all_categoryName-" + $firstNum + "_ringWeight-" + $SecNum + "_material-" + $ThirdNum + "_ringPrice-" + $FourNum + ".html");
                $('#looseRingGoLink').attr('href',"/peishi/select/series-all_categoryName-" + $firstNum + "_ringWeight-" + $SecNum + "_material-" + $ThirdNum + "_ringPrice-" + $FourNum + ".html");


            }

        });


    })
</script>";s:12:"compile_time";i:1539602729;}";