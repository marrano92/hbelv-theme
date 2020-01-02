document.getElementById("menu_icon").addEventListener("click", myFunction);

function myFunction() {
	var menu_text = document.getElementById("menu_text");
	var menu_close_text = document.getElementById("menu_close_text");
	var menu_big = document.getElementById("menu_big");
	var div_menu = document.getElementById("div_menu");
	var bar1 = document.getElementById("bar2");
	var bar2 = document.getElementById("bar3");
	var button = document.getElementById("button_book");

	if (menu_text.classList.contains('flipOutX')) {
		menu_close_text.classList.remove("flipInX");
		menu_close_text.classList.add("flipOutX");
		menu_text.classList.remove("flipOutX");
		menu_close_text.classList.add("d-none");
		menu_text.classList.add("flipInX");
		menu_text.classList.remove("d-none");
		menu_big.classList.remove("slideInDown");
		menu_big.classList.add("slideOutUp");
		div_menu.style.color = 'black';
		bar1.style.background = 'black';
		bar2.style.background = 'black';
		button.classList.remove("white_button");
		button.classList.add("blue_button");
	} else {
		menu_close_text.classList.remove("flipOutX");
		menu_text.classList.remove("flipInX");
		menu_text.classList.add("flipOutX");
		menu_close_text.classList.add("flipInX");
		menu_text.classList.add("d-none");
		menu_close_text.classList.remove("d-none");
		menu_big.classList.remove("slideOutUp");
		menu_big.classList.add("slideInDown");
		menu_big.classList.remove("d-none");
		div_menu.style.color = 'white';
		bar1.style.background = 'white';
		bar2.style.background = 'white';
		button.classList.remove("blue_button");
		button.classList.add("white_button");
	}
}
