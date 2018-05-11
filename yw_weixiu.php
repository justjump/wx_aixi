<!DOCTYPE html>
<html>

<head>
    <title>维修维护</title>
    <?php require("_head.php"); ?>
    <link rel="stylesheet" href="/lib/css/hhr.css">
  </head>

  <body ontouchstart class="body_baoxiu body_flex1 body_wuye_shuidian body_yunwei">
 <div class="weui-tab xfjl flex1">
    <div class="weui-navbar">
        <a class="weui-navbar__item weui-bar__item--on" href="#tab1">
       维修
        </a>
        <a class="weui-navbar__item" href="#tab2">
        维护
        </a>
    </div>
    <div class="weui-tab__bd wxwh">
        <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active  weui-cells_form weixiu">
            <form action="">
                <div class="wangdian">
                    <div class="weui-cell baoxiu">
                        <div class="weui-cell__hd ">
                            <span class="span1">网点：</span>
                        </div>
                        <div class="weui-cell__bd weui-cell_select">
                            <select class="weui-select" name="wangdian">
                                <option value="1">阳光海岸</option>
                                <option value="2">中天彩虹城</option>
                                <option value="3">西区华南城</option>
                            </select>
                        </div>
                 
                        <div class="weui-cell__hd ">
                            <span class="span1">设备编号：</span>
                        </div>
                        <div class="weui-cell__bd weui-cell_select">
                            <select class="weui-select" name="wangdian">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                  
                        <div class="weui-cell__hd ver">
                            <span class="span1">验证码：</span>
                        </div>
                        <div class="weui-cell__bd ver">
                            <input class="weui-input" type="text" placeholder="请输入验证码">
                        </div>
                        <div class="weui-cell__ft ver">
                            <img src="/lib/images/vercode.png" class="vercode">
                        </div>
                    </div>
                    <div class="weui-cell">
                        <div class="weui-btn-area">
                        <a class="weui-btn weui-btn_primary start2fix" href="" id="start2fix_1">开始维修</a>
                    </div>
                    </div>

                </div>
                <div class="fix_detail fix_detail1">
                    <div class="weui-cell baoxiu haosun">
                        <div class="weui-cell__hd  weui-cell_select">
                            <span>维修耗损：</span>
                            <select class="weui-select" name="wangdian">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="weui-cell__bd  weui-cell_select">
                             <span>数目：</span>
                            <select class="weui-select" name="wangdian">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="weui-cell__ft">
                          <a href="" class="plus">+</a>     
                        </div>
                    </div>
                    <div class="weui-cell__hd pic0">
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
                        </div>

                    </div>
                     <div class="weui-cell beizhu">
                <div class="weui-cell__hd ">
                        <span class="span1">备注：</span>
                    </div>
                    <div class="weui-cell__bd "> <textarea name="xiangximiaoshu" class="weui-textarea" placeholder="请输入内容..." rows="3"></textarea>
                    </div>
            </div>
            <div class="weui-cell">
                <div class="weui-btn-area">
      <a class="weui-btn weui-btn_primary" href="javascript" id="showTooltips">结束维护</a>
    </div>
            </div>
                </div>
            </form>
        </div>
        <div id="tab2" class="weui-tab__bd-item weihu">
            
            <form action="">
                <div class="wangdian">
                    <div class="weui-cell baoxiu">
                        <div class="weui-cell__hd ">
                            <span class="span1">网点：</span>
                        </div>
                        <div class="weui-cell__bd weui-cell_select">
                            <select class="weui-select" name="wangdian">
                                <option value="1">阳光海岸</option>
                                <option value="2">中天彩虹城</option>
                                <option value="3">西区华南城</option>
                            </select>
                        </div>
                 
                        <div class="weui-cell__hd ">
                            <span class="span1">设备编号：</span>
                        </div>
                        <div class="weui-cell__bd weui-cell_select">
                            <select class="weui-select" name="wangdian">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                  
                        <div class="weui-cell__hd ver">
                            <span class="span1">验证码：</span>
                        </div>
                        <div class="weui-cell__bd ver">
                            <input class="weui-input" type="text" placeholder="请输入验证码">
                        </div>
                        <div class="weui-cell__ft ver">
                            <img src="/lib/images/vercode.png" class="vercode">
                        </div>
                    </div>
                    <div class="weui-cell">
                        <div class="weui-btn-area">
                        <a class="weui-btn weui-btn_primary start2fix" href="" id="start2fix_2">开始维护</a>
                    </div>
                    </div>

                </div>
                <div class="fix_detail fix_detail2">
                    <div class="weui-cell baoxiu haosun">
                        <div class="weui-cell__hd  weui-cell_select">
                            <span>维护耗损：</span>
                            <select class="weui-select" name="wangdian">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="weui-cell__bd  weui-cell_select">
                             <span>数目：</span>
                            <select class="weui-select" name="wangdian">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="weui-cell__ft">
                          <a href="" class="plus">+</a>     
                        </div>
                    </div>
                    <div class="weui-cell__hd pic0">
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
                        </div>

                    </div>
                     <div class="weui-cell beizhu">
                <div class="weui-cell__hd ">
                        <span class="span1">备注：</span>
                    </div>
                    <div class="weui-cell__bd "> <textarea name="xiangximiaoshu" class="weui-textarea" placeholder="请输入内容..." rows="3"></textarea>
                    </div>
            </div>
            <div class="weui-cell">
                <div class="weui-btn-area">
      <a class="weui-btn weui-btn_primary" href="javascript" id="showTooltips">结束维护</a>
    </div>
            </div>
                </div>
            </form>
        
        </div>
    </div>
</div>


  <?php require("_foot.php"); ?>
 <script>
     function add0(i) {
         $('.body_yunwei .wxwh .fix_detail'+i+' .haosun .plus').click(function(event) {
        var c=$(this).parents('.fix_detail'+i).find('.haosun').last().clone();
        c.insertAfter($(this).parents('.fix_detail'+i).find('.haosun').last());
        $(this).hide();
          add0(i);
        return false;
     });
       
     }
      add0(1);
      add0(2);



      function start2fix(i){
        $('#start2fix_'+i).click(function(event) {
            // alert()
            $('.fix_detail'+i).prev('.wangdian').hide('200', function() {
                 $('.fix_detail'+i).show();
            });
            return false;
        });
      }
      start2fix(1);
      start2fix(2);
 </script>
  </body>
</html>
