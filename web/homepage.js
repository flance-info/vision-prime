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

document.addEventListener("DOMContentLoaded", function () {
	const accordionHeaders = document.querySelectorAll(".accordion-header");

	accordionHeaders.forEach(header => {
		header.addEventListener("click", function () {
			const content = this.nextElementSibling;
			const icon = this.querySelector("img");
			const accordionItem = this.parentElement;

			// Toggle the visibility of the accordion content
			content.classList.toggle("hidden");

			// Toggle the arrow direction
			icon.classList.toggle("rotate-180");

			// Toggle bg-general-white class based on content visibility
			accordionItem.classList.toggle("bg-general-white", !content.classList.contains("hidden"));

			// Close other accordion items
			accordionHeaders.forEach(item => {
				if (item !== header) {
					const otherContent = item.nextElementSibling;
					const otherIcon = item.querySelector("img");
					const otherAccordionItem = item.parentElement;

					otherContent.classList.add("hidden");
					otherIcon.classList.remove("rotate-180");
					otherAccordionItem.classList.remove("bg-general-white");
				}
			});
		});
	});

});

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.slider');
    const slides = slider.children;
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');
    let index = 0;

    function showSlide(idx) {
        slider.style.transform = `translateX(-${idx * 100}%)`;
    }

    nextButton.addEventListener('click', () => {
        if (index < slides.length - 1) {
            index++;
        } else {
            index = 0;
        }
        showSlide(index);
    });

    prevButton.addEventListener('click', () => {
        if (index > 0) {
            index--;
        } else {
            index = slides.length - 1;
        }
        showSlide(index);
    });

    // Auto-slide (optional)
    setInterval(() => {
        nextButton.click();
    }, 5000); // Change slide every 5 seconds
});



