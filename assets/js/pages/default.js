define(['jquery','bootstrap','noty','dcmegamenu','easing','hoverintent','quovolver'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            // tampilkan error noty
            var msg = $('#message');
            if(msg.length){
                type = $(msg).attr('class');
                text = $(msg).html();
                noty({"text":text,"layout":"top","type":type});    
            }

            $(document).on('click', '#cart-link', function(){
                $("#cart-panel").slideToggle("slow");
            });

            $('#mega-menu-3').dcMegaMenu({
                rowItems: '2',
                speed: 'fast',
                effect: 'fade'
            });

            $(document).keydown(function(e) {
                if (e.keyCode == 27) {
                    $("#cart-panel").hide(0);
                }
            });

            //------SELECTED MENU IPAD, IPHONE-------------
            $("<select />").appendTo("nav");
            $("<option />", {
                "selected": "selected",
                "value"   : "",
                "text"    : "Go to..."
            }).appendTo("nav select");
          
            $("nav a").each(function() {
                var el = $(this);
                $("<option />", {
                    "value"   : el.attr("href"),
                    "text"    : el.text()
                }).appendTo("nav select");
            });

            $("nav select").change(function() {
                window.location = $(this).find("option:selected").val();
            });

            $(document).ready(function() {
                $('.feed').quovolver();
            });
        };
    }
});