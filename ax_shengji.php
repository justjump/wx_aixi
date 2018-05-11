<!DOCTYPE html>
<html>

<head>
    <title>系统升级中</title>
    <?php require("_head.php"); ?>
  

  </head>

  <body ontouchstart class="body_upgrade body_flex1">
  <svg id="ckLine" xmlns="http://www.w3.org/2000/svg" width="1000" height="1000"></svg>

    <div class="upgrade">
        <div class="bg"></div>
        <div class="phone">
        <span>客服电话：<a href="tel:400-186-0070">400-186-0070</a></span>
        </div>
    </div>

<?php require("_foot.php"); ?>
  <script src="/lib/js/ckline.js"></script>
    <script type="text/javascript">
$('#ckLine').ckLine({
    leftRight: true,
    strokeColor: '#faead09e',
    interval: 800,
    animateTime: 1600,
    animationTimeRange: [800, 1600]
});
</script>
  </body>
</html>
