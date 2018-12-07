<?php exit;?>00157232238307accdfc4912f76c6becc426f894ef45s:2601:"a:2:{s:8:"template";s:2537:"<section class="shop-experience">
    <div class="am-container">

        <div class="title-withline"><span>门店体验中心</span></div>

        <ul class="am-avg-sm-2 am-margin-top-lg shop-container">
            <li>
                <img src="/assets/image/15.png" class="am-img-responsive" alt="<?php echo $media["title"];?>" />
            </li>
            <li class="am-padding-left-lg">

                <ul class="am-avg-sm-4 am-margin-bottom-sm select-box">
                    <li>请选择城市</li>
                    <li>
                        <select data-am-selected title="省份" placeholder="省份">
                            <option value="省份" disabled>省份</option>
                            <option value="" selected></option>
                            <option value="哈尔滨">哈尔滨</option>
                        </select>
                    </li>
                    <li>
                        <select data-am-selected title="城市" placeholder="城市">
                            <option value="城市" disabled>城市</option>
                            <option value="" selected></option>
                            <option value="哈尔滨">哈尔滨</option>
                        </select>
                    </li>
                    <li><input type="button" value="搜索" /></li>
                </ul>

                <div class="city-container">

                    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>6, "limit"=>2));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <article>
                        <p class="shop-name am-margin-vertical-sm">【<?php echo $list["title"];?>】</p>
                        <p class="am-margin-vertical-sm"><span class="active">门店地址：</span><span><?php echo $list["address"];?></span></p>
                        <p class="am-margin-vertical-sm"><span class="active">联系电话：</span><span><?php echo $list["tel"];?></span></p>
                        <p class="am-margin-vertical-sm"><span class="active">咨询时间：</span><span>9:00-21:00</span></p>

                        <button class="appointment am-margin-top-lg am-center" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 600, height: 700}">来店预约</button>

                    </article>
                    <?php } ?>

                </div>



            </li>
        </ul>
    </div>
</section>";s:12:"compile_time";i:1540786383;}";