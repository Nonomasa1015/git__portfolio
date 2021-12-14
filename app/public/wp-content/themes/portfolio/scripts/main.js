$(function() {
    $('.header-slide').slick({
        accessibility: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 3000,
        dots:true,
        arrows: false,
        fade: true
        }); 
});

// $(function() {
//     //各要素の高さ
//     var headerHeight = $('.page-header').height();
//     var contentsHeight = $('.main').height();
//     var fixedSideBarHeight = $('.aside__inner').height();
//     //サイドバーの高さをコンテンツの高さと揃える
//     $('.aside').css('height', contentsHeight);
//     //追従を解除する場所
//     var scrollStopPos = contentsHeight-fixedSideBarHeight;
//     //イベント開始
//     $(window).scroll(function() {
//         //スクロール量
//         var scrollVal = $(window).scrollTop();
//         //追従区間
//         if(contentsHeight < scrollVal && scrollStopPos > scrollVal) {
//             $('.aside__inner').css({
//                 'position': 'fixed',
//                 'top': '0',
//                 'left': '0'
//             });
//         //追従解除
//         } else if(scrollStopPos < scrollVal) {
//             $('.aside__inner').css({
//                 'position': 'absolute',
//                 'top': '',
//                 'bottom': '0'
//             });
//         //デフォルト
//         } else {
//             $('.aside__inner').css('position', 'static');
//         }
//     });
// });



//box部分が.waypoint()を呼び出す要素
$(".article, .portfolio__box, .copy__box, .achivement__footer, .portfolio__footer, .copy__footer, .index__article, .taxonomy__article").waypoint({
    handler(direction){
        //.boxが画面内に入った時に実行される処理をここに記入
        //direction引数には、下方向のスクロール時は"down"
        //上スクロール時は"up"
        if(direction === "down") {
        $(this.element).addClass("animate__fadeInUp");
    
        //waypointoを削除することでこれ以降handlerが呼ばれなくなる
        this.destroy();
        }
        },
        //要素が画面の上端がどの位置に来た時にhandlerを実行するのか
        //0%なら画面の一番上、50%なら画面の真ん中、100%なら画面の一番下で実行
        //画面の一番下に来たらhandlerを実行
        offset: "100%",
});

$(".myself__box, .widget").waypoint({
    handler(direction){
        if(direction === "down") {
        $(this.element).addClass("animate__zoomIn");
        this.destroy();
        }
        },
        offset: "100%",
});

$(".heading, .searchPage__top").waypoint({
    handler(direction){
        if(direction === "down") {
        $(this.element).addClass("animate__fadeInLeft");
        this.destroy();
        }
        },
        offset: "100%",
});

$(".achivement__header-right").waypoint({
    handler(direction){
        if(direction === "down") {
        $(this.element).addClass("animate__fadeInRight");
        this.destroy();
        }
        },
        offset: "100%",
});

class MobileMenu {
    constructor() {
        this.DOM = {};
        this.DOM.btn = document.querySelector('.mobileBtn');
    }
}

$('.mobileBtn').on('click', function(){

	$('.mobileBtn__bar').toggleClass('rotate');
	$('.mobileBtn').toggleClass('rotate');

});


$('.mobileBtn').on('click', function(){

	$('.mobile').toggleClass('down');
	$('.container').toggleClass('none');
	$('.footer').toggleClass('none');

});