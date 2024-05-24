$(document).ready(function () {
	$(".opacity-0").css("opacity", "0");
	$(".opacity-0").css("opacity", "1");
	$(".opacity-0").css("transition", "1s");
});

const cursorEffect = (e, element, size, duration, timingFunctions) => {
	const mouseX = e.clientX - size / 2;
	const mouseY = e.clientY - size / 2;
	element.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
	element.style.transition = `transform ${duration}ms ${timingFunctions}`;
};

$(window).on("mousemove", (e) => {
	cursorEffect(e, $(".cursor")[0], 63, 40, "linear");
});

(function addCursor() {
	$("body").prepend($("<div>").addClass("cursor"));
})();

$(document).ready(function () {
	$(".about-right").hover(
		function () {
			$(this).addClass("bounce");
		},
		function () {
			$(this).removeClass("bounce");
		}
	);
});
