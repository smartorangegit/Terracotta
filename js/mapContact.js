$(function() {
    filterMarkers = function (category) {
        for (i = 0; i < markers1.length; i++) {
            marker = gmarkers1[i];
            var markerMain = gmarkers1.find(item => item.category === 'main');

            if (marker.category == category || category == 'all') {
                marker.setMap(map);
                markerMain.setMap(map);
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
                ['0', '', 50.404719, 30.674205, 'main', '/img/map/main.png', '<div class="mapinfo">Terracotta</div>'],
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
    var map = new google.maps.Map($('#map_contact')[0], {
        zoom: 17,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        scrollwheel: false,
        fullscreenControl: false,
        center: new google.maps.LatLng(50.404719, 30.674205)
    });

    for (i = 0; i < markers1.length; i++) {
        addMarker(markers1[i]);
    }


    var plan1 = [
      //section1
      {lat: 50.403703, lng: 30.673043},
      {lat: 50.404309, lng: 30.673866},
      {lat: 50.404132, lng: 30.67418},
      {lat: 50.403652, lng: 30.6735},
      {lat: 50.403703, lng: 30.673043},
    ];
      //section2
      var plan2 = [
      {lat: 50.404412, lng:30.67399},
      {lat: 50.404607, lng:30.674269},
      {lat: 50.404300, lng:30.674824},
      {lat: 50.40411, lng:30.674540},
      {lat: 50.404412, lng:30.67399},
    ];
      //sectio
      var plan3 = [
      {lat: 50.404058, lng:30.674675},
      {lat: 50.404246, lng:30.674927},
      {lat: 50.403950, lng:30.67545},
      {lat: 50.403775, lng:30.6752},
      {lat: 50.404058, lng:30.674675},
    ];
      //section2
      var plan4 = [
      {lat: 50.4037, lng:30.6753150},
      {lat: 50.403888, lng:30.675556},
      {lat: 50.403665, lng:30.67597},
      {lat: 50.40348, lng:30.675725},
      {lat: 50.4037, lng:30.6753150},
    ];

    var genplan1 = new google.maps.Polyline({
      path: plan1,
      // geodesic: true,
      strokeColor: '#a22122',
      strokeOpacity: 1.0,
      strokeWeight: 2,
    });
    var genplan2 = new google.maps.Polyline({
      path: plan2,
      strokeColor: '#a22122',
      strokeOpacity: 1.0,
      strokeWeight: 2,
    });
    var genplan3 = new google.maps.Polyline({
      path: plan3,
      strokeColor: '#a22122',
      strokeOpacity: 1.0,
      strokeWeight: 2,
    });
    var genplan4 = new google.maps.Polyline({
      path: plan4,
      strokeColor: '#a22122',
      strokeOpacity: 1.0,
      strokeWeight: 2,
    });

    genplan1.setMap(map);
    genplan2.setMap(map);
    genplan3.setMap(map);
    genplan4.setMap(map);

		$.getJSON("/js/mapStyle.json", function(data) {
	         map.setOptions({styles: data});
	     });

});
