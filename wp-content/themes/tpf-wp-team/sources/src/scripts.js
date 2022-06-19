import './styles/index.scss';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import 'owl.carousel';
import MatchHeight from 'matchheight';
import LazyLoad from "vanilla-lazyload";
// import 'lazysizes';
// import 'lazysizes/plugins/parent-fit/ls.parent-fit';

var lazyLoadInstance = new LazyLoad({
    // Your custom settings go here
});

var tpfObjects = {};
tpfObjects.hamb = function () {
    jQuery('.hamb').click(function () {
        jQuery(this).toggleClass('actived');
        jQuery('.header').toggleClass('actived');
    })
}


tpfObjects.menu = function(){
    var currentTop;
    jQuery(window).scroll(function(x){
        currentTop =  jQuery(window).scrollTop();
        if(currentTop >= 60){
            jQuery('body').addClass('sticked');
        }else{
            jQuery('body').removeClass('sticked');
        }
    })
}

tpfObjects.goalTargets = function(){
    jQuery('.goals__targets').owlCarousel({
        loop:false,
        items:1,
        nav:true,  
        dots: false, 
        margin: 32,
        responsive:{
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            }
        }
    });
}



jQuery(document).ready(function ($) {
    MatchHeight.init();
    tpfObjects.hamb();
    tpfObjects.menu();
    tpfObjects.goalTargets();


    if (jQuery('.courseGallery').length > 0) {
        $('.courseGallery').owlCarousel({
            lazyLoad: true,
            nav:true,
            // center:true,
            autoWidth:true,
            // margin: 0,
            loop: true,
            mouseDrag: true,
            dots:false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,                
                },
                767:{
                    items:3,                
                },
                980:{
                    items:4,                
                },
                1199:{
                    items:5,                
                }
            }
        });
    }

    if (jQuery('.experts').length > 0) {
        $('.experts').owlCarousel({
            lazyLoad: true,
            nav:false,
            // center:true,
            // autoWidth:true,
            margin: 16,
            loop: true,
            mouseDrag: true,
            dots:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,                
                },
                767:{
                    items:3,                
                },
            }
        });
    }
});