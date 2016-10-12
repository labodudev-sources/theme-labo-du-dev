window.onload = function() {
	document.addEventListener('mousemove', function(event) {
		setParallaxOnElement(event, '.post-content', 0.02, 200);
	});
}

function setParallaxOnElement(event, element, strength, offset) {
	mouseMove(event, element, strength, offset);
}


function mouseMove(event, element, strength, offset) {
	var pageX = (event.pageX * strength) + offset;
	var pageY = (event.pageY * strength) + offset;
	var elements = document.querySelectorAll(element);

	for (var i = 0; i < elements.length; i++) {
		console.log(elements[i]);
		elements[i].style.left = pageX + 'px';
		elements[i].style.top = pageY + 'px';
	}
}
