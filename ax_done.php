<!DOCTYPE html>
<html>

<head>
    <title>感谢使用</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart class="body_done ">
  <header class='header_ban'>
    <div class="weui-flex">
        <div class="weui-flex__item">
            <div class="placeholder ph1">
                <img src="/lib/images/logo.png" alt="">
                <p>嗳喜——为爱洗车</p>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder ph2"><img src="/lib/images/machine.png" alt=""></div>
        </div>
    </div>
</header>

<div class="weui-cell washing_done">
    <div class="weui-cell__bd">
      <span class="span1">您本次消费：</span>
      <span class="span2">7.12元</span>
    </div>
    <div class="weui-cell__bd">
      <span class="span1">金额余额：</span>
      <span class="span2">107.12元</span>
    </div>
    <div class="weui-cell__bd">
      <span class="span1">元宝余额：</span>
      <span class="span2">20元</span>
    </div>
    <div class="weui-cell__bd">
      <span class="span1">使用时长：</span>
      <span class="span2">16分22秒</span>
    </div>
    <div class="weui-cell__bd">
      <span class="span1">本次节水：</span>
      <span class="span2">18公升</span>
    </div>
    <div class="weui-cell__bd">
      <span class="span1">累计节水：</span>
      <span class="span2">208公升</span>
    </div>
    <div class="weui-cell__bd w100">
      <span class="span1">惠州市节水排名：</span>
      <span class="span2">188名</span>
      <span class="span3">5</span>
    </div>
    <div class="weui-cell__bd w100">
      <span class="span1">授予您的称号为：</span>
      <span class="span2">环保小渣渣</span>
    </div>
    </div>
<div class="weui-cell ranking">
   <!-- 我的排名 -->
    <p class="me">我的排名</p>
       <div class="item">
          <span class="num">188.</span>
         <img src="/lib/images/avatar3.jpg">
         <span class="name">我好帅</span>
         <span class="count">4344升</span>
       </div>
  <p class="me">惠州市节水排名榜</p>
   <!-- 我的排名END -->
<?php 
$str0="幻城是神秘的这种神秘却一直在吸引我们穿过文字的密林而向前总有一个什么东西在混沌中撩逗着我们使我们无法停止目光的追寻这种氛围使我们有点晕晕乎乎觉得自己离开了地面来到了一个陌生的世界这个世界风烟滚滚扑朔迷离时隐时现似有似无其风光犹如是倒映在水中的物象依稀可见我们似乎感觉到了黑暗中的宇宙的呼吸但我们无法弄清楚这种呼吸究竟来自何方天上城池虚幻莫测我们举首眺望心中既有渺小感却又有崇高感直到最终我们也没有看清这个世界神秘依在";
$length0=mb_strlen($str0)-1;
  for($i=0;$i<30;$i++){
   ?>

<div class="item">
  <span class="num"><?php echo $i+1; ?>.</span>
         <img src="/lib/images/avatar3.jpg">
         <span class="name"><?php echo mb_substr($str0,rand(0,$length0),rand(3,6)); ?></span>
         <span class="count">4344升</span>
</div>
  <?php   
  }
 ?>

   
</div>
 <div class="btn_fix_bottom">
<div class="weui-btn-area">
  <p>分享到朋友圈让朋友们一起来洗车！</p>
  <a class="weui-btn weui-btn_mini weui-btn_default" href="./index.php?m=Weixin&c=Weixinuse&a=suggestionindex" id="showTooltips">我要投诉！</a>
</div>


  <?php require("_foot.php"); ?>
   <script>
      $('.weui-cell__bd .span3').html(function(i,a) {
        if(parseInt(a)>0){
          arr="icon-arrow_1"
        }else{
          arr="icon-arrow_"
        }
        var svg1='<i class="iconfont"><svg class="icon" aria-hidden="true"><use xlink:href="#'+arr+'"></use></svg></i>';
        return svg1+a;
      })
    </script>
  </body>
</html>
