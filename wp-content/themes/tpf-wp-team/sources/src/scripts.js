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

tpfObjects.faqItem = function () {
    if (jQuery('.faqItem').length > 0) {
        jQuery('.faqItem__title').click(function () {
            jQuery(this).closest('.faqItem').toggleClass('actived');
        })
    }

}

tpfObjects.coverHbsptFormPopups = function () {
    jQuery('.sgpb-popup-overlay').click(function () {
        jQuery('.sgpb-popup-dialog-main-div-wrapper .hs-form-iframe').each(function () {
            jQuery(this).removeClass('actived');
        })
    })
    jQuery('.sgpb-popup-dialog-main-div-wrapper .hs-form-iframe').each(function () {
        if (jQuery(this).hasClass('actived') == false) {
            jQuery(this).addClass('actived');
            var haftSectionBgForm = jQuery(this).closest('.haftSectionBgForm');
            var head = jQuery(this).contents().find("head");
            //var body = jQuery(this).contents().find("body");
            if (jQuery(this).contents().find('#coverhsform').length == 0 && jQuery(this).contents().find('#coverhsform-2').length == 0) {
                var version = Math.floor(Math.random() * 99999);
                var css = "<link id='coverhsform' rel='stylesheet' href='" + global_params.themes_url + "/dist/css/cover_iframe.css?ver=" + version + "' id='cover_iframe' type='text/css' media='all' />";
                var css2 = "<link id='coverhsform-2' rel='stylesheet' href='" + global_params.themes_url + "/dist/css/cover_iframe_background.css?ver=" + version + "' id='cover_iframe_bg_form' type='text/css' media='all' />";
                // var js = "<script type='text/javascript' src='" + global_params.themes_url + "/dist/js/cover_iframe.js?ver=" + version + "' id='cover_iframe'></script>"
                jQuery(head).append(css);
                if (haftSectionBgForm.html() !== undefined) {
                    jQuery(head).append(css2);
                }
                // jQuery(body).append(js);
            }
        }
    })
}

tpfObjects.coverHbsptForm = function () {
    jQuery('.content .hs-form-iframe').each(function () {
        if (jQuery(this).hasClass('actived') == false) {
            jQuery(this).addClass('actived');
            var haftSectionBgForm = jQuery(this).closest('.haftSectionBgForm');
            var head = jQuery(this).contents().find("head");
            //var body = jQuery(this).contents().find("body");
            var version = Math.floor(Math.random() * 99999);
            var css = "<link rel='stylesheet' href='" + global_params.themes_url + "/dist/css/cover_iframe.css?ver=" + version + "' id='cover_iframe' type='text/css' media='all' />";
            var css2 = "<link rel='stylesheet' href='" + global_params.themes_url + "/dist/css/cover_iframe_background.css?ver=" + version + "' id='cover_iframe_bg_form' type='text/css' media='all' />";
            // var js = "<script type='text/javascript' src='" + global_params.themes_url + "/dist/js/cover_iframe.js?ver=" + version + "' id='cover_iframe'></script>"
            jQuery(head).append(css);
            if (haftSectionBgForm.html() !== undefined) {
                jQuery(head).append(css2);
            }
            // jQuery(body).append(js);
        }
    })
}

tpfObjects.tabsContent = function () {
    if (jQuery('.tabsContent').length > 0) {
        jQuery('.tabsContent__tab').click(function () {
            var id = jQuery(this).data('id');
            var tabsContents = jQuery(this).closest('.tabsContents');
            tabsContents.find('.tabsContent__tab').each(function () {
                jQuery(this).removeClass('actived');
            })
            jQuery(this).toggleClass('actived');
            tabsContents.find('.tabsContent__content').each(function () {
                jQuery(this).removeClass('actived');
            })
            tabsContents.find('#' + id).toggleClass('actived');
        })
    }
}

tpfObjects.coverSocials = function () {
    if (jQuery('.facebook-reviews  .HeaderTitle__Text-sc-cxt6be-2.cOdTFM').length > 0) {
        jQuery('.facebook-reviews .HeaderTitle__Text-sc-cxt6be-2.cOdTFM').html('<span class="h2">Facebook Reviews</span>')
    }
    if (jQuery('.google-reviews  .HeaderTitle__Text-sc-cxt6be-2.cOdTFM').length > 0) {
        jQuery('.google-reviews .HeaderTitle__Text-sc-cxt6be-2.cOdTFM').html('<span class="h2">Google Reviews</span>')
    }
}

function handler(e) {
    e.preventDefault();
    videotarget = this.getAttribute("href");
    filename = videotarget.substr(0, videotarget.lastIndexOf('.')) || videotarget;
    video = document.querySelector("#dragonball video");
    video.removeAttribute("controls");
    video.removeAttribute("poster");
    source = document.querySelectorAll("#dragonball video source");
    source[0].src = filename + ".mp4";
    source[1].src = filename + ".webm";
    video.load();
    video.play();
}

jQuery(document).ready(function ($) {
    MatchHeight.init();
    tpfObjects.hamb();
    tpfObjects.faqItem();
    tpfObjects.tabsContent();

    jQuery('.sg-popup-custom-01').on('click', function () {
        setTimeout(function () {
            tpfObjects.coverHbsptFormPopups();
        }, 100);
    })

    setTimeout(function () {
        tpfObjects.coverHbsptForm();
    }, 800);
    setTimeout(function () {
        tpfObjects.coverSocials();
    }, 500);


    jQuery('iframe').load(function () {
        jQuery('iframe').contents().find("head")
            .append(jQuery("<style type='text/css'>  .label{color: red !important}  </style>"));
    });

    if (jQuery('#courseGallery').length > 0) {
        $('#courseGallery').owlCarousel({
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

    if (jQuery('#experts').length > 0) {
        $('#experts').owlCarousel({
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