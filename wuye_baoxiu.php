<!DOCTYPE html>
<html>

<head>
    <title>水电管理</title>
    <?php require("_head.php"); ?>
    <link rel="stylesheet" href="/lib/css/hhr.css">
  </head>

  <body ontouchstart class="body_baoxiu body_flex1 body_wuye_shuidian">
  <div class="weui-tab xfjl flex1">
      <div class="weui-navbar">
        <a class="weui-navbar__item weui-bar__item--on" href="#tab1">
        水电缴纳
        </a>
        <a class="weui-navbar__item" href="#tab2">
          紧急报错
        </a>
     
      </div>
      <div class="weui-tab__bd">
        <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active shuidianfei">
            <!-- tab1 content -->
              <h3><i class="iconfont">
                  <svg class="icon" aria-hidden="true">
                      <use xlink:href="#icon-shuidi"></use>
                  </svg>
                  </i>水费</h3>
           <div id="shui" class="card">
              
            <div class="weui-cell">
                <div class="weui-cell__hd ">
                        <span class="span1">水表图片：</span>
                    </div>
                    <div class="weui-cell__bd ">
                        <div class="weui_uploader_input_wrp">
                <input class="weui_uploader_input js_file" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                <img src="/lib/images/shuibiao.png" class="preview">
                        </div>
                    </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd ">
                        <span class="span1">上期读表数：</span>
                    </div>
                    <div class="weui-cell__bd "><input class="weui-input" type="number" pattern="[0-9]*" placeholder="请输入"></div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd ">
                        <span class="span1">本期读表数：</span>
                    </div>
                    <div class="weui-cell__bd "><input class="weui-input" type="number" pattern="[0-9]*" placeholder="请输入"></div>
            </div>
           </div>

        <!-- ↑↑↑↑↑↑ 水费结束 -->

         <h3><i class="iconfont">
                  <svg class="icon" aria-hidden="true">
                      <use xlink:href="#icon-dian"></use>
                  </svg>
                  </i>电费</h3>
           <div id="dian" class="card">
       
            <div class="weui-cell">
                <div class="weui-cell__hd ">
                        <span class="span1">电表图片：</span>
                    </div>
                    <div class="weui-cell__bd ">
                        <div class="weui_uploader_input_wrp">
                <input class="weui_uploader_input js_file" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
                <img src="/lib/images/dian.png" class="preview">
                        </div>
                    </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd ">
                        <span class="span1">上期读表数：</span>
                    </div>
                    <div class="weui-cell__bd "><input class="weui-input" type="number" pattern="[0-9]*" placeholder="请输入"></div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd ">
                        <span class="span1">本期读表数：</span>
                    </div>
                    <div class="weui-cell__bd "><input class="weui-input" type="number" pattern="[0-9]*" placeholder="请输入"></div>
            </div>
           </div>
                     <div class="weui-cell">
                <div class="weui-cell__hd ">
                        <span class="span1">备注：</span>
                    </div>
                    <div class="weui-cell__bd "> <textarea name="xiangximiaoshu" class="weui-textarea" placeholder="请输入内容..." rows="3"></textarea>
                    </div>
            </div>

            <div class="weui-cell">
                <div class="weui-btn-area">
      <a class="weui-btn weui-btn_primary" href="javascript" id="showTooltips">提交</a>
    </div>
            </div>
            
            <!-- tab1 content END -->
        </div>
        <div id="tab2" class="weui-tab__bd-item">
             <!-- tab2 content -->
<form action="ax_baoxiu_success.php">
<div class="weui-cell baoxiu">
    <p class="p1">很抱歉设备故障给您带来的不便，我们会在收到保修信息后尽快处理。</p>
    <div class="weui-cell__hd ">
        <span class="span1">设备地点</span>
    </div>
    <div class="weui-cell__bd weui-cell_select">
          <select class="weui-select" name="shebeididian">
             <option value="1">阳光海岸</option>
             <option value="2">中天彩虹城</option>
             <option value="3">西区华南城</option>
         </select>
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">设备ID
      <small>设备ID在机器侧面</small>
      </span>
    </div>
    <div class="weui-cell__bd weui-cell_select ">
        <select class="weui-select" name="shebeiid">
            <option value="1">001</option>
            <option value="2">002</option>
        </select>
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">故障部位</span>
    </div>
    <div class="weui-cell__bd weui-cell_select">
        <select class="weui-select" name="guzhangbuwei">
            <option value="1">001</option>
            <option value="2">002</option>
        </select>
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">详情描述</span>
    </div>
    <div class="weui-cell__bd ">
        <textarea name="xiangximiaoshu" class="weui-textarea" placeholder="请输入内容..." rows="3"></textarea>
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">上传图片</span>
    </div>
    <div class="weui-cell__bd ">
        <div class="weui_uploader_input_wrp">
            <input class="weui_uploader_input js_file" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="">
        </div>
    </div>
    <div class="weui-btn-area">
      <a class="weui-btn weui-btn_primary" href="javascript:$('form').submit()" id="showTooltips">提交</a>
    </div>
</div>
</form>
            <!-- tab2 content END -->
        </div>
          
        </div>
      </div>
    </div>

  

  <?php require("_foot.php"); ?>
 
  </body>
</html>
