const signupToggle = document.getElementById("signup-toggle");
const signupSection = document.getElementById("signup-section");
const signupForm = document.querySelector(".signup-form");

signupToggle.addEventListener("click", () => {
	signupSection.classList.toggle("hidden");
	if (signupSection.classList.contains("hidden")) {
		signupForm.style.display = "none";
	} else {
		signupForm.style.display = "block";
	}
});
