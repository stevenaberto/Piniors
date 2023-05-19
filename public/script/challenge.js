let html = document.getElementById("html")
let css = document.getElementById("css")
let js = document.getElementById("js")
let preview = document.getElementById("preview")


document.querySelector(".container").addEventListener("keydown", e =>{
    preview.srcdoc = `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>${css.value}</style>
    </head>
    <body>
        ${html.value}

        <script>
            ${js.value}
        </script>
    </body>
    </html>
    `
})
preview.srcdoc = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>${css.value}</style>
</head>
<body>
    ${html.value}

    <script>
        ${js.value}
    </script>
</body>
</html>
`
