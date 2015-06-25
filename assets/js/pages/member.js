define(['jquery','bootstrap','organictabs'], function($)
{
    return new function(){
        var self = this;
        self.run = function(){
            $("#tab").organicTabs({
                "speed": 200
            });
        };
    }
});