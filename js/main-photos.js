

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
				let mainPhotos = document.getElementById("main-photos");
				let thumbnailPhotos = document.getElementById("thumbnail-photo");
				let photos = JSON.parse(httpRequest.responseText);
				let i = 0;
				photos.forEach(function (e, i) {
					let src = URL.createObjectURL(base64toBlob(e.data));

					let divThumb = document.createElement("div");
					divThumb.setAttribute('class', "swiper-slide cover");
					divThumb.setAttribute('style', "background-image: url('" + src + "');");
					thumbnailPhotos.appendChild(divThumb);

					let div0 = document.createElement("div");
					div0.setAttribute('class', "swiper-slide cover");
					div0.setAttribute('style', "background-image: url('" + src + "');");

					let a = document.createElement("a");
					a.href = src;
					a.setAttribute('data-fancybox', "gallery");
					a.setAttribute('class', "zoom");

					let aSpan = document.createElement("span");
					aSpan.setAttribute('class', "icon-search");

					let div1 = document.createElement("div");
					div1.setAttribute('class', "img-info");

					let span = document.createElement("span");
					span.setAttribute('class', "btn-toggle-expand");
					
					let iSpan = document.createElement("span");
					iSpan.setAttribute('class', "icon-call_made");

					let div2 = document.createElement("div");
					div2.setAttribute('class', "img-info-content");

					let h2 = document.createElement("h2");

					let div3 = document.createElement("div");
					div3.setAttribute('class', "scrollbar-inner style-scrollbar-sm js-scrollbar-container");

					let p = document.createElement("p");
					p.setAttribute('class', "mb-0");

					p.appendChild(document.createTextNode(e.description));

					div3.appendChild(p);

					h2.appendChild(document.createTextNode(e.title));

					div2.appendChild(h2);
					div2.appendChild(div3);

					span.appendChild(iSpan);

					div1.appendChild(span);
					div1.appendChild(div2);

					a.appendChild(aSpan);

					div0.appendChild(a);
					div0.appendChild(div1);
				
					mainPhotos.appendChild(div0);

					// var img = document.createElement("div");
					// // img.src = "data:image/png;base64," + e.data;
					
					// img.setAttribute('style', "height: 1000px; background-image: url('" + src + "');");
					// document.body.appendChild(img);
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