<!DOCTYPE html>
<html>
  <head>
    <title>jQuery WeUI</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart>


    <header class='demos-header'>
      <h1 class="demos-title">Progress</h1>
    </header>

    <div class='demos-content-padded'>
      <div class="weui-progress">
        <div class="weui-progress__bar">
          <div class="weui-progress__inner-bar js_progress" style="width: 0%;"></div>
        </div>
        <a href="javascript:;" class="weui-progress__opr">
          <i class="weui-icon-cancel"></i>
        </a>
      </div>
      <br>
      <div class="weui-progress">
        <div class="weui-progress__bar">
          <div class="weui-progress__inner-bar js_progress" style="width: 50%;"></div>
        </div>
        <a href="javascript:;" class="weui-progress__opr">
          <i class="weui-icon-cancel"></i>
        </a>
      </div>
      <br>
      <div class="weui-progress">
        <div class="weui-progress__bar">
          <div class="weui-progress__inner-bar js_progress" style="width: 80%;"></div>
        </div>
        <a href="javascript:;" class="weui-progress__opr">
          <i class="weui-icon-cancel"></i>
        </a>
      </div>
      <div class="weui-btn-area">
        <a href="javascript:;" class="weui-btn weui-btn_primary" id="btnUpload">上传</a>
      </div>
    </div>
    <?php require("_foot.php"); ?>
  </body>
</html>
