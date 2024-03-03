document.addEventListener("DOMContentLoaded", function() {
    // Simulated data (replace with actual data from your backend)
    const userData = {
        username: "JohnDoe",
        email: "john@example.com",
        location: "New York, USA"
    };

    const enrolledCourses = [
        "Course 1",
        "Course 2",
        "Course 3"
    ];

    // Update user profile information
    document.getElementById("username").innerText = userData.username;
    document.getElementById("email").innerText  "Email: " + userData.email;
    document.getElementById("location").innerText = "Location: " + userData.location;

    // Populate enrolled courses
    const enrolledCoursesList = document.getElementById("enrolled-courses");
    enrolledCourses.forEach(course => {
        const listItem = document.createElement("li");
        listItem.innerHTML = `<a href="#">${course}</a>`;
        enrolledCoursesList.appendChild(listItem);
    });
});
