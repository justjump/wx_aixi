<!DOCTYPE html>
<html>
  <head>
    <title>jQuery WeUI</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart>


    <header class='demos-header'>
      <h1 class="demos-title">滑动删除</h1>
    </header>

    <div class="bd">
      <div class="page__bd">
        <div class="weui-cells">
          <div class="weui-cell weui-cell_swiped" id="swipe1">
            <div class="weui-cell__bd">
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <p>左滑列表</p>
                </div>
                <div class="weui-cell__ft">向左滑动试试</div>
              </div>
            </div>
            <div class="weui-cell__ft">
              <a class="weui-swiped-btn weui-swiped-btn_warn delete-swipeout" href="javascript:">删除</a>
              <a class="weui-swiped-btn weui-swiped-btn_default close-swipeout" href="javascript:">关闭</a>
            </div>
          </div>
          <div class="weui-cell weui-cell_swiped">
            <div class="weui-cell__bd">
              <div class="weui-cell">
                <div class="weui-cell__bd">
                  <p>左滑列表</p>
                </div>
                <div class="weui-cell__ft">向左滑动试试</div>
              </div>
            </div>
            <div class="weui-cell__ft">
              <a class="weui-swiped-btn weui-swiped-btn_warn delete-swipeout" href="javascript:">删除</a>
            </div>
          </div>
          <div class="weui-cell weui-cell_swiped">
            <div class="weui-cell__bd">
              <div class="weui-cell">
                <div class="weui-cell__hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
                <div class="weui-cell__bd">
                  <p>左滑列表</p>
                </div>
                <div class="weui-cell__ft">向左滑动试试</div>
              </div>
            </div>
            <div class="weui-cell__ft">
              <a class="weui-swiped-btn weui-swiped-btn_default close-swipeout" href="javascript:">取消关注</a>
            </div>
          </div>
        </div>
        <div class="button_sp_area" style="text-align: center;">
          <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary" id="open">打开第一个</a>
          <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_default" id="close">关闭第一个</a>
        </div>
      </div>
    </div>
    <?php require("_foot.php"); ?>

    <script>
      $('.delete-swipeout').click(function () {
        $(this).parents('.weui-cell').remove()
      })
      $('.close-swipeout').click(function () {
        $(this).parents('.weui-cell').swipeout('close')
      })
      $("#open").click( function () { $("#swipe1").swipeout('open') })
      $("#close").click( function () { $("#swipe1").swipeout('close') })
      $("#swipe1").click( function () { console.log('click') })
    </script>
  </body>
</html>
