var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        var caret = document.getElementById("emla-arrow");
        if (panel.style.display === "block") {
            panel.style.display = "none";
            caret.style.transform = "rotate(0deg)";
        }
        else {
            panel.style.display = "block";
            caret.style.transform = "rotate(180deg)";
        }
    });
}