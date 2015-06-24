define(['jquery','bootstrap','hover','jqzoom','organictabs','prettyPhoto','tipsy'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            $(document).ready(function(){
                $("#tab").organicTabs({
                    "speed": 200
                });

                $('.jqzoom').jqzoom({
                    zoomType: 'innerzoom',
                    preloadImages: false,
                    zoomWidth: 300,
                    alwaysOn:false
                });

                // view grid & list produk
                $("a.switcher").bind("click", function(e){
                    e.preventDefault();
                    var theid = $(this).attr("id");
                    var theproducts = $("ul#products");
                    var classNames = $(this).attr('class').split(' ');
                    var gridthumb = "images/products/grid-default-thumb.png";
                    var listthumb = "images/products/list-default-thumb.png";

                    if($(this).hasClass("active")) {
                        // if currently clicked button has the active class
                        // then we do nothing!
                        return false;
                    } else {
                        // otherwise we are clicking on the inactive button
                        // and in the process of switching views!
                        if(theid == "gridview") {
                            $(this).addClass("active");
                            $("#listview").removeClass("active");
                            //$("#listview").children("img").attr("src","images/list-view.png");

                            var theimg = $(this).children("img");
                            //theimg.attr("src","images/grid-view-active.png");

                            // remove the list class and change to grid
                            theproducts.removeClass("list");
                            theproducts.addClass("grid");

                            // update all thumbnails to larger size
                            $("img.thumb").attr("src",gridthumb);
                        }
                        else if(theid == "listview") {
                            $(this).addClass("active");
                            $("#gridview").removeClass("active");
                            //$("#gridview").children("img").attr("src","images/grid-view.png");

                            var theimg = $(this).children("img");
                            //theimg.attr("src","images/list-view-active.png");

                            // remove the grid view and change to list
                            theproducts.removeClass("grid")
                            theproducts.addClass("list");
                            // update all thumbnails to smaller size
                            $("img.thumb").attr("src",listthumb);
                        } 
                    }
                });

                // hover produk
                $('ul.da-thumbs > li, div.da-thumbs div, li.da-thumbs div').hoverdir();
            });
            
            $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

            //------TIPSY TOOLTIP-------------
            $('a.tip').tipsy({fade: true, gravity: 's'});
        };
    }
});