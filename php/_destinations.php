<script>
    //slider-------------------------------------------------------------------
    $(document).ready(function() {
        $(".slider").each(function () {
            var obj = $(this);
            $(obj).append("<div class='nav'></div>");
            $(obj).find("li").each(function () {
                $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>");
                $(this).addClass("slider"+$(this).index());
            });
            $(obj).find("span").first().addClass("on");
        });
    });
    function sliderJS (obj, sl) {
        var ul = $(sl).find("ul");
        var bl = $(sl).find("li.slider"+obj);
        var step = $(bl).width();
        $(ul).animate({marginLeft: "-"+step*obj}, 500);
    }
    $(document).on("click", ".slider .nav span", function() {
        var sl = $(this).closest(".slider");
        $(sl).find("span").removeClass("on");
        $(this).addClass("on");
        var obj = $(this).attr("rel");
        sliderJS(obj, sl);
        return false;
    });

    'use strict';
    //tab----------------------------------------------------
    $(document).ready(function() {
        $(function () {
            var tabContainers = $('div.tabs > div');
            tabContainers.hide().filter(':first').show();

            $('div.tabs ul.tabNavigation a').click(function () {
                tabContainers.hide();
                tabContainers.filter(this.hash).show();
                $('div.tabs ul.tabNavigation a').removeClass('selected');
                $(this).addClass('selected');
                return false;
            }).filter(':first').click();
        });
    });
</script>

<div>
    <?php require_once "slider.php"; ?>
    <div class="article_photographer_wrapper">
        <div class="article_photographer">
            <h2 class="article_photographer_h2">Naturetour  Wild life Holidays</h2>
            <p><small>A selection of worldwide bird watching, wild flower and natural history holidays<br> (including wildlife tours, treks and cruises), all led by expert   <a style= "color: #28b028; font-weight: 600" href="#"><u>naturalist guides.</u></a></small></p>
        </div>
    <img class="article_photographer_img" src="/images/photo.png" alt="">
    </div>
    <div style="clear: both"></div>
    <?php require_once "tab_article.php"; ?>
</div>
