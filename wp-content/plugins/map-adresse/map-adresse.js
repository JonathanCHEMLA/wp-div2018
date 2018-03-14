function TrouverMap(adresse,zoom_val)
	{
		//je cree une map
		geocoder = new google.maps.Geocoder();	//appzel du script de googlemap.   Geocoderest une fct definie de googlempa
		geocoder.geocode( { "address": adresse}, function(results, status) {
		
		if (status == google.maps.GeocoderStatus.OK) {

				
			 var strposition = results[0].geometry.location.toString();
			 var latlng = new google.maps.LatLng(strposition);
			 

			 //je mets des options
			 var mapOptions = {
						zoom      :  zoom_val,
						center    : latlng,
						scrollwheel:false,	//on veut pas que notre map soit scroller
						zoomControl: true,		
						scaleControl: true,		//plein ecran
						streetViewControl: true	//petit bonhomme
					  }
			
			// je cree une nvelle map que je positionne dans cette div l'id: maGoogleMap,  avec les options
			 map = new google.maps.Map(document.getElementById('maGoogleMap'), mapOptions);	  //
			 map.setCenter(results[0].geometry.location);
			 var marker = new google.maps.Marker({
								  map: map,
								  position: results[0].geometry.location
							  });
				}
				  
			});				
	}	
