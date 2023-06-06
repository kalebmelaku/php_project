const icon = document.getElementById('icon_switch');
document.addEventListener("DOMContentLoaded", () => {
    let status = localStorage.getItem("colorMode");
    if (status == 'dark') {   
        document.body.classList.remove('light')
        icon.src = './img/icons/sun.png';
    } else {
        document.body.classList.add(status)
    }
})

icon.addEventListener('click', () => {
    if (document.body.classList.contains('light')) {
        document.body.classList.remove('light');
        localStorage.setItem("colorMode", "dark");
        icon.setAttribute('src', './img/icons/sun.png')
    } else {
        document.body.classList.add('light');
        localStorage.setItem("colorMode", "light");
        icon.setAttribute('src', './img/icons/moon.png')
    }
});

//login signup switcher

