// Form Validation
document.getElementById("registrationForm").addEventListener("submit", function(event) {
    // Prevent form submission if validation fails
    event.preventDefault();

    // Get form elements
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const address = document.getElementById("address").value;
    const education = document.getElementById("education").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const dob = document.getElementById("dob").value;
    const position = document.getElementById("position").value;

    // Validation for empty fields
    if (!fullName || !email || !phone || !address || !education || !gender || !dob || !position) {
        alert("Please fill in all the required fields.");
        return false;
    }

    // Gender validation
    if (!gender) {
        alert("Please select your gender.");
        return false;
    }

    // If all fields are valid, show success message
    alert("Your application has been successfully submitted!");

    // Submit the form after validation
    this.submit();
});