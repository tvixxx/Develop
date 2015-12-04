var butLink = document.querySelector(".btn-order");
var modalPopup = document.querySelector(".modal-block");
var butSend = modalPopup.querySelector(".btn-send");

var modalSuccess = document.querySelector(".modal-block-success");
var butClose = modalSuccess.querySelector(".close-modal-btn");

var close = document.querySelector(".close-modal-block");
close.addEventListener("click", function(event){
	event.preventDefault();
		modalPopup.classList.remove("show");
		modalPopup.classList.add("hide");
});


modalPopup.classList.add("hide");
modalSuccess.classList.add("hide");

var formReset = document.getElementById("form-reset-login");


butLink.addEventListener("click", function(event){
	event.preventDefault();
		modalPopup.classList.add("show");
});

butSend.addEventListener("click", function(event){
	event.preventDefault();
		formReset.reset();
		modalSuccess.classList.add("show");
});

butClose.addEventListener("click", function(event){
	event.preventDefault();
		modalSuccess.classList.remove("show");
		modalPopup.classList.remove("show");
});

window.addEventListener("keydown", function(event){
	if (event.keyCode == 27) {
		if (modalPopup.classList.contains("show")) {
			modalPopup.classList.remove("show");
		}
	}
});