<!DOCTYPE html>
<html>
  <head>
    <title>jQuery WeUI</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart>
    <div class="weui-tab">
      <div class="weui-navbar">
        <div class="weui-navbar__item weui-navbar__item--on" href="#tab1">
          选项一
        </div>
        <div class="weui-navbar__item" href="#tab2">
          选项二
        </div>
        <div class="weui-navbar__item" href="#tab3">
          选项三
        </div>
      </div>
      <div class="weui-tab__bd">
        <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active infinite">
          <h1 class="doc-head">页面一</h1>
          <div class="content-padded">
            <p>jQuery API - jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. If you're new to jQuery, we recommend that you check out the jQuery Learning Center.</p>
            <p>jQuery API - jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. If you're new to jQuery, we recommend that you check out the jQuery Learning Center.</p>
            <p>jQuery API - jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. If you're new to jQuery, we recommend that you check out the jQuery Learning Center.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
          </div>
          <div class="weui-loadmore">
            <i class="weui-loading"></i>
            <span class="weui-loadmore__tips">正在加载</span>
          </div>
        </div>
        <div id="tab2" class="weui-tab__bd-item infinite">
          <h1 class="doc-head">页面二</h1>
          <div class="content-padded">
            <p>A great way to get introduced to AngularJS is to work through this tutorial, which walks you through the construction of an AngularJS web app. The app you will build is a catalog that displays a list of Android devices, lets you filter the list to see only devices that interest you, and then view details for any device.</p>
            <p>A great way to get introduced to AngularJS is to work through this tutorial, which walks you through the construction of an AngularJS web app. The app you will build is a catalog that displays a list of Android devices, lets you filter the list to see only devices that interest you, and then view details for any device.</p>
            <p>A great way to get introduced to AngularJS is to work through this tutorial, which walks you through the construction of an AngularJS web app. The app you will build is a catalog that displays a list of Android devices, lets you filter the list to see only devices that interest you, and then view details for any device.</p>
            <p>A great way to get introduced to AngularJS is to work through this tutorial, which walks you through the construction of an AngularJS web app. The app you will build is a catalog that displays a list of Android devices, lets you filter the list to see only devices that interest you, and then view details for any device.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
          </div>
          <div class="weui-loadmore">
            <i class="weui-loading"></i>
            <span class="weui-loadmore__tips">正在加载</span>
          </div>
        </div>
        <div id="tab3" class="weui-tab__bd-item infinite">
          <div class="content-padded">
            <h1 class="doc-head">页面三</h1>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
            <p>Lots of people use React as the V in MVC. Since React makes no assumptions about the rest of your technology stack, it's easy to try it out on a small feature in an existing project.</p>
          </div>
          <div class="weui-loadmore">
            <i class="weui-loading"></i>
            <span class="weui-loadmore__tips">正在加载</span>
          </div>
        </div>
      </div>
    </div>
    <?php require("_foot.php"); ?>
    <script>
      $(".infinite").infinite().on("infinite", function() {
        var self = this;
        if(self.loading) return;
        console.log(self)
        self.loading = true;
        console.log(self);
        setTimeout(function() {
          $(self).find(".content-padded").append("<p>我是加载的新内容。我是加载的新内容。。。我是加载的新内容。。。我是加载的新内容。。。我是加载的新内容。。。我是加载的新内容。。。我是加载的新内容。。。我是加载的新内容。。。我是加载的新内容。。。。。</p>");
          self.loading = false;
        }, 2000);   //模拟延迟
      });
    </script>
  </body>
</html>
