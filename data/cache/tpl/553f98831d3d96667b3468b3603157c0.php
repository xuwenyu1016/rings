<?php exit;?>001571474553d6f37cf2d491fd3ba94d31f557d11321s:10989:"a:2:{s:8:"template";s:10924:"<section class="qr-codes am-padding-bottom-sm">
    <div class="am-container am-padding-vertical-lg">
        <ul class="am-avg-sm-2">
            <li class="am-padding-right-lg">
                <ul class="am-avg-sm-1">
                    <li>
                        <p class="am-margin-vertical-xs am-text-center">Beonly官方微信公众号</p>
                        <img src="/assets/image/31.png" class="am-img-responsive am-center" alt="Beonly官方微信" />
                    </li>
                    <!--<li>-->
                    <!--<p class="am-margin-vertical-xs am-text-center">Beonly官方微博</p>-->
                    <!--<img src="/assets/image/19.png" class="am-img-responsive am-center" alt="Beonly官方微博" />-->
                    <!--</li>-->
                </ul>
            </li>
            <li class="am-padding-left-sm">
                <p class="am-margin-vertical-xs"><b>点击订阅，获取产品目录！</b></p>
                <p class="am-text-sm am-margin-vertical-xs">了解原创设计、特别活动、新店开张等更多消息</p>
                <button data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 600, height: 700}">
                    <span>邮箱</span><span>订阅</span>
                </button>
            </li>
        </ul>
    </div>
</section>

<footer class="am-padding-sm am-text-sm am-text-center">
    Copyright &copy; 2007-2018 壹钻网（深圳）珠宝有限公司  版权所有 并保留所有权利 <a target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备18115921号-1</a>
</footer>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">联系顾问
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd contact-form">

            <article>

                <form class="am-padding-top-sm" action="<?php echo U('DuxCms/Form/push');?>" method="post">

                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-left">您的个人信息</p>

                    <div>
                        <p><span>*</span>称谓</p>
                        <input type="radio" name="gender" value="先生" placeholder="" checked />先生 &emsp;&emsp;
                        <input type="radio" name="gender" value="女士" placeholder="" />女士
                    </div>

                    <div>
                        <p><span>*</span>姓名</p>
                        <input type="text" name="name" placeholder="" required />
                    </div>

                    <div>
                        <p><span>*</span>电话</p>
                        <input type="tel" name="tel" placeholder="" required />
                    </div>

                    <div>
                        <p><span>*</span>电子邮箱</p>
                        <input type="email" name="email" placeholder="" required />
                    </div>

                    <div>
                        <p>您的讯息关于</p>
                        <select name="infoFrom" id="" >
                            <option value="询价" selected>询价</option>
                            <option value="产品目录">产品目录</option>
                            <option value="体验店详情">体验店详情</option>
                            <option value="售后服务">售后服务</option>
                        </select>
                    </div>

                    <div>
                        <p>您的讯息</p>
                        <textarea name="content" placeholder=""></textarea>
                    </div>

                    <div>
                        <input type="checkbox" name="confirmation" class="am-margin-0" value="希望接收" placeholder="" />
                        <span class="am-text-sm">我希望通过上述所提供的任何一种通讯方式接收Beonly相关信息。</span>
                    </div>

                    <div class="validate">
                        <div>
                            <p><span>*</span>验证码</p>
                            <input name="checkcode" type="text" maxlength="4" size="4" >
                            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                        </div>

                        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                        <input type="hidden" name="table" value="guestbook">

                        <button type="submit">提 交</button>
                    </div>





                </form>

            </article>

        </div>
    </div>
</div>

<div class="am-modal am-modal-no-btn" tabindex="-2" id="doc-modal-2">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">预约来店
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd contact-form">

            <article>

                <form class="am-padding-top-sm" action="<?php echo U('DuxCms/Form/push');?>" method="post">

                    <p class="am-margin-top-sm am-margin-bottom-0 am-text-left">您的个人信息</p>

                    <div>
                        <p><span>*</span>称谓</p>
                        <input type="radio" name="gender" value="先生" placeholder="" checked />先生 &emsp;&emsp;
                        <input type="radio" name="gender" value="女士" placeholder="" />女士
                    </div>

                    <ul class="am-avg-sm-2 cols-box">
                        <li>
                            <div class="paraLg">
                                <p class="am-margin-left-0"><span>*</span>姓名</p>
                                <input type="text" name="name" placeholder="" required />
                            </div>
                        </li>
                        <li>
                            <div class="paraLg am-padding-left-xs">
                                <p class="am-margin-left-0"><span>*</span>电话</p>
                                <input type="tel" name="tel" placeholder="" required />
                            </div>
                        </li>
                    </ul>

                    <ul class="am-avg-sm-2 cols-box">
                        <li>
                            <div class="paraLg">
                                <p><span>*</span>电子邮箱</p>
                                <input type="email" name="email" placeholder="" required />
                            </div>
                        </li>
                        <li>
                            <div class="paraLg am-padding-left-xs">
                                <p class="am-margin-left-0">预约店铺</p>
                                <select name="places">
                                    <option value="哈尔滨金夫人店">哈尔滨金夫人店</option>
                                </select>
                            </div>
                        </li>
                    </ul>





                    <ul class="am-avg-sm-2 cols-box">
                        <li>
                            <div class="paraLg">
                                <p class="">来店日期</p>
                                <input type="date" name="comingDate" placeholder="" required="required" />
                            </div>
                        </li>
                        <li>
                            <div class="paraLg am-padding-left-xs">
                                <p class="margin-left-sm">来店经验</p>
                                <input type="radio" name="exper" value="有来店经验" placeholder="" checked />有 &emsp;&emsp;
                                <input type="radio" name="exper" value="无来店经验" placeholder="" />无
                            </div>
                        </li>
                    </ul>


                    <div>
                        <p>来店目的</p>
                        <textarea name="content" placeholder=""></textarea>
                    </div>

                    <div>
                        <input type="checkbox" name="confirmation" class="am-margin-0" value="希望接收" placeholder="" />
                        <span class="am-text-sm">我希望通过提供邮件等联系方式，收到Beonly活动和商品的宣传介绍资料。</span>
                    </div>

                    <div class="validate">
                        <div>
                            <p><span>*</span>验证码</p>
                            <input name="checkcode" type="text" maxlength="4" size="4" >
                            <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                        </div>

                        <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                        <input type="hidden" name="table" value="guestbook">

                        <button type="submit">提 交</button>
                    </div>





                </form>

            </article>

        </div>
    </div>
</div>

<div class="sticky-right">
    <img src="/assets/image/124.png" class="am-img-responsive" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 600, height: 700}" alt="contact">
    <img src="/assets/image/125.png" class="am-img-responsive" data-am-smooth-scroll alt="to top">
</div>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/assets/js/amazeui.min.js"></script>
<script src="/assets/js/js.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=2ab9a8e5f4c7f4b99d508d3d0025b954"></script>

<script>
    $(document).ready(function () {

        $("nav .nav-list>li:nth-child(2)").mouseenter(function () {

            $(".drop-jiezhi").show().siblings().hide();

        });
        $("nav .nav-list>li:nth-child(3)").mouseenter(function () {

            $(".drop-luozuan").show().siblings().hide();

        });
        $("nav .nav-list>li:nth-child(4)").mouseenter(function () {

            $(".drop-peishi").show().siblings().hide();

        });

        $("header nav").mouseleave(function () {

            $(".dropdowns").children().hide();

        });

    })
</script>


</body>

</html>";s:12:"compile_time";i:1539938553;}";