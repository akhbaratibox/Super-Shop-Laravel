
$(function () {
    $('#category-menu-icon, #category-sidebar').on('mouseover', function (event) {
        $('#hover-category-menu').show();
        $('#category-menu-icon').addClass('active');
    }).on('mouseout', function (event) {
        $('#hover-category-menu').hide();
        $('#category-menu-icon').removeClass('active');
    });
});
// Bootstrap selected
$('.sortSelect').each(function(index, element) {
    $('.sortSelect').select2({
        theme: "default sortSelectCustom"
    });
});
function morebrands(em){
    if($(em).hasClass('on')){
        $(em).removeClass('on');
        $('#brands-collapse-box').removeClass('full');
        $(em).children('i').addClass('fa-plus').removeClass('fa-minus');
        $(em).children('span').html('More');
    }else {
        $(em).addClass('on');
        $('#brands-collapse-box').addClass('full');
        $(em).children('i').removeClass('fa-plus').addClass('fa-minus');
        $(em).children('span').html('Less');
    }
}
$(document).ready(function() {
    $('.tagsInput').tagsinput('items');
    $('.summernote').summernote({
        height: 300,
        popover: {
            image: [],
            link: [],
            air: []
        }
    });
});
