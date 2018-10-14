
$(function () {
    $('#category-menu-icon, #category-sidebar').on('mouseover', function (event) {
        $('#hover-category-menu').show();
        $('#category-menu-icon').addClass('active');
    }).on('mouseout', function (event) {
        $('#hover-category-menu').hide();
        $('#category-menu-icon').removeClass('active');
    });
});
