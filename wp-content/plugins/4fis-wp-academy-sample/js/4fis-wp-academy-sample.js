jQuery(document).ready(function () {

    jQuery(".image-popup-vertical-fit").magnificPopup({
        type: "image",
        closeOnContentClick: true,
        mainClass: "mfp-img-mobile",
        image: {
            verticalFit: true
        }

    });

    jQuery(".image-popup-fit-width").magnificPopup({
        type: "image",
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    jQuery(".image-popup-no-margins").magnificPopup({
        type: "image",
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: "mfp-no-margins mfp-with-zoom",
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300
        }
    });

    jQuery(".popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: "<a href=" % url % ">The image #%curr%</a> could not be loaded.",
            titleSrc: function (item) {
                return item.el.attr("title") + "<small>by Marsel Van Oosten</small>";
            }
        }
    });

});