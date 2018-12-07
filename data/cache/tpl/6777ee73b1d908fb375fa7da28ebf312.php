<?php exit;?>001572329408f2650c9b3f8e0b11c0341e896812cda4s:2267:"a:2:{s:8:"template";s:2203:"<section class="shop-experience am-padding-sm">

    <div class="title-withline"><span>门店体验中心</span></div>

    <img src="/assets/image/141.png" class="am-img-responsive am-margin-vertical-sm" alt="<?php echo $media["title"];?>" />

    <p class="am-margin-vertical-xs am-text-xs">请选择城市</p>

    <ul class="am-avg-sm-3 am-margin-bottom-xs select-box">
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

    <article class="shop-list">
        <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "class_id"=>13, "expand_id"=>6, "limit"=>2));  if(is_array($listList)) foreach($listList as $list){ ?>
        <p class="am-margin-vertical-xs am-text-xs">【<?php echo $list["title"];?>】</p>
        <p class="am-margin-vertical-xs am-text-xs"><span class="active">门店地址:</span><span><?php echo $list["address"];?></span></p>
        <div>
            <p class="am-margin-vertical-xs am-text-xs"><span class="active">联系电话:</span><span><?php echo $list["tel"];?></span></p>
            <p class="am-margin-vertical-xs am-text-xs"><span class="active">咨询时间:</span><span>9：00-21：00</span></p>

            <a href="tel:<?php echo $list["tel"];?>"><img src="/assets/image/140.png" class="am-img-responsive" alt="<?php echo $list["tel"];?>"></a>
        </div>


        <button class="appointment am-margin-top-sm am-center am-text-sm"  data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 530}">来店预约</button>
        <?php } ?>
    </article>


</section>";s:12:"compile_time";i:1540793408;}";