//Code for the See more/See less tabs for all jobs
function Job() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
function Job1() {
    document.querySelectorAll(".showmore").forEach(function (p) {
        p.querySelector("a").addEventListener("click", function () {
            p.classList.toggle("show");
            //this.textContent = p.classList.contains("show") ? "Show Less" : "Show More";
        });
    });
}
