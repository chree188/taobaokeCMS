<!-- 图片懒加载方式一 -->
<!-- <script>
    var num = document.getElementsByTagName('img').length;
    var img = document.getElementsByTagName("img");
    var n = 0; //存储图片加载到的位置，避免每次都从第一张图片开始遍历
    lazyload(); //页面载入完毕加载可是区域内的图片
    window.onscroll = lazyload;
    function lazyload() { //监听页面滚动事件
        var seeHeight = document.documentElement.clientHeight; //可见区域高度
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop; //滚动条距离顶部高度
        for (var i = n; i < num; i++) {
            if (img[i].offsetTop < seeHeight + scrollTop) {
                var original = img[i].getAttribute("data-original")
                if ( original != null) {
                    img[i].src = '/img/loading.gif';
                    img[i].src = img[i].getAttribute("data-original");
                }
                n = i + 1;
            }
        }
    }
</script> -->
<!-- 图片懒加载方式二 -->
<script src="https://cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("img.lazy").lazyload({
        effect: "fadeIn",
        threshold: 200,
        failure_limit : 20,
        skip_invisible : false,
        placeholder: "/img/loading.gif"
      });
  });
</script>
