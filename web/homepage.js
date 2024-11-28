document.addEventListener("DOMContentLoaded", function () {
	const tabButtons = document.querySelectorAll(".tab-button");
	const tabContents = document.querySelectorAll(".tab-content");

	// Check if there are any elements with the class "tab-content"
	if (tabContents.length > 0) {
		function showTab(index) {
			// Hide all tab contents
			tabContents.forEach(content => content.classList.add("hidden"));

			// Remove active classes from all buttons
			tabButtons.forEach(button => button.classList.remove("bg-elements-neutral-4", "border-l-[4px]", "border-solid", "border-general-1-primary", "bg-transparent"));

			// Show the selected tab content
			tabContents[index].classList.remove("hidden");

			// Add active classes to the selected button
			tabButtons[index].classList.add("bg-elements-neutral-4", "border-l-[4px]", "border-solid", "border-general-1-primary");
		}

		// Add event listeners to all tab buttons
		tabButtons.forEach((button, index) => {
			button.addEventListener("click", () => showTab(index));
		});

		// Show the first tab by default
		showTab(0);
	}
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
	if (slider) {

		const slides = slider.children;
		const nextButton = document.getElementById('nexttest');
		console.log('nex', nextButton);
		const prevButton = document.getElementById('prev');
		const nextButtonOne = document.getElementById('nextm');
		const prevButtonOne = document.getElementById('prevp');
		let index = 0;

		function showSlide(idx) {
			slider.style.transform = `translateX(-${idx * 100}%)`;
			console.log('idx', idx);
		}

		if (nextButton) {
				console.log('nexss', nextButton);
			nextButton.addEventListener('click', () => {
				if (index < slides.length - 1) {
					index++;
				} else {
					index = 0;
				}
				console.log(index);
				showSlide(index);
			});
		}
		if (nextButtonOne) {
			nextButtonOne.addEventListener('click', () => {
				if (index < slides.length - 1) {
					index++;
				} else {
					index = 0;
				}
				showSlide(index);
			});
		}
		if (prevButton) {
			prevButton.addEventListener('click', () => {
				if (index > 0) {
					index--;
				} else {
					index = slides.length - 1;
				}
				showSlide(index);
			});
		}
		if (prevButtonOne) {
			prevButtonOne.addEventListener('click', () => {
				if (index > 0) {
					index--;
				} else {
					index = slides.length - 1;
				}
				showSlide(index);
			});
		}
	}

});
function sliding(){
	const slides = document.querySelectorAll('.slider');

	if (slides) {
	//	const nextButton = document.getElementById('next');
	//	const prevButton = document.getElementById('prev');
	//	const nextButtonOne = document.getElementById('nextm');
	//	const prevButtonOne = document.getElementById('prevp');
		let index = 0;
		if (nextButton) {
			nextButton.addEventListener('click', () => {
				index = (index + 1) % slides.length;
				showSlide(index);
			});
		}
		if (prevButton) {
			prevButton.addEventListener('click', () => {

				index = (index - 1 + slides.length) % slides.length;
				showSlide(index);
			});
		}
		if (nextButtonOne) {
			nextButtonOne.addEventListener('click', () => {
			index = (index + 1) % slides.length;
				showSlide(index);
			});
		}
		if (prevButtonOne) {
			prevButtonOne.addEventListener('click', () => {
				index = (index - 1 + slides.length) % slides.length;
				showSlide(index);
			});
		}

		function showSlide(idx) {
			slides.forEach((slide, i) => {
				slide.classList.add('hidden');
				if (i === idx) {
					slide.classList.remove('hidden');
				}
			});
		}
	}
}

document.addEventListener('DOMContentLoaded', () => {
	//sliding();
});

document.addEventListener('DOMContentLoaded', () => {
	// Select all menu items that have submenus
	const dropdownToggles = document.querySelectorAll('.group');

	dropdownToggles.forEach(toggle => {
		const dropdown = toggle.querySelector('div');

		// Mouse hover event for desktop view
		toggle.addEventListener('mouseenter', () => {
			dropdown.classList.remove('hidden');
		});

		toggle.addEventListener('mouseleave', () => {
			dropdown.classList.add('hidden');
		});

		// Click event for mobile view
		toggle.querySelector('a').addEventListener('click', (e) => {
			// Prevent link navigation
			dropdown.classList.toggle('hidden');
		});
	});
});





