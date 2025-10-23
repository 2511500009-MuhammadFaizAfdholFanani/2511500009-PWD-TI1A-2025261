document.getElementById("menuToggle").addEventListener("click", function () {
    document.querySelector("nav").classList.toggle("active");
});

alert("Halo, Selamat Datang!");

let nama = prompt("Siapa nama kamu?");
alert("Halo, " + nama + "!");