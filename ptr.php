<!DOCTYPE html>
<html>
  <head>
    <title>下拉刷新</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart>

    <div class="weui-pull-to-refresh__layer">
      <div class='weui-pull-to-refresh__arrow'></div>
      <div class='weui-pull-to-refresh__preloader'></div>
      <div class="down">下拉刷新</div>
      <div class="up">释放刷新</div>
      <div class="refresh">正在刷新</div>
    </div>

    <h1 class="demos-title">下拉刷新</h1>
    <p>Time: <span id="time">下拉我试试</span></p>
    <p>
      <a href="javascript:;" class="weui-btn weui-btn_primary" id="trigger">通过JS触发下拉刷新</a>
    </p>
    <div id="list" class='demos-content-padded'>
      <% for(var i=0;i<5;i++) { %>
      <p>《世界著名计算机教材精选·人工智能:一种现代的方法(第3版)》是最权威、最经典的人工智能教材，已被全世界100多个国家的1200多所大学用作教材。《世界著名计算机教材精选·人工智能:一种现代的方法(第3版)》的最新版全面而系统地介绍了人工智能的理论和实践，阐述了人工智能领域的核心内容，并深入介绍了各个主要的研究方向。全书分为七大部分：第Ⅰ部分“人工智能”，第Ⅱ部分“问题求解”，第Ⅲ部分“知识、推理与规划”，第Ⅳ部分“不确定知识与推理”，第Ⅴ部分“学习”，第Ⅵ部分“通信、感知与行动”，第Ⅶ部分“结论”。《世界著名计算机教材精选·人工智能:一种现代的方法(第3版)》既详细介绍了人工智能的基本概念、思想和算法，还描述了其各个研究方向最前沿的进展，同时收集整理了详实的历史文献与事件。《世界著名计算机教材精选·人工智能:一种现代的方法(第3版)》适合于不同层次和领域的研究人员及学生，是高等院校本科生和研究生人工智能课的首选教材，也是相关领域的科研与工程技术人员的重要参考书。</p>
      <% } %>
    </div>
    <?php require("_foot.php"); ?>
    <script>
      $(document.body).pullToRefresh(function() {
        setTimeout(function() {
          $("#time").text(new Date);
          $(document.body).pullToRefreshDone();
        }, 2000);
      });
      $("#trigger").click(function () {
        $(document.body).pullToRefresh('triggerPullToRefresh')
      })
    </script>
  </body>

</html>
