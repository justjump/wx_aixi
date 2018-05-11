<!DOCTYPE html>
<html>

<head>
    <title>洗车中</title>
    <?php require("_head.php"); ?>
    <link rel="stylesheet" href="/lib/css/using.css?v=342423">
    <link rel="stylesheet" href="/lib/css/responsive.css?v=342423">
  </head>

  <body ontouchstart class="body_using ">
    <header class='header_ban'>
      <div class="weui-flex">
      <div class="weui-flex__item">
      <div class="placeholder ph1">
      <img src="/lib/images/logo.png" alt="">
      <p>嗳喜——为爱洗车</p>
      </div>
      </div>
      <div class="weui-flex__item"><div class="placeholder ph2"><img src="/lib/images/machine.png" alt=""></div></div>
    </div>
    </header>
<div class="weui-cell wc1">
      <div class="weui-cell__bd ">
          <h2 class="bg_jb_blue">设备已启动，进入计费状态</h2>
         </div>
           </div>   
          <div class="weui-cell tips card">
  <div class="tips0 border_b_after">
    <span class="t">
    <i class="iconfont">
        <svg class="icon" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-ren"></use>
        </svg>
    </i>消费流水号：</span>
    <span class="v">27707号（已完成）</span>
  </div>
  <div class="weui-cell__bd border_b_after">
    <span class="t">
      <i class="iconfont">
        <svg class="icon" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-gongsi"></use>
        </svg>
      </i>网点名称：
    </span>
    <span class="v">润丰四季</span>
  </div>
  <div class="weui-cell__bd border_b_after">
    <span class="t"><i class="iconfont">
      <svg class="icon" aria-hidden="true">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tiaoshi"></use>
      </svg>
      </i>设备编号：
    </span>
    <span class="v">18010014</span>
  </div>
  <div class="weui-cell__bd border_b_after">
    <span class="t"><i class="iconfont">
    <svg class="icon" aria-hidden="true">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-RMB"></use>
    </svg>
    </i>账户金额：</span><span class="v">0.00元</span>
  </div>
  <div class="weui-cell__bd border_b_after">
    <span class="t"><i class="iconfont">
    <svg class="icon" aria-hidden="true">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-jingtou"></use>
    </svg>
    </i>元宝金额：</span><span class="v">0.00元</span>
  </div>
      <div class="weui-cell__bd border_b_after">
    <span class="t"><i class="iconfont">
    <svg class="icon" aria-hidden="true">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-RMB"></use>
    </svg>
    </i>消费金额：</span><span class="v">0.46元(已抵扣元宝0.00)</span>
    </div>
  
  <div class="weui-cell__bd ">
    <span class="t"><i class="iconfont">
    <svg class="icon" aria-hidden="true">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-rili"></use>
    </svg>
    </i>时间：</span><span class="v">2018-04-26 11:55:10</span>
  </div>
</div>
           <div class="weui-cell links">
             <div class="weui-cell__bd ">
     <a href="#" class="weui-btn weui-btn_plain-default cancle ">取消订单</a>
   <a href="ax_baoxiu.php" class="weui-btn weui-btn_plain-default ">设备故障，<br>点我报修！</a>

     <a href="#" class="weui-btn weui-btn_plain-default  open-popup"  data-target="#washingprocess">不会使用？<br>点我教你！</a>
     <a href="ax_tousu.php" class="weui-btn weui-btn_plain-default ">用得不爽？<br>点我投诉！</a>
    </div>
</div>

<div id="washingprocess" class="weui-popup__container" style="display: none;z-index: 9999">
    <div class="weui-popup__overlay"></div>
    <a href="javascript:;" class="close close-popup"><i class="iconfont">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-close"></use>
        </svg>
        </i></a>
    <div class="weui-popup__modal">
        <div class="weui-cell chongzhi_choice wrap_shadow popup__container" id="">
            <div class="ttl1">
                <h3>洗车流程</h3>
                <span>Car washing process</span>
            </div>
            <ul>
                <li>
                    <div>步骤一</div>
                    <p>
                        打开嗳喜微信公众号，点击【扫码洗车】
                    </p>
                </li>
                <li>
                    <div>步骤二</div>
                    <p>
                        按【清水】键「开始冲洗车辆」
                        <small>温馨提示：手持水枪由上往下冲，枪头倾斜向前45度，距离车身20厘米最佳，避免身上溅水。</small>
                    </p>
                </li>
                <li>
                    <div>步骤三</div>
                    <p>
                        按【泡沫】键「开始打泡沫」
                        <small>温馨提示：手持泡沫枪绕车匀扫一遍即可。</small>
                    </p>
                </li>
                <li>
                    <div>步骤四</div>
                    <p>
                        再次按【泡沫】键「暂停设备」擦洗车辆
                        <small>温馨提示：设备暂停不扣费。洗车刷请清洗后使用。</small>
                    </p>
                </li>
                <li>
                    <div>步骤五</div>
                    <p>
                        按【清水】键「冲洗车身」
                    </p>
                </li>
                <li>
                    <div>步骤六</div>
                    <p>
                        按【清水】键「暂停设备」用毛巾擦干车辆
                    </p>
                </li>
                <li>
                    <div>步骤七</div>
                    <p>
                        按【吸尘】键「开始清洁车内灰尘」
                        <small>温馨提示：注意收好车内小物件，体积较大的纸屑与废弃物不可吸入，以免堵塞吸尘口。</small>
                    </p>
                </li>
                <li>
                    <div>步骤八</div>
                    <p>
                        按【吹风】键「开始风干车身或吹去车内浮尘」
                        <small>温馨提示：【吹风】键在设备右侧</small>
                    </p>
                </li>
            </ul>
            <div class="d2">如需消毒，结束当前消费后，需重新扫码。</div>
            <div class="ttl1">
                <h3>消毒流程</h3>
                <span>Car washing process</span>
            </div>
            <ul>
                <li>
                    <div>步骤一</div>
                    <p>
                        打开车内通风系统调至内循环功能，关闭车门窗，车窗摇下一条小缝。
                    </p>
                </li>
                <li>
                    <div>步骤二</div>
                    <p>
                        机身右侧取出消毒管，沿着车窗缝放入消 毒管，按【消毒】键，开始消毒。（ 静置15 分钟以上）
                    </p>
                </li>
                <li>
                    <div>步骤三</div>
                    <p>
                        取出消毒管，开车窗通风散气，同时开启汽车外循环功能，直到消毒气味散去，消毒结束。
                        <small>温馨提示：消毒请确保车内无人和宠物，消毒功能建议使用8元或以上、消毒时间在15分钟左右效果最佳。</small>
                    </p>
                </li>
            </ul>
            <div class="call">
                电话客服：<a href="tel:400-186-0070">400-186-0070</a>
            </div>
        </div>
    </div>
</div>


  <?php require("_foot.php"); ?>
  </body>
</html>
