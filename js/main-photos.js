window.onload = function() {
  function loadPhotos() {
		let httpRequest = null;
		if (window.XMLHttpRequest) // Mozilla, Safari, IE7+ ...
			httpRequest = new XMLHttpRequest();
		else if (window.ActiveXObject) // IE 6 and older
			httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
				
		httpRequest.open('GET', '/Thumber/pics');
		
		httpRequest.onload = function() {
			if(httpRequest.status == 200) {
				let parent = document.getElementById("thumbnail-photo");
				let photos = JSON.parse(httpRequest.responseText);
				photos.forEach(function (e, i) {
					var img = document.createElement("img");
					img.src = "data:image/png;base64," + e.data;
					img.setAttribute('class', 'swiper-slide cover');
					parent.appendChild(img);
				});
				
			}
		}
	  
		httpRequest.send();
	}
	
	loadPhotos();
};