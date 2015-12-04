var butLink = document.querySelector(".btn-order");
var modalPopup = document.querySelector(".modal-block");
var butSend = modalPopup.querySelector(".btn-send");

var modalSuccess = document.querySelector(".modal-block-success");
var butClose = modalSuccess.querySelector(".close-modal-btn");

modalPopup.classList.add("hide");
modalSuccess.classList.add("hide");

butLink.addEventListener("click", function(event){
	event.preventDefault();
		modalPopup.classList.add("show");
});

butSend.addEventListener("click", function(event){
	event.preventDefault();
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