function mapMaker(id, longt, lat) {
	var id = id;
	flag_item = 1;
	var contentString = '<div id="hook" class="map__info-marker content_text">' + '<p class="red">ЖК ТERRACOTTA</p>' +
	 '<p class="content_text">' + 'Консультацию можно получить в отделе продаж ЖК Лебединый по адресу</p>' +
	 '<p class="red"><svg enable-background="new 0 0 98 98" height="14" viewBox="0 0 98 98" width="14" xmlns="http://www.w3.org/2000/svg" fill="#a22122"><path d="m48.855 0c-19.834 0-35.972 16.138-35.972 35.974 0 5.174 1.059 10.114 3.146 14.684 8.994 19.681 26.238 40.46 31.31 46.359.38.441.934.695 1.517.695s1.137-.254 1.517-.695c5.07-5.898 22.314-26.676 31.311-46.359 2.088-4.57 3.146-9.51 3.146-14.684-.002-19.836-16.14-35.974-35.975-35.974zm0 54.659c-10.303 0-18.686-8.383-18.686-18.686 0-10.304 8.383-18.687 18.686-18.687s18.686 8.383 18.686 18.687c.001 10.303-8.382 18.686-18.686 18.686z"/></svg> г. Киев, ул. Черниговская 8</p>' +
	 '<p class="content_text">' + 'и отделе продаж ЖК”Вудсторя” по адресу</p>' +
	 '<p class="red"><svg enable-background="new 0 0 98 98" height="14" viewBox="0 0 98 98" width="14" xmlns="http://www.w3.org/2000/svg" fill="#a22122"><path d="m48.855 0c-19.834 0-35.972 16.138-35.972 35.974 0 5.174 1.059 10.114 3.146 14.684 8.994 19.681 26.238 40.46 31.31 46.359.38.441.934.695 1.517.695s1.137-.254 1.517-.695c5.07-5.898 22.314-26.676 31.311-46.359 2.088-4.57 3.146-9.51 3.146-14.684-.002-19.836-16.14-35.974-35.975-35.974zm0 54.659c-10.303 0-18.686-8.383-18.686-18.686 0-10.304 8.383-18.687 18.686-18.687s18.686 8.383 18.686 18.687c.001 10.303-8.382 18.686-18.686 18.686z"/></svg> г. Киев, ул. Черниговская 8</p>' +
	 '<p class="red" style="margin-top:12px;" >ВРЕМЯ РАБОТЫ ОТДЕЛА ПРОДАЖ</p>' +
	 '<p><svg enable-background="new 0 0 299.998 299.998" viewBox="0 0 299.998 299.998" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#a22122"><path d="m149.997 0c-82.84 0-149.996 67.158-149.996 149.995s67.156 150.003 149.995 150.003 150-67.163 150-150.003-67.16-149.995-149.999-149.995zm10.358 168.337c-.008.394-.067.788-.122 1.183-.039.296-.057.599-.124.89-.067.303-.182.602-.28.905-.117.366-.226.731-.379 1.076-.029.06-.039.124-.065.184-.226.482-.488.934-.775 1.362-.018.026-.042.052-.06.078-.327.48-.7.916-1.092 1.325-.109.112-.22.213-.335.319-.345.329-.708.63-1.094.905-.119.086-.233.176-.358.259-.495.324-1.014.609-1.554.843-.117.052-.239.083-.358.13-.456.176-.918.322-1.395.433-.171.041-.34.078-.514.109-.612.112-1.232.189-1.86.189-.127 0-.257-.039-.384-.044-.602-.023-1.198-.07-1.771-.192-.179-.039-.355-.117-.534-.166-.534-.145-1.056-.306-1.554-.529-.057-.029-.117-.034-.174-.06l-57.515-27.129c-5.182-2.443-7.402-8.626-4.959-13.808 2.443-5.179 8.626-7.402 13.808-4.959l42.716 20.144v-89.535c0-5.729 4.645-10.374 10.374-10.374s10.374 4.645 10.374 10.374v105.901h.002c0 .062-.018.124-.018.187z"/></svg> Пн-Пт: 09:00-20:00</p>' +
	 '<p>Сб-Вс: Выходной</p></div>';

	var locations = [
				[contentString, 50.404719, 30.674205, "/img/map/main.png"],
      ];
	var centerX = 50.405;
	var centerY = 30.676;

	if( $(window).width() < 748 ) {
		centerY = locations[0][2];
	}

	var map = new google.maps.Map(document.getElementById(id), {
			zoom: 16,
			scrollwheel: false,
			mapTypeControl: false,
			streetViewControl: false,
			fullscreenControl: false,
			center: new google.maps.LatLng( centerX, centerY),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

	var infowindow = new google.maps.InfoWindow({
		content: contentString,
		pixelOffset: new google.maps.Size(150,200)
	});
	var marker, i;

	for (i = 0; i < locations.length; i++) {
	    marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	        map: map,
	        icon: {
	            url: locations[i][3],
	            // scaledSize: new google.maps.Size(90, 120)
	        }
	    });
	    infowindow.open(map, marker);
	    google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
						infowindow.open(map, marker);
	        }
		    })(marker, i));
	}

	google.maps.event.addListener(infowindow, 'domready', function() {
    // var l = $('#hook').parent().parent().parent().siblings();
		var iwOuter = $('.gm-style-iw');
    var iwBackground = iwOuter.prev();

    // custom styles
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});
    iwOuter.parent().parent().addClass('nth3').css({left: '45px'});
    iwBackground.children(':nth-child(1)').addClass('nth4').attr('style', function(i,s){ return s + 'left: 76px !important;'}).hide();
    iwBackground.children(':nth-child(3)').addClass('nth5').attr('style', function(i,s){ return s + 'left: 6px !important;'}).hide();
    iwBackground.children(':nth-child(3)').find('div').children().addClass('nth6').css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});
    var iwCloseBtn = iwOuter.next();
		iwCloseBtn.mouseout(function(){
      $(this).css({opacity: '1'});
    });
		iwCloseBtn.css({opacity: '1', right: '20px', top: '20px', border: '0px solid', width: '20px' });
		iwCloseBtn.children('img').css({margin: '0'})

    // Apply the desired effect to the close button
    // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
    if($('.iw-content').height() < 140){
      $('.iw-bottom-gradient').css({display: 'none'});
    }
    // for (var i = 0; i < l.length; i++) {
    //     if($(l[i]).css('z-index') == 'auto') {
		//
    //     }
    // }
		/*end custom styles*/
});

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
	strokeWeight: 4,
});
var genplan2 = new google.maps.Polyline({
	path: plan2,
	strokeColor: '#a22122',
	strokeOpacity: 1.0,
	strokeWeight: 4,
});
var genplan3 = new google.maps.Polyline({
	path: plan3,
	strokeColor: '#a22122',
	strokeOpacity: 1.0,
	strokeWeight: 4,
});
var genplan4 = new google.maps.Polyline({
	path: plan4,
	strokeColor: '#a22122',
	strokeOpacity: 1.0,
	strokeWeight: 4,
});

genplan1.setMap(map);
genplan2.setMap(map);
genplan3.setMap(map);
genplan4.setMap(map);

	$.getJSON("/js/mapStyle.json", function(data) {
         map.setOptions({styles: data});
     });

}
if (document.getElementById('map')) {
	mapMaker('map', 50.41);
}
