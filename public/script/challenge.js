let $html = document.getElementById("html");
let $css = document.getElementById("css");
let $js = document.getElementById("js");
let preview = document.getElementById("preview");
let sharebtn = document.getElementById("btn-share")

const createHTML = ({ html, css, js }) => {
  return `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>${css}</style>
    </head>
    <body>
        ${html}

        <script>
            ${js}
        </script>
    </body>
    </html>
    `;
};

const update = () => {
  let html = $html.value;
  let css = $css.value;
  let js = $js.value;
  console.log({html,css,js})
  let hashed = `/challenges/token/${window.btoa(html)}|${window.btoa(
    css
  )}|${window.btoa(js)}`;
  history.replaceState(null, null, hashed);
  const doc = createHTML({html, css, js});
  preview.setAttribute("srcdoc", doc);
  sharebtn.dataset.href = hashed
};

async function init() {
    let html = document.getElementById("html");
    let css = document.getElementById("css");
  let js = document.getElementById("js");
  const { pathname } = window.location;
  const [HTML, CSS, JS] = pathname.slice(18).split("%7C");
  console.log({HTML, CSS, JS})
  html.value = window.atob(HTML);
  css.value = window.atob(CSS);
  js.value = window.atob(JS);
  update();
}

function copy() {
    let link = sharebtn.dataset.href
    navigator.clipboard.writeText("https://piniors.com"+link)
    .then(() => {
        console.log('Texto copiado al portapapeles')
      })
      .catch(err => {
        console.error('Error al copiar al portapapeles:', err)
      })
}

$html.addEventListener("input", update);
$css.addEventListener("input", update);
$js.addEventListener("input", update);
sharebtn.addEventListener("click", copy);

init();
// update()
