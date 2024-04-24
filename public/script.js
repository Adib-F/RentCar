
document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.getElementById("navbar");
    var masuk = document.getElementById("masuk");
    var daftar = document.getElementById("daftar");
 

    window.addEventListener("scroll", function () {
        if (window.scrollY > document.querySelector(".landing").offsetHeight) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-white");
            navbar.classList.add("text-black");

            masuk.classList.remove("bg-bg-orange-300");
            masuk.classList.add("bg-black");
            masuk.classList.add("text-white");

            daftar.classList.remove("bg-black");
            daftar.classList.remove("text-white");
            daftar.classList.add("text-black");
            daftar.classList.add("btn-outline");
        } else {
            navbar.classList.remove("bg-white");
            navbar.classList.remove("text-black");
            navbar.classList.add("bg-transparent");

            masuk.classList.remove("bg-black");
            masuk.classList.remove("text-white");
            masuk.classList.add("bg-orange-300");
            masuk.classList.add("text-black");

            daftar.classList.remove("text-black");
            daftar.classList.remove("btn-outline");
            daftar.classList.add("bg-black");
            daftar.classList.add("text-white");
        }
    });
});
