
$(function() {
    $("#highlightedwork a")
        .mouseover(function() { 
            var src = $(this).find("img.cs-logo").attr("src").match(/[^\.]+/) + "-hover.png";
            $(this).find("img.cs-logo").attr("src", src);
        })
        .mouseout(function() {
            var src = $(this).find("img.cs-logo").attr("src").replace("-hover.png", ".png");
            $(this).find("img.cs-logo").attr("src", src);
        });
});