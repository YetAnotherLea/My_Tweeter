//POPUPS DISPLAY

document.getElementById('display-register').addEventListener('click', () => {
    document.getElementById('register-popup').style.display = "flex";
})

document.getElementById('cross-register').addEventListener('click', () => {
    document.getElementById('register-popup').style.display = "none";
})

document.getElementById('display-login').addEventListener('click', () => {
    document.getElementById('login-popup').style.display = "flex";
})

document.getElementById('cross-login').addEventListener('click', () => {
    document.getElementById('login-popup').style.display = "none";
})

document.getElementById('display-register2').addEventListener('click', () => {
    document.getElementById('register2-popup').style.display = "flex";
    document.getElementById('login-popup').style.display = "none";
})

document.getElementById('cross-register2').addEventListener('click', () => {
    document.getElementById('register2-popup').style.display = "none";
})

document.getElementById('display-register1').addEventListener('click', () => {
    document.getElementById('register2-popup').style.display = "none";
    document.getElementById('register-popup').style.display = "flex";
})

document.getElementById('display-login1').addEventListener('click', () => {
    document.getElementById('login-popup').style.display = "flex";
    document.getElementById('register2-popup').style.display = "none";
})

//TODO: mettre des variables pour éviter les répétitions