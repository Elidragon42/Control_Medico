document.addEventListener("DOMContentLoaded", function () {
    var button = document.getElementById("dropdownButton");
    var menu = document.getElementById("dropdownMenu");

    button.addEventListener("click", function () {
        // Toggle the 'hidden' class to show/hide the dropdown menu
        menu.classList.toggle("hidden");
    });

    // Close the dropdown menu if a click occurs outside the menu or the button
    document.addEventListener("click", function (event) {
        if (!menu.contains(event.target) && !button.contains(event.target)) {
            menu.classList.add("hidden");
        }
    });
});
