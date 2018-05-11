<!DOCTYPE html>
<html>
  <head>
    <title>jQuery WeUI</title>
    <?php require("_head.php"); ?>
    <style>
      .icon-box {
        margin-bottom: 25px;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center
      }

      .icon-box i {
        margin-right: 18px
      }

      .icon-box__ctn {
        -webkit-flex-shrink: 100;
        flex-shrink: 100
      }

      .icon-box__title {
        font-weight: 400
      }

      .icon-box__desc {
        margin-top: 6px;
        font-size: 12px;
        color: #888
      }

      .icon_sp_area {
        margin-top: 10px;
        text-align: left
      }

      .icon_sp_area i:before {
        margin-bottom: 5px
      }
    </style>
  </head>

  <body ontouchstart>
    <header class='demos-header'>
      <h1 class="demos-title">图标</h1>
    </header>

    <div class='demos-content-padded'>
      <div class="icon-box">
        <i class="weui-icon-success weui-icon_msg"></i>
        <div class="icon-box__ctn">
          <h3 class="icon-box__title">成功</h3>
          <p class="icon-box__desc">用于表示操作顺利达成</p>
        </div>
      </div>
      <div class="icon-box">
        <i class="weui-icon-info weui-icon_msg"></i>
        <div class="icon-box__ctn">
          <h3 class="icon-box__title">提示</h3>
          <p class="icon-box__desc">用于表示信息提示；也常用于缺乏条件的操作拦截，提示用户所需信息</p>
        </div>
      </div>
      <div class="icon-box">
        <i class="weui-icon-warn weui-icon_msg-primary"></i>
        <div class="icon-box__ctn">
          <h3 class="icon-box__title">普通警告</h3>
          <p class="icon-box__desc">用于表示操作后将引起一定后果的情况</p>
        </div>
      </div>
      <div class="icon-box">
        <i class="weui-icon-warn weui-icon_msg"></i>
        <div class="icon-box__ctn">
          <h3 class="icon-box__title">强烈警告</h3>
          <p class="icon-box__desc">用于表示操作后将引起严重的不可挽回的后果的情况</p>
        </div>
      </div>
      <div class="icon-box">
        <i class="weui-icon-waiting weui-icon_msg"></i>
        <div class="icon-box__ctn">
          <h3 class="icon-box__title">等待</h3>
          <p class="icon-box__desc">用于表示等待</p>
        </div>
      </div>
      <div class="icon_sp_area">
        <i class="weui-icon-success"></i>
        <i class="weui-icon-success-no-circle"></i>
        <i class="weui-icon-circle"></i>
        <i class="weui-icon-warn"></i>
        <i class="weui-icon-download"></i>
        <i class="weui-icon-info-circle"></i>
        <i class="weui-icon-cancel"></i>
        <i class="weui-icon-search"></i>
      </div>
    </div>
    <?php require("_foot.php"); ?>
  </body>
</html>
