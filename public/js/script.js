$(function(){
    $('.js-slick-slider').slick({
        infinite: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000
    });
    $('.js-gallery-slider').slick({
        infinite: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000
    });
    $('.js-move-top-menu').hover(
        function() {
            $('.page__nav--top-menu').addClass('css-move-to-right');
        }, function() {
            $('.page__nav--top-menu').removeClass('css-move-to-right');
        }
    );
    $('.js-toggle-menu').on('click tap', function () {
        $('.page__nav--mobile-menu').fadeToggle(300);
    });
    $('.js-open-news').on('click tap', function () {
        let news = $(this).parents('.page__content--news-row').find('.page__content--news-text');
        $('.page__content--news-text').removeClass('full');
        news.addClass('full');
    });
    $('.js-close-fullimg').on('click tap', function() {
        $(this).parent().fadeOut();
        $('body').css('overflow', 'auto');
    });
    $('.js-open-fullimg').on('click tap', function() {
        let src = $(this).find('img').attr('src'),
            fullimg = $('.page__fullimg-popup'),
            imgId = $(this).attr('data-point');

        $('body').css('overflow', 'hidden');
        $('.js-gallery-slider').slick('slickGoTo', imgId);

        fullimg.fadeIn();
        fullimg.find('img').attr('src', src);
    });
    $('.js-back-to-movie').on('click tap', function(){
        let parent = $('.page__movie'),
            popup = $('.page__fullinfo');

        popup.fadeOut();
        parent.slideDown();
        $('.page__title--lg').show();
    });
    $('.js-open-fullinfo').on('click tap', function() {
        let parent = $(this).parents('.page__movie'),
            description = parent.find('.page__movie-description'),
            popup = $('.page__fullinfo'),
            src = parent.find('img').attr('src'),
            name = description.find('p:eq(0)').text(),
            year = description.find('p:eq(1)').text(),
            country = description.find('p:eq(2)').text(),
            type = description.find('p:eq(3)').text(),
            length = description.find('p:eq(4)').text(),
            about = description.find('p:eq(6)').text(),
            director = description.find('p:eq(7)').text();

        $("html, body").animate({ scrollTop: 0 }, "slow");
        popup.fadeIn();

        $('.page__movie').slideUp();
        $('.page__title--lg').hide();

        popup.find('img').attr('src', src);
        popup.find('.js-movie-info--name ').text(name);
        popup.find('.js-movie-info--year').text(year);
        popup.find('.js-movie-info--country').text(country);
        popup.find('.js-movie-info--type').text(type);
        popup.find('.js-movie-info--length').text(length);
        popup.find('.js-movie-info--about').text(about);
        popup.find('.js-movie-info--director').text(director);
    });
});
