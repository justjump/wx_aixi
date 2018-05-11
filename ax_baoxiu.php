<!DOCTYPE html>
<html>

<head>
    <title>报修</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart class="body_baoxiu body_flex1">
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
<div class=" weui-cells_form">

<form action="ax_baoxiu_success.php">
<div class="weui-cell baoxiu">
    <p class="p1">很抱歉设备故障给您带来的不便，一经核实会退回本次消费并另作补偿。</p>
    <div class="weui-cell__hd ">
        <span class="span1">设备地点</span>
    </div>
    <div class="weui-cell__bd weui-cell_select">
          <select class="weui-select" id="shebeididian" name="shebeididian">
             <option rel="0" value="1">阳光海岸</option>
             <option rel="1" value="2">中天彩虹城</option>
             <option rel="2" value="3">西区华南城</option>
         </select>
    </div>
    <div class="weui-cell__hd ">
        <span class="span1">设备ID
      <small>设备ID在机器侧面</small>
      </span>
    </div>
    <div class="weui-cell__bd weui-cell_select ">
        <select class="weui-select" name="shebeiid" id="shebeiid">
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
      <p class="p1">嗳喜有最终解释权</p>
    </div>
</div>
</form>
</div>
  <?php require("_foot.php"); ?>
<script>
var $wangdian=[
    {'num':0,"name":"阳光海岸", "device_id":['1000','10001','10002']}, 
    {'num':1,"name":"中天彩虹城", "device_id":['2000','20001','20002']},
    {'num':2,"name":"西区华南城", "device_id":['3000','30001','30002']}
];
jQuery(document).ready(function($) {
  $('#shebeididian').change(function(event) {
    // console.log();
    var $devices_of_this=$wangdian[$(this).find('option:selected').attr('rel')].device_id;
    // console.log(typeof($devices_of_this));
    $('#shebeiid').empty();
      for (var i in $devices_of_this) {
          var opt=$('<option value="'+$devices_of_this[i]+'">'+$devices_of_this[i]+'</option>');
          opt.appendTo("#shebeiid");
      }
  });  
});
</script>
  </body>
</html>
