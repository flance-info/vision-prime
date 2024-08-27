document.addEventListener("DOMContentLoaded", function () {
	const tabButtons = document.querySelectorAll(".tab-button");
	const tabContents = document.querySelectorAll(".tab-content");


	function showTab(index) {

		tabContents.forEach(content => content.classList.add("hidden"));
		tabButtons.forEach(button => button.classList.remove("bg-elements-neutral-4", "border-l-[4px]", "border-solid", "border-general-1-primary" , "bg-transparent"));


		tabContents[index].classList.remove("hidden");

		tabButtons[index].classList.add("bg-elements-neutral-4", "border-l-[4px]", "border-solid", "border-general-1-primary");
	}

	tabButtons.forEach((button, index) => {
		button.addEventListener("click", () => showTab(index));
	});

	showTab(0);
});
