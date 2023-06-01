let button = document.getElementById("nav-btn")
let section = document.querySelector("section")
let games = ["#quiz","#retos","#ahorcado"]
let state = 1
let game = games[state]
let options = {
    // root: document.body,
    rootMargin: "0px 0px 100px 0px",
    threshold: 1
  };
  const callback = (entries, observer) =>{
    entries.forEach(entry =>{
        observer.observe(document.querySelector(game))
        if (entry.isIntersecting) {
           if (state < 3) {
            button.href = games[state++]
            console.log(button.href);
            button.textContent = "Siguiente"
        }else{
            state=0
            console.log(button.href);
            button.href = games[state]
            button.textContent = "Inicio"
        }
        }
    })
  }
  let observer = new IntersectionObserver(callback, options);
  
  observer.observe(document.querySelector("article"))

  console.log(game)

  // TODO: Hacer esto bien! Porque es un disparate!