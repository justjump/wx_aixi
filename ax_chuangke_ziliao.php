<!DOCTYPE html>
<html>

<head>
    <title>创科合作</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart class="body_chuangke_tijiao body_baoxiu body_flex1">
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
<div class=" weui-cells_form frm_chuangke">
<form action="ax_baoxiu_success.php">
<div class="weui-cell baoxiu">
    <div class="weui-cell__hd ">
        <span class="span1">小区名称</span>
    </div>
    <div class="weui-cell__bd ">
<input class="weui-input" type="text" placeholder="请输入...">
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">小区地址
      </span>
    </div>
    <div class="weui-cell__bd  ">
       <a href="#" class="dizhi"><i class="iconfont">
                  <svg class="icon" aria-hidden="true">
                      <use xlink:href="#icon-dingwei"></use>
                  </svg>
                  </i></a>
             <input class="weui-input" type="text" placeholder="请输入地址...">     
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">描述详情</span>
    </div>
    <div class="weui-cell__bd ">
        <textarea name="xiangximiaoshu" class="weui-textarea" placeholder="请大致描述小区详情，如人流、车位等情况...." rows="5"></textarea>
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">上传照片</span>
    </div>
    <div class="weui-cell__bd ">
        <div class="weui_uploader_input_wrp">
            <input class="weui_uploader_input js_file" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
        </div>
    </div>
    <div class="weui-cell__bd w100 album">
        <img src="/lib/images/icon_nav_photo.png" alt="">
        <img src="/lib/images/icon_nav_photo.png" alt="">
        <img src="/lib/images/icon_nav_photo.png" alt="">
        <img src="/lib/images/icon_nav_photo.png" alt="">
        <img src="/lib/images/icon_nav_photo.png" alt="">
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">您的姓名</span>
    </div>
    <div class="weui-cell__bd ">
<input class="weui-input" type="text" placeholder="请输入...">
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">您的电话</span>
    </div>
    <div class="weui-cell__bd ">
<input class="weui-input" type="text" placeholder="请输入...">
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">物业负责人姓名</span>
    </div>
    <div class="weui-cell__bd ">
<input class="weui-input" type="text" placeholder="请输入...">
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">物业负责人电话</span>
    </div>
    <div class="weui-cell__bd ">
<input class="weui-input" type="text" placeholder="请输入...">
    </div>
    <div class="weui-btn-area">
      <a class="weui-btn weui-btn_primary" href="javascript:$('form').submit()" id="showTooltips">提交审核</a>
    </div>
</div>
</form>
</div>
  <?php require("_foot.php"); ?>
  <script>
    // $(' 6 v6t7textarea').focus(function(event) {
    //   /* Act on the event */
    //   $('header').css({
    //     marginTop: '100vw'
    //   });
    // }).blur(function(event) {
    //   /* Act on the event */
    //    $('header').css({
    //     marginTop: '0'
    //   });
    // });;
  </script>
  </body>
</html>
