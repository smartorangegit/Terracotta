function initialize() {
		var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

		var myMapOptions = {
			zoom: 15,
			center: secheltLoc,
      mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map"), myMapOptions);


		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(49.47216, -123.76307),
			visible: true
		});

		var boxText = document.createElement("div");
		boxText.style.cssText = "border: 1px solid black; margin-top: 0px; margin-left: 6px; background: yellow; padding: 5px;";
		boxText.innerHTML = "City Hall, Sechelt<br>British Columbia<br>Canada";

		var myOptions = {
			 content: boxText,
			disableAutoPan: false,
			maxWidth: 0,
			pixelOffset: new google.maps.Size(10, -50),
			zIndex: null,
			boxStyle: {
			  background: "url('http://www.geocodezip.com/images/tipbox90pad.gif') no-repeat",
			  opacity: 0.75,
			  width: "80px"
      },
			closeBoxMargin: "10px 2px 2px 2px",
			closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
			infoBoxClearance: new google.maps.Size(1, 1),
			isHidden: false,
			pane: "floatPane",
			enableEventPropagation: false
		};

		google.maps.event.addListener(marker, "click", function (e) {
			ib.open(theMap, this);
		});

		var ib = new InfoBox(myOptions);

		ib.open(theMap, marker);
	}
google.maps.event.addDomListener(window, "load", initialize);
