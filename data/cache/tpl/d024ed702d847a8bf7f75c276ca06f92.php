<?php exit;?>001571125203d2627e68851ef67983467fa09c1676d3s:4690:"a:2:{s:8:"template";s:4626:"<hr class="grey" />

<section class="qr-codes am-padding-sm">

    <p class="am-margin-vertical-xs am-text-center am-text-sm">Beonly官方微信</p>
    <img src="/assets/image/31.png" class="am-img-responsive am-center am-margin-bottom-sm" width="120" alt="Beonly官方微信" />

    <p class="am-margin-vertical-xs am-text-xs am-text-center"><b>点击订阅，获取产品目录！</b></p>
    <p class="am-text-xs am-margin-vertical-xs am-text-center">了解原创设计、特别活动、新店开张等更多消息</p>
    <button class="am-center" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 530}">
        <span class="am-padding-vertical-xs">邮箱</span><span class="am-padding-vertical-xs">订阅</span>
    </button>

</section>


<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">联系顾问
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd contact-form">

            <article>

                <form class="am-padding-top-xs" action="<?php echo U('DuxCms/Form/push');?>" method="post">

                    <p class="am-margin-top-xs am-margin-bottom-0 am-text-left">您的个人信息</p>

                    <div>
                        <p>
                            <span>*</span>称谓 &emsp;
                            <input type="radio" name="gender" value="先生" placeholder="" checked />先生 &emsp;&emsp;
                            <input type="radio" name="gender" value="女士" placeholder="" />女士
                        </p>

                    </div>

                    <div>
                        <p><span>*</span>姓名</p>
                        <input type="text" name="name" placeholder="" />
                    </div>

                    <div>
                        <p><span>*</span>电话</p>
                        <input type="tel" name="tel" placeholder="" />
                    </div>

                    <div>
                        <p><span>*</span>电子邮箱</p>
                        <input type="email" name="email" placeholder="" />
                    </div>

                    <div>
                        <p><span>*</span>您的讯息关于</p>
                        <select name="infoFrom" id="" >
                            <option value="询价" selected>询价</option>
                            <option value="产品目录">产品目录</option>
                            <option value="体验店详情">体验店详情</option>
                            <option value="售后服务">售后服务</option>
                        </select>
                    </div>

                    <div>
                        <p><span>*</span>您的讯息</p>
                        <textarea name="content" placeholder=""></textarea>
                    </div>

                    <div>
                        <input type="checkbox" name="confirmation" class="am-margin-0" value="希望接收" placeholder="" />
                        <span class="am-text-xs">我希望通过上述所提供的任何一种通讯方式接收Beonly相关信息。</span>
                    </div>

                    <div class="validate">
                        <p><span>*</span>验证码</p>
                        <input name="checkcode" type="text" maxlength="4" size="4" >
                        <img title="点击刷新" src="<?php echo url('duxcms/ValidateCode/index');?>" align="absbottom" onclick="this.src='<?php echo url('duxcms/ValidateCode/index');?>&'+Math.random();" />
                    </div>

                    <input type="hidden" name="token" value="<?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?>">
                    <input type="hidden" name="table" value="guestbook">

                    <button type="submit">提 交</button>
                </form>

            </article>

        </div>
    </div>
</div>

<div class="sticky-right">
    <img src="/assets/image/124.png" class="am-img-responsive" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 300, height: 530}" alt="contact">
    <img src="/assets/image/125.png" class="am-img-responsive" data-am-smooth-scroll alt="to top">
</div>

<footer class="am-padding-sm am-text-xs am-text-center">Copyright © 2007-2018 壹钻网（深圳）珠宝有限公司 版权所有 并保留所有权利 粤ICP备18115921号-1</footer>";s:12:"compile_time";i:1539589203;}";