window.addEventListener("DOMContentLoaded", () => {
    const menu = document.querySelector('nav.main-menu');
    const menuMobileBtn = document.getElementById('menuMobileBtn');
    menuMobileBtn.addEventListener('click', handleMobileButton)
    function handleMobileButton() {
        if (menu.classList.contains('mobile_active')) {
            menu.classList.remove('mobile_active')
        } else {
            menu.classList.add('mobile_active')
        }
}

})