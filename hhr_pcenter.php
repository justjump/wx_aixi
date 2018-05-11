<!DOCTYPE html>
<html>

<head>
    <title>合伙人</title>
    <?php require("_head.php"); ?>
    <link rel="stylesheet" href="/lib/css/hhr.css">
  </head>

<body ontouchstart class="body_person body_hhr_person ">
<header class='header_swiper'>
      <div class="swiper_wrapper">
        <div class="swipers slick-slider">
            <div class="swiper_slide slick-slide"><img src="__STATIC__/lib/images/ban/1.jpg" alt=""><p class="sinfo">自助洗车上手视频!</p></div>
            <div class="swiper_slide slick-slide"><img src="__STATIC__/lib/images/ban/2.jpg" alt=""><p class="sinfo">新用户注册首次洗车最低8元!</p></div>
            <div class="swiper_slide slick-slide"><img src="__STATIC__/lib/images/ban/3.jpg" alt=""><p class="sinfo">嗳喜招商大会将于4月14日举行!</p></div>
        </div>
        <div class="dots">

        </div>
    </div>
</header>

<div class="opts ">
    <i class="iconfont">
    <svg class="icon" aria-hidden="true">
        <use xlink:href="#icon-renminbi"></use>
    </svg>
     </i>
    <a href="javascript:;" id="songqian" class="open-popup" data-target="#money">我要送钱!</a>
    <span class="sqclose">X</span>
</div>




<div class="weui-tab xfjl flex1">
      <div class="weui-navbar">
        <a class="weui-navbar__item weui-bar__item--on" href="#tab1">
        今日数据
        </a>
        <a class="weui-navbar__item" href="#tab2">
          历史数据
        </a>  
         <a class="weui-navbar__item" href="#tab3">
          对账单
        </a>
     <!--    <a class="weui-navbar__item" href="#tab3">
          历史对账单
        </a> -->
      </div>
      <div class="weui-tab__bd">
        <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active">
       <div class=" weui-cells_form">
<form action="ax_baoxiu_success.php">
<div class="weui-cell baoxiu">
  
    <div class="weui-cell__hd ">
        <span class="span1">设备选择</span>
    </div>
    <div class="weui-cell__bd weui-cell_select">
          <select class="weui-select" name="shebeiid" id="select_zonglan">
             <option value="all">总览</option>
             <option value="1">1800001122</option>
             <option value="2">1800001123</option>
             <option value="3">1800001123</option>
         </select>
    </div>
</div>
</form>
</div>
<div id="today_all">
        <div class="weui-cell ys1">
              <div class="weui-cell__bd zong" rel="all">总营收：<b>32344</b>元</div>
               <div class="weui-cell__ft zong" rel="all">设备总启动：<b>3444</b>次</div>
               <div class="weui-cell__bd zong" rel="1">01营收：<b>1344</b>元</div>
               <div class="weui-cell__ft zong" rel="1">01启动：<b>44</b>次</div>
                <div class="weui-cell__bd zong" rel="2">02营收：<b>2344</b>元</div>
               <div class="weui-cell__ft zong" rel="2">02启动：<b>144</b>次</div>
                <div class="weui-cell__bd zong" rel="3">03营收：<b>3344</b>元</div>
               <div class="weui-cell__ft zong" rel="3">03启动：<b>254</b>次</div>
         
      </div>   
      <div class="rcd">
      <p>使用记录</p>
        <?php for($i=0;$i<30;$i++){ ?>
      <div class="weui-cell cell_rcd" rel="<?php $r= rand(1,3);echo $r; ?>">
            <div class="weui-cell__hd ">
              <span class="span1">秋名山老司机</span>
          </div>
           <div class="weui-cell__bd ">
              <span class="span2">于<b class="b1">10:32</b><b class="b2">在</b><b class="b3"><?php echo $r; ?></b>号机器</span>
          </div>
          <div class="weui-cell__ft ">
              <span class="span3">消费了：<b class="b4">8</b>元</span>
          </div>
      </div>
          <?php } ?>
      </div>
</div>

        </div>
        <div id="tab2" class="weui-tab__bd-item">
        <div class=" weui-cells_form">
<form action="ax_baoxiu_success.php">
<div class="weui-cell baoxiu">
  
    <div class="weui-cell__hd ">
        <span class="span1">设备选择</span>
    </div>
    <div class="weui-cell__bd weui-cell_select">
          <select class="weui-select" name="shebeiid" id="select_zonglan_history">
             <option value="all">总览</option>
             <option value="1" >1800001121</option>
             <option value="2">1800001122</option>
             <option value="3">1800001123</option>
         </select>
    </div>


</div>

  <!-- 所有机器 -->
  <!-- 一次读出所有设备的数据,前端筛选显示 -->
  <div class="cell_rcd all">
                        <div class="weui-cell rili">
                            <div class="weui-cell__hd"><label for="time3" class="weui-label">日期</label></div>
                            <div class="weui-cell__bd">
                                <input class="weui-input" id="date2" type="text" value="2018-04-04" readonly="">
                                <span>至</span>
                                <input class="weui-input" id="date3" type="text" value="2018-05-03" readonly="">
                            </div>
                            <div class="weui-cell__ft">
                                <a href="" class="query_date">查询</a>
                            </div>

                        </div>
                        <div class="weui-cell sjd">
                          <div class="weui-cell__hd">
                           <i class="iconfont">
                          <svg class="icon" aria-hidden="true">
                              <use xlink:href="#icon-riqi"></use>
                          </svg>
                           </i>
                           </div>
                          <div class="weui-cell__bd">
                            <input class="weui-input" id="timediff" type="text" value="2018/04/09 - 2018/05/09" readonly="" data-values="2018/04/09 - 2018/05/09">
                          </div>
                          <div class="weui-cell__ft">
                            <a href="" class="query_date"> <i class="iconfont">
                          <svg class="icon" aria-hidden="true">
                              <use xlink:href="#icon-sousuo"></use>
                          </svg>
                           </i></a>
                          </div>
                        </div>
                        <div class="weui-cell qujian">
                            <p><span class="span1">2018-04-04</span>
                            <span class="span2"></span><span class="span3">2018-05-03</span></p>
                        </div>
                        
                        <div class="table_wrap all">
                          <table width="100%">
                            <tr>
                              <th>设备号</th>
                              <th>营收</th>
                              <th>启动</th>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr class="zj">
                              <td class="td_bh">总计</td>
                              <td class="td_je"><b>175329.87</b>元</td>
                              <td class="td_qd"><b>57224</b>次</td>
                            </tr>
                            

                          </table>
                        </div>
                             
                             <div class="table_wrap day">

                          <table width="100%">
                          <tr>
                            <th colspan="3"> <p class="date">2018年5月3日 星期日</p></th>
                          </tr>
                            <tr>
                              <th>设备号</th>
                              <th>营收</th>
                              <th>启动</th>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr>
                              <td class="td_bh">18010017</td>
                              <td class="td_je"><b>75329.87</b>元</td>
                              <td class="td_qd"><b>17224</b>次</td>
                            </tr>
                            <tr class="zj">
                              <td class="td_bh">总计</td>
                              <td class="td_je"><b>175329.87</b>元</td>
                              <td class="td_qd"><b>57224</b>次</td>
                            </tr>
                            

                          </table>
                        </div>                 
                    </div>
  <!-- 所有机器END -->
</form>
</div>

        </div>
        <div id="tab3" class="weui-tab__bd-item">
    <h3>上月对账单</h3>
    <div class="weui-cell duizhangdan">
        <div class="weui-cell__bd">
 <div class="table_wrap dzd">
   <table width="100%">
   <tr>
     <th colspan="3"> <p class="date">2018年4月</p></th>
   </tr>
     <tr>
       <td class="td_bh">总营收</td>
       <td class="td_je"><b>75329.87</b>元</td>
     </tr>
     <tr>
       <td class="td_bh">设备启动次数</td>
       <td class="td_je"><b>75329.87</b>元</td>
     </tr>
     <tr>
       <td class="td_bh">项目1</td>
       <td class="td_je"><b>75329.87</b>元</td>
     </tr>
     <tr>
       <td class="td_bh">项目2</td>
       <td class="td_je"><b>75329.87</b>元</td>
     </tr>
     <tr>
       <td class="td_bh">项目3</td>
       <td class="td_je"><b>75329.87</b>元</td>
     </tr>
     <tr class="zj">
       <td class="td_bh">备注</td>
       <td class="td_je"><b>175329.87</b>元</td>
     </tr>
   </table>
   </div>    
        </div>
    </div>
</div>

      </div>
    </div>

<div id="money" class="weui-popup__container" style="display: none;z-index: 9999">
    <div class="weui-popup__overlay"></div>
    <div class="weui-popup__modal">
        <div class="weui-cell chongzhi_choice wrap_shadow popup__container" id="">
            <div class="pagetitle">
                <h3 class="h3_title">为用户充值</h3>
            </div>
        <form action="" class="frm_reg frm_chongzhi flex1">
            <div class="weui-cell inputs">
                <div class="weui-cell__bd">
                        <i class="iconfont">
                          <svg class="icon" aria-hidden="true">
                              <use xlink:href="#icon-zhucedenglu"></use>
                          </svg>
                          </i>
                        <input class="weui-input" type="tel" placeholder="请输入用户手机号">
                </div>
                <div class="weui-cell__bd">
                        <i class="iconfont">
                          <svg class="icon" aria-hidden="true">
                              <use xlink:href="#icon-chongzhi"></use>
                          </svg>
                          </i>
                        <input class="weui-input" type="number" min="0" max="100" placeholder="请输入充值金额(元)">
                </div>
            </div>
            <div class="weui-cell btns">
                <div class="weui-cell__bd"> <a href="javascript:;" class="weui-btn weui-btn_primary">确认充值</a>
                    <a href="javascript:;" class="weui-btn btn_default close-popup">暂不充值</a>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>




    <div class="footer footer_bl">
      
    </div>
    <?php require("_foot.php"); ?>
    <script>
      $(".swiper_wrapper .swipers").slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        appendDots: ".swiper_wrapper .dots",
        customPaging: function(e, t) {
          return $('<span class="sdot" />')
        },
        draggable: true,
        touchMove: true,
        touchThreshold: 6
      })



      $("#date2").calendar({
        value: ['2015-12-12'],
        dateFormat: 'yyyy年mm月dd日'
      });

      $("#date3").calendar({
        value: ['2016-12-12'],
        dateFormat: 'yyyy年mm月dd日'
      });

      var $deviceid0;
      $('#select_zonglan_history').change(function(event) {
        $deviceid0 = $(this).val();
        if ($(this).val() == "all") {
          $('.did').removeClass('hide')
          $('.day_per_device').removeClass('day_per_device')
        } else {
          $.showLoading();
          $('#tab2 .yslist1').addClass('day_per_device')
          $('.did,.date0').addClass('hide');
          $('.did_' + $deviceid0 + " ,.date0").removeClass('hide');
          window.setTimeout(function(argument) {
            $.hideLoading();
          }, 1000)
        }
      });

      var $deviceid;
      $('#select_zonglan').change(function(event) {

        /* Act on the event */
        $deviceid = $(this).val();
        if ($(this).val() == "all") {
          $('#today_all .cell_rcd,#today_all .zong').show(100);
        } else {

          $('#today_all .cell_rcd,#today_all .zong').hide(100, function() {
            $('#today_all .cell_rcd,#today_all .zong').filter(function(index) {
              return $(this).attr('rel') == $deviceid;
            }).show();
          });


        }
      });

      $('.sqclose').click(function(event) {
        $('.opts').hide(200, function() {
          $.toast("刷新页面可重新显示", "text")
        })
      });
    //时段选择
      var timediff = [];
      timediff.push({
        title: "今天",
        value: 1
      });
      timediff.push({
        title: "本周",
        value: 2
      });
      timediff.push({
        title: "上周",
        value: 3
      });
      timediff.push({
        title: "本月",
        value: 4
      });
      timediff.push({
        title: "上月",
        value: 5
      });
      timediff.push({
        title: "最近7天",
        value: 6
      });
      timediff.push({
        title: "最近15天",
        value: 7
      });
      timediff.push({
        title: "最近30天",
        value: 8
      });
      timediff.push({
        title: "最近60天",
        value: 9
      });
      timediff.push({
        title: "最近90天",
        value: 10.1
      });
      timediff.push({
        title: "自定义",
        value: 11
      });
      $("#timediff").select({
        title: "选择时间段",
        items: timediff,
        input:"今天",
        onChange: function(d) {
          console.log(this, d);
        },
        onClose: function(d) {
           $('body,html').css({
            overflow: 'visible'
          });
           console.log(d.data.values);
           // if(!d.data.values){
           //  // alert();
           //  $('#timediff').attr({
           //    "value":'今天',
           //    "data-values":1
           //  })

           // }
          console.log("close");
        },
        onOpen: function() {
          console.log("open");
$('body,html').css({
            overflow: 'hidden'
          });
        },
      });
    </script>

  </body>
</html>
