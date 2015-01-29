<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}
    </head>
    <body>
        <div id="page_wrap">
            {{ Theme::partial('header') }}
            {{ Theme::partial('slider') }}
            {{ Theme::place('content') }}
            {{ Theme::partial('footer') }}
        </div>  
        {{ Theme::asset()->scripts() }}
        {{ Theme::partial('defaultjs') }}
        {{ Theme::asset()->container('footer')->scripts() }}
        <script type="text/javascript">
            //------JCAROUSEL-------------
            function mycarousel_initCallback(carousel){
                // Disable autoscrolling if the user clicks the prev or next button.
                carousel.buttonNext.bind('click', function() {
                    carousel.startAuto(0);
                });
                carousel.buttonPrev.bind('click', function() {
                    carousel.startAuto(0);
                });
                // Pause autoscrolling if the user moves with the cursor over the clip.
                carousel.clip.hover(function() {
                    carousel.stopAuto();
                }, function() {
                    carousel.startAuto();
                });
            };
            jQuery(document).ready(function() {
                jQuery('#mycarousel, #mycarouselnew').jcarousel({
                    auto: 0,
                    wrap: 'last',
                    initCallback: mycarousel_initCallback
                });
            }); 
        </script>
        <script type="text/javascript">
            jQuery(function($){
                $(".tweet").tweet({
                  join_text: "auto",
                  username: "html5awesome",
                  avatar_size: 48,
                  count: 3,
                  auto_join_text_default: " we said, ",
                  auto_join_text_ed: " we ",
                  auto_join_text_ing: " we were ",
                  auto_join_text_reply: " we replied ",
                  auto_join_text_url: " we were checking out ",
                  loading_text: "loading tweets..."
                });
            });
        </script>
        <script type="text/javascript">(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        {{ Theme::partial('analytic') }}
    </body>
</html>