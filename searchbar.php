<!DOCTYPE html>
<html>
  <head>
    <title>jQuery WeUI</title>
    <?php require("_head.php"); ?>
  </head>

  <body ontouchstart>
    <div class="weui-search-bar" id="searchBar">
      <form class="weui-search-bar__form" action="#">
        <div class="weui-search-bar__box">
          <i class="weui-icon-search"></i>
          <input type="search" class="weui-search-bar__input" id="searchInput" placeholder="搜索" required="">
          <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
        </div>
        <label class="weui-search-bar__label" id="searchText" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
          <i class="weui-icon-search"></i>
          <span>搜索</span>
        </label>
      </form>
      <a href="javascript:" class="weui-search-bar__cancel-btn" id="searchCancel">取消</a>
    </div>
    <?php require("_foot.php"); ?>
  </body>
</html>
