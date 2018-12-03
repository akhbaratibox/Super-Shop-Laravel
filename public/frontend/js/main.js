
$(function () {
    $('#category-menu-icon, #category-sidebar').on('mouseover', function (event) {
        $('#hover-category-menu').show();
        $('#category-menu-icon').addClass('active');
    }).on('mouseout', function (event) {
        $('#hover-category-menu').hide();
        $('#category-menu-icon').removeClass('active');
    });

    if ($('.slick-carousel').length > 0) {
        $('.slick-carousel').each(function() {
            var $this = $(this);

            var slidesPerViewXs = $this.data('slick-xs-items');
            var slidesPerViewSm = $this.data('slick-sm-items');
            var slidesPerViewMd = $this.data('slick-md-items');
            var slidesPerViewLg = $this.data('slick-lg-items');
            var slidesPerViewXl = $this.data('slick-items');

            var slidesCenterMode = $this.data('slick-center');
            var slidesArrows = $this.data('slick-arrows');
            var slidesDots = $this.data('slick-dots');
            var slidesRows = $this.data('slick-rows');

            slidesPerViewXs = !slidesPerViewXs ? slidesPerViewXl : slidesPerViewXs;
            slidesPerViewSm = !slidesPerViewSm ? slidesPerViewXl : slidesPerViewSm;
            slidesPerViewMd = !slidesPerViewMd ? slidesPerViewXl : slidesPerViewMd;
            slidesPerViewLg = !slidesPerViewLg ? slidesPerViewXl : slidesPerViewLg;
            slidesPerViewXl = !slidesPerViewXl ? 1 : slidesPerViewXl;
            slidesCenterMode = !slidesCenterMode ? false : slidesCenterMode;
            slidesArrows = !slidesArrows ? true : slidesArrows;
            slidesDots = !slidesDots ? false : slidesDots;
            slidesRows = !slidesRows ? 1 : slidesRows;

            $this.slick({
                slidesToShow: slidesPerViewXl,
                autoplay: false,
                dots: slidesDots,
                arrows: slidesArrows,
                infinite: true,
                rows: slidesRows,
                centerPadding: '0px',
                centerMode: slidesCenterMode,
                speed: 300,
                prevArrow: '<button type="button" class="slick-prev"><span class="prev-icon"></span></button>',
                nextArrow: '<button type="button" class="slick-next"><span class="next-icon"></span></button>',
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: slidesPerViewLg,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: slidesPerViewMd,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: slidesPerViewSm,
                            dots: true,
                            arrows: false,
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: slidesPerViewXs,
                            dots: true,
                            arrows: false,
                        }
                    }
                ]
            });
        });
    }
    // if ($('.slick-slider').length > 0) {
    //     $('.slick-slider').each(function() {
    //         var $this = $(this);
    //         $this.slick({
    //             slidesToShow: 1,
    //             dots: true,
    //             prevArrow: '<button type="button" class="slick-prev"><span class="prev-icon"></span></button>',
    //             nextArrow: '<button type="button" class="slick-next"><span class="next-icon"></span></button>',
    //         });
    //     });
    // }


    /*
        Smooth scroll functionality for anchor links (animates the scroll
        rather than a sudden jump in the page)
    */
    $('.all-category-menu a').bind('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var target = $(this).attr("href"); // Set the target as variable

        $('html, body').stop().animate({
                scrollTop: $(target).offset().top - 120
        }, 600, function() {
                // location.hash = target; //attach the hash (#jumptarget) to the pageurl
        });

        return false;
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

$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();
    $('.sub-category-menu').each(function(i) {
            if ($(this).position().top <= scrollDistance) {
                    $('.all-category-menu li.active').removeClass('active');
                    $('.all-category-menu li').eq(i).addClass('active');
            }
    });
}).scroll();