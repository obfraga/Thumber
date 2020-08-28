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
				let photos = JSON.parse(httpRequest.responseText);
				let delay = 0;
				photos.forEach(function (e, i) {
					let parent = document.getElementById("all-photos");
					let oDiv = document.createElement("div");
					oDiv.setAttribute('class', 'col-6 col-md-6 col-lg-4');
					oDiv.setAttribute('data-aos', 'fade-up');
					if (delay > 0)
						oDiv.setAttribute('data-aos-delay', delay);

					let imageUrl = URL.createObjectURL(base64toBlob(e.data));

					let a = document.createElement("a");
					a.href = imageUrl;
					a.setAttribute('class', 'd-block photo-item');
					a.setAttribute('data-fancybox', 'gallery');
					
					let img = document.createElement("img");
					img.src = imageUrl;
					img.setAttribute('class', 'img-fluid');

					a.appendChild(img);

					let iDiv = document.createElement("div");
					iDiv.setAttribute('class', 'photo-text-more');

					let span = document.createElement("span");
					span.setAttribute('class', 'icon icon-search');
					iDiv.appendChild(span)

					a.appendChild(iDiv);

					oDiv.appendChild(a);

					parent.appendChild(oDiv);

					if (delay >= 300)
						delay = 0;
					else delay += 100;
				});
			}
		}
	  
		httpRequest.send();
	}

	function base64toBlob (data, contentType = '', sliceSize = 512) {
		const byteCharacters = atob(data);
		const byteArrays = [];

		for (let offset = 0; offset < byteCharacters.length; offset += sliceSize) {
			const slice = byteCharacters.slice(offset, offset + sliceSize);
			const byteNumbers = new Array(slice.length);
			for (let i = 0; i < slice.length; i++) {
				byteNumbers[i] = slice.charCodeAt(i);
			}
			const byteArray = new Uint8Array(byteNumbers);
			byteArrays.push(byteArray);
		}
		const blob = new Blob(byteArrays, {type: contentType});
		return blob;
	}

	loadPhotos();
};