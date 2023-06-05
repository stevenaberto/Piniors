<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="/public/styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="login-link">
            <div class="logo">
                <img src="/public/favicon.svg" class='bx bx-pencil' id="logo"></img>
                <span class="text">Piniors</span>
            </div>
            <p class="side-big-heading">¿Ya tienes una cuenta</p>
            <p class="primary-bg-text">To keep track on your dashboard please login with your personal info</p>
            <a href="/login" class="loginbtn">Login</a>
        </div>
        <form action="/registro/registro" metHod="POST" class="signup-form-container" enctype="multipart/form-data">
            <p class="big-heading">Crea cuenta</p>
            <div class="progress-bar">
                <div class="stage">
                    <p class="tool-tip">Personal</p>
                    <p class="stageno stageno-1">1</p>
                </div>
                <div class="stage">
                    <p class="tool-tip">Perfil</p>
                    <p class="stageno stageno-2">2</p>
                </div>
                <div class="stage">
                    <p class="tool-tip">Finalizar</p>
                    <p class="stageno stageno-3">3</p>
                </div>
            </div>
            <div class="signup-form-content">
                <div class="stage1-content">
                    <div class="button-container">
                        <div class="text-fields fname">
                            <label for="name"><i class='bx bx-user'></i></label>
                            <input type="text" name="name" id="fname" placeholder="Enter your name">
                        </div>
                        <div class="text-fields lname">
                            <label for="username"><i class='bx bx-user'></i></label>
                            <input type="text" name="username" id="lname" placeholder="Enter your username">
                        </div>
                    </div>
                    <div class="text-fields email">
                    <label for="email"><i class='bx bx-envelope' ></i></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
            
                    <div class="pagination-btns">
                        <input type="button" value="Next" class="nextPage stagebtn1b" onclick="stage1to2()">
                    </div>
                </div>
                <div class="stage2-content">
                <div class="button-container">
                        <div class="text-fields password">
                            <label for="password"><i class='bx bx-lock-alt'></i></label>
                            <input type="password" name="password" id="password" placeholder="Enter password">
                        </div>
                        <div class="text-fields confirmpassword">
                            <label for="confirmpassword"><i class='bx bx-lock-alt'></i></label>
                            <input type="password" name="confirmpassword" id="confirmpassword"
                                placeholder="Enter password">
                        </div>
                    </div>
                    <div class="pagination-btns">
                        <input type="button" value="Previous" class="previousPage stagebtn2a" onclick="stage2to1()">
                        <input type="button" value="Next" class="nextPage stagebtn2b" onclick="stage2to3()">
                    </div>
                </div>
                <div class="stage3-content">
                <div class="button-container image-container">
                        <div id="drop-zone">
                            <img id="pre_image" width="350px" src="" alt="">
                            <p id="label_p" class="text-fields">Drop file or click to upload</p>
                            <input type="file" name="image" accept="image/*" id="image" placeholder="Foto de perfil" hidden>
                        </div>
                    </div>
                    <div class="tc-container">
                        <label for="tc" class="tc">
                            <input type="checkbox" name="tc" id="tc" required>
                            By submiting your details, you agree to the <a href="#"> terms and conditions. </a>
                        </label>
                    </div>
                    <div class="pagination-btns">
                        <input type="button" value="Previous" class="previousPage stagebtn3a" onclick="stage3to2()">
                        <input type="submit" value="Submit" class="nextPage stagebtn3b">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    let signupConent = document.querySelector(".signup-form-container"),
        stagebtn1b = document.querySelector(".stagebtn1b"),
        stagebtn2a = document.querySelector(".stagebtn2a"),
        stagebtn2b = document.querySelector(".stagebtn2b"),
        stagebtn3a = document.querySelector(".stagebtn3a"),
        stagebtn3b = document.querySelector(".stagebtn3b"),
        signupContent1 = document.querySelector(".stage1-content"),
        signupContent2 = document.querySelector(".stage2-content"),
        signupContent3 = document.querySelector(".stage3-content");

    signupContent2.style.display = "none"
    signupContent3.style.display = "none"

    function stage1to2() {
        signupContent1.style.display = "none"
        signupContent3.style.display = "none"
        signupContent2.style.display = "block"
        document.querySelector(".stageno-1").innerText = "✔"
        document.querySelector(".stageno-1").style.backgroundColor = "#52ec61"
        document.querySelector(".stageno-1").style.color = "#fff"
    }
    function stage2to1() {
        signupContent1.style.display = "block"
        signupContent3.style.display = "none"
        signupContent2.style.display = "none"
    }
    function stage2to3() {
        signupContent1.style.display = "none"
        signupContent3.style.display = "block"
        signupContent2.style.display = "none"
        document.querySelector(".stageno-2").innerText = "✔"
        document.querySelector(".stageno-2").style.backgroundColor = "#52ec61"
        document.querySelector(".stageno-2").style.color = "#fff"
    }
    function stage3to2() {
        signupContent1.style.display = "none"
        signupContent3.style.display = "none"
        signupContent2.style.display = "block"
    }
</script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="/public/script/pre-img.js"></script>

</html>