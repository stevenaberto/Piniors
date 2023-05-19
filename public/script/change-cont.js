let btns = document.querySelectorAll(".btn-nav")
let cont = document.querySelector("#dash-main")

document.addEventListener("click", e=>{
    if (e.target.classList == "btn-nav") {
        btns.forEach(btn => btn.classList.remove("active"))
        e.target.classList.toggle("active")
        cont.style.display = "none"
        cont = document.querySelector(`#dash-${e.target.dataset.page}`)
        cont.style.display = "grid"
    }
})