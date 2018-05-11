<!DOCTYPE html>
<html>
  <head>
    <title>jQuery WeUI</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart>

    <header class='demos-header'>
      <h1 class="demos-title">Notification</h1>
    </header>

    <div class='demos-content-padded'>
      <a href="javascript:;" id='show-notification' class="weui-btn weui-btn_primary">显示通知</a>
    </div>
    <?php require("_foot.php"); ?>
    <script>
      $(document).on("click", "#show-notification", function() {
        $.noti({
          title: "中奖啦！",
          text: "点击领取腾讯撸啊撸杯二等奖！",
          media: "<img src='./images/present.png' />",
          data: {
            message: "逗你玩的!"
          },
          time: 3000,
          onClick: function(data) {
            $.alert(data.message);
          }
        });
      });
    </script>
  </body>
</html>
