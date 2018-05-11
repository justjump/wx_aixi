<!DOCTYPE html>
<html>

<head>
    <title>城市合伙人登录</title>
    <?php require("_head.php"); ?>
    <link rel="stylesheet" href="/lib/css/hhr.css">
  </head>

  <body ontouchstart class="body_hhr_reg body_reg body_flex1">
    <header class='header_ban_hhr'>
      <div class="weui-flex">
      <div class="weui-flex__item">
      <div class="placeholder">
      <img src="/lib/images/ban/hhr.png" alt="">
      </div>
      </div>
    </div>
    </header>
    <div class="pagetitle">
      <h1 class="h1_title">为用户充值</h1>
    </div>
    <form action="" class="frm_reg frm_chongzhi flex1">
        <div class="weui-cell">
            <div class="weui-cell__bd">
                <div class="pr">
                  <i class="iconfont">
                  <svg class="icon" aria-hidden="true">
                      <use xlink:href="#icon-zhucedenglu"></use>
                  </svg>
                  </i>
                  <input class="weui-input" type="tel" placeholder="请输入用户手机号">
                </div>
            </div>
        </div>
        <div class="weui-cell">
            <div class="weui-cell__bd">
                <div class="pr">
                  <i class="iconfont">
                  <svg class="icon" aria-hidden="true">
                      <use xlink:href="#icon-chongzhi"></use>
                  </svg>
                  </i>
                  <input class="weui-input" type="number" min="0" max="100" placeholder="请输入充值金额(元)">
                </div>
            </div>
        </div>
        <div class="weui-cell">
        <div class="weui-cell__bd"> <a href="javascript:;" class="weui-btn weui-btn_primary">确认充值</a>
      
        </div>
          
           
        </div>
        

    </form>
    
    <div class="footer footer_bl">
      
    </div>
    <?php require("_foot.php"); ?>
  </body>
</html>
