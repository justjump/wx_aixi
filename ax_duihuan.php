<!DOCTYPE html>
<html>

<head>
    <title>充值中心2</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart class="body_duihuan body_flex1">
         <?php 
         require("yue.php");
          ?>
<div class="weui-cell wrap_shadow duihuan">
    <h2>请输入兑换码：</h2>
    
      <div class="pr">
                  <i class="iconfont">
                  <svg class="icon" aria-hidden="true">
                      <use xlink:href="#icon-ziliao"></use>
                  </svg>
                  </i>
                  <input class="weui-input" type="tel" placeholder="在此输入">
                </div>
</div>
 <div class="weui-btn-area">
           <a class="weui-btn weui-btn_primary" href="" id="showTooltips">确认兑换</a>
  </div>



  <?php require("_foot.php"); ?>
  <script>
 // $.alert({
 //   title: '恭喜您',
 //   text: '兑换成功',
 //   onOK: function() {
 //     //点击确认
 //   }
 // });


 //  $.alert({
 //   title: '<strong class="warnning">兑换失败</strong>',
 //   text: '失败原因.....',
 //   onOK: function() {
 //     //点击确认
 //   }
 // });
 
</script>
  </body>
</html>
