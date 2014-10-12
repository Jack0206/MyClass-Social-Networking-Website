function processCollapsableList() {
    $('#collapse_list li')
        .css('cursor','pointer')
        .css('list-style-image','none');
    $('#collapse_list li:has(ul)')
        .click(function(event){
                if (this == event.target) {
                $(this).css('list-style-image',
                    (!$(this).children().is(':hidden')) ? 'url(../Pics/plusbox.gif)' : 'url(../Pics/minusbox.gif)');
                $(this).children().toggle();
                }
                return false;
                })
    .css({cursor:'pointer', 'list-style-image':'url(../Pics/plusbox.gif)'})
        .children().hide();
    $('#collapse_list li:not(:has(ul))').css({'cursor':'default', 'list-style':'square'});
}
