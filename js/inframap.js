$(function() {
    filterMarkers = function (category) {
        for (i = 0; i < markers1.length; i++) {
            marker = gmarkers1[i];
            // markerMain = gmarkers1[0];

            /*находим маркер комплекса и віводим его в любом случае*/
            var markerMain = gmarkers1.find(item => item.category === 'main');
            // console.log(item);


            if (marker.category == category || category == 'all') {
                marker.setMap(map);
                markerMain.setMap(map);
                // marker.setAnimation(google.maps.Animation.DROP);
            }
            else {
                marker.setMap(null);
                markerMain.setMap(map);
            }
        }
    }
    var gmarkers1 = [];
    var markers1 = [];
    var infowindow = new google.maps.InfoWindow({
        content: ''
    });

    markers1 = [
                ['0', '', 50.404719, 30.674205, 'main', '/img/infra/main.png', 'Terracotta'],
                ['1', '', 50.4060754,30.6715102, 'medicine', '/img/infra/medicine.png', 'Аптека'],
                ['2', '', 50.4041285,30.6724872, 'univer', '/img/infra/univer.png', 'Київський інститут інтелектуальної власності та права Національного університету "Одеська юридична академія'],
                ['3', '', 50.405448, 30.683474, 'school', '/img/infra/school.png', 'Школа № 113'],
                ['4', '', 50.4060753,30.6715102, 'garden', '/img/infra/garden.png', 'Дитячий центр розвитку "Бембі'],
                // ['5', '', 50.438122, 30.615120, 'sport', '/img/infra/sport.png', 'FreeStyle'],
                ['6', '', 50.4067132,30.6660338, 'mall', '/img/infra/shop.png', 'Торговый центр Кубик'],
                ['7', '', 50.407465, 30.665792, 'market', '/img/infra/market.png', 'Фуршет'],
                ['8', '', 50.4048171,30.6755013, 'school', '/img/infra/school.png', 'Спеціальна школа І-ІІ ступенів №10'],
                // ['9', '', 50.451456, 30.597852, 'apteka', '/img/infra/apteka.png', 'Аптека Низких Цен'],
                                ];
    function addMarker(marker) {
        var category = marker[4];
        var title = marker[1];
        var pos = new google.maps.LatLng(marker[2], marker[3]);
        var content = marker[6];
        var markerIcon = {
            url : marker[5]
        };
        marker1 = new google.maps.Marker({
            title: title,
            position: pos,
            category: category,
            map: map,
            icon: markerIcon,
            // animation: google.maps.Animation.DROP,
        });
        gmarkers1.push(marker1);
        // Marker click listener
        google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
            return function () {
                infowindow.setContent(content);
                infowindow.open(map, marker1);
                map.panTo(this.getPosition());
            }
        })(marker1, content));
    }
      // Create the map
    var map = new google.maps.Map($('#infra_map')[0], {
        zoom: 15,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        scrollwheel: false,
        fullscreenControl: false,
        center: new google.maps.LatLng(50.405, 30.676)
    });

    for (i = 0; i < markers1.length; i++) {
        addMarker(markers1[i]);
    }
		$.getJSON("/js/mapStyle.json", function(data) {
	         map.setOptions({styles: data});
	     });

});
