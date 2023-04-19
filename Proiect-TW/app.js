

const menuBtn = document.querySelector(".menu-icon span");
const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const form = document.querySelector("form");

menuBtn.onclick = () => {
    items.classList.add("active");
    menuBtn.classList.add("hide");
    searchBtn.classList.add("hide");
    cancelBtn.classList.add("show");

}

cancelBtn.onclick = () => {
    items.classList.remove("active");
    menuBtn.classList.remove("hide");
    searchBtn.classList.remove("hide");
    cancelBtn.classList.remove("show");
    form.classList.remove("active");


}




document.addEventListener('mousemove', parallax);
function parallax(e) {
	this.querySelectorAll('.layer').forEach(layer => {
		let speed = layer.getAttribute('data-speed');
		let x = (window.innerWidth - e.pageX * speed) / 100;
		let y = (window.innerWidth - e.pageY * speed) / 100;
		layer.style.transform = `translate(${x}px, ${y}px)`;
	});
}