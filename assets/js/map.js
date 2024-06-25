;(function() {
	
	ymaps.ready(function () {
    var myMap = new maps.Map('ymap', {
            center: [55.767398, 37.593030],
            zoom: 12
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Creating a content layout.
        MyIconContentLayout = maps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new maps.Placemark(myMap.getCenter(), {
            balloonContent: 'г.Москва, ул.Тверская, 14'
        }, {
            /**
             * Options.
             * You must specify this type of layout.
             */
            iconLayout: 'default#image',
            // Custom image for the placemark icon.
            iconImageHref: 'https://nixi-ks.ru/ssl/u/8f/263270597211e9b140ccc05b42e152/-/icon-2446689.png',
            // The size of the placemark.
            iconImageSize: [42, 42],
            /**
             * The offset of the upper left corner of the icon relative
             * to its "tail" (the anchor point).
             */
            iconImageOffset: [-5, -38]
        }),

        myPlacemarkWithContent = new maps.Placemark([55.661574, 37.573856], {
            hintContent: 'A custom placemark icon with contents',
            balloonContent: 'This one — for Christmas',
            iconContent: '12'
        }, {
            /**
             * Options.
             * You must specify this type of layout.
             */
            iconLayout: 'default#imageWithContent',
            // Custom image for the placemark icon.
            iconImageHref: 'images/ball.png',
            // The size of the placemark.
            iconImageSize: [48, 48],
            /**
             * The offset of the upper left corner of the icon relative
             * to its "tail" (the anchor point).
             */
            iconImageOffset: [-24, -24],
            // Offset of the layer with content relative to the layer with the image.
            iconContentOffset: [15, 15],
            // Content layout.
            iconContentLayout: MyIconContentLayout
        });

    myMap.geoObjects
        .add(myPlacemark)
        .add(myPlacemarkWithContent);
});

	
})();