document.addEventListener("DOMContentLoaded", function () {

    const menuBtn = document.getElementById("menuBtn");
    const navbar = document.querySelector(".navbar");

    if (menuBtn) {

        menuBtn.addEventListener("click", function () {

            navbar.classList.toggle("mobile-active");

        });

    }


    const links = document.querySelectorAll("a[href^='#']");

    links.forEach(function (link) {

        link.addEventListener("click", function (event) {

            const target = document.querySelector(
                this.getAttribute("href")
            );

            if (target) {

                event.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth"
                });

            }

        });

    });


    const forms = document.querySelectorAll("form");

    forms.forEach(function (form) {

        form.addEventListener("submit", function () {

            const button = form.querySelector("button[type='submit']");

            if (button) {
                button.style.opacity = "0.7";
                button.innerHTML = "Processing...";
            }

        });

    });

});