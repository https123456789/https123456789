function shuffle(el) {
	var parent = el;
	var divs = parent.children;
	var frag = document.createDocumentFragment();
	while (divs.length) {
	    frag.appendChild(divs[Math.floor(Math.random() * divs.length)]);
	}
	parent.appendChild(frag);
}

function updateReqsDisplay() {
	pageReqsDisplay.innerHTML = window.performance.getEntriesByType("resource").length;
}

var pageReqsDisplay = document.getElementById("pageReqsDisplay");
//shuffle(docuemnt.getElementById("cc1"));
//shuffle(docuemnt.getElementById("cc2"));

window.setTimeout(() => {
	/*new Glide('#c1', {
		autoplay: 2000,
		rewind: true,
		rewindDuration: 10,
		animationTimingFunc: "linear",
		direction: "rtl",
		hoverpause: false,
		bound: true
	}).mount();*/
	new Glide('#c2', {
		autoplay: 2000,
		rewind: true,
		rewindDuration: 10,
		animationTimingFunc: "ease-in-out",
		direction: "ltr",
		hoverpause: false,
		bound: true
	}).mount();
}, 0);

window.setInterval(updateReqsDisplay, (10 * 1000));
updateReqsDisplay();