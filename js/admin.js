$('#files-selector').on('change', function() {
	// TODO -> To list all selected files somewhere	.
});

// $('#upload').click(function() {
	// var fileInput = document.getElementById("files-selector");

	// var files = fileInput.files;

	// var file;

	// var accept = {
		// binary : ["image/*"]
	// };

	// for (var i = 0; i < files.length; i++) {
		// file = files[i];

		// if (file !== null) {
			// var data = null;
			// var reader = new FileReader();
			// reader.onload = function() { 
				// let httpRequest = null;
				// if (window.XMLHttpRequest) // Mozilla, Safari, IE7+ ...
					// httpRequest = new XMLHttpRequest();
				// else if (window.ActiveXObject) // IE 6 and older
					// httpRequest = new ActiveXObject("Microsoft.XMLHTTP");

				// httpRequest.open('POST', '/Thumber/upload');

				// var formData = new FormData();
				// formData.append("description", "Tests");
				// formData.append("data", reader.result);

				// httpRequest.onload = function() {
					// console.log(httpRequest.responseText);
				// }

				// httpRequest.send(formData);
			// };
			// reader.readAsBinaryString(file);
		// }
	// }
// });
