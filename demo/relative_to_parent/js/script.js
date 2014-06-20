(function(){
    updateCurtain();
})();

function updateCurtain(){
    var $curtain = $('#curtain');
    var $content = $('#curtain-content');
    var $curtainWidth = $curtain.width();
    var $contentWidth = $content.width();
    var $leftMargin = -($contentWidth/2 - $curtainWidth/2);

    $content.css('left',$leftMargin);
}

function triggerCurtain(){
    var $curtain = $('#curtain');

    if ($curtain.hasClass('open')) {
        $curtain.animate({
            right: "40%",
            left: "40%"
        },function(){
           updateCurtain();
           $(this).removeClass('open');
        });
    } else {
        $curtain.animate({
            right: "50%",
            left: "50%"
        },function(){
           updateCurtain();
           $(this).addClass('open');
        });
    }
}

(function($)
{

    $('#open-curtain-link').click(function(e){
        e.preventDefault();
        triggerCurtain();
    });

})(jQuery);

$(window).resize(function(){
  updateCurtain();
});
