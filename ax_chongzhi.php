<!DOCTYPE html>
<html>

<head>
    <title>充值中心</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart class="body_chongzhi body_flex1">
         <?php 
         require("yue.php");
          ?>
<div class="weui-cell zhifufangshi wrap_shadow">
    <div class="weui-cell__bd">
        <a href="weixin.sublime-project">
            <span class="item ">微信支付</span>
            <span class="fbt">亿万用户的选择，要快要安全</span>
        </a>
    </div>
    <div class="weui-cell__bd">
        <a href="#"><span class="item ">支付宝</span>
               </a>
    </div>
    <div class="weui-cell__bd">
        <a href="#"> <span class="item ">银联充值</span></a>
    </div>
</div>
<div class="weui-cell" id="tips">
    <div class="weui-cell__bd">
        <div class="textbox1">
            <div class="item">
                <h3>温馨提示：</h3>
                <div class="con">
                    <p>1、充值金额为 1:1</p>
                    <p>2、充值后若余额无变化，请刷新</p>
                </div>
            </div>
            <div class="item">
                <h3>客服：</h3>
                <div class="con">
                    <p>1、官方Q群：XXXXXXX</p>
                    <p>2、售后电话：400XXXXXXX（工作日9点-18点接听）</p>
                    <p>3、24小时服务热线：XXXXXXX</p>
                    <p>4、官方微信：嗳洗</p>
                    <p>5、官方微博：@嗳洗</p>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php require("_foot.php"); ?>
  </body>
</html>
