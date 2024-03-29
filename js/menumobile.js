window.addEventListener("DOMContentLoaded", () => {
    const menu = document.querySelector('nav.main-menu');
    const menuMobileBtn = document.getElementById('menuMobileBtn');
    menuMobileBtn.addEventListener('click', handleMobileButton);
    function handleMobileButton() {
        if (menu.classList.contains('mobile_active')) {
            menu.classList.remove('mobile_active');
        } else {
            menu.classList.add('mobile_active');
        }
}


const telefoneFooter = document.getElementById("telefone-footer");
window.addEventListener("resize", () => debouncedFoo(telefoneFooter));
})
function debounce(func, delay) {
    let timeoutId;
    return function (...args) {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
            func.apply(this, args);
        }, delay);
    };
}
function foo(element){
    if( window.innerWidth >= 500) {
        element.href = "#";
    } else {
        element.href= "tel:+351210503536";
    }
}
const debouncedFoo = debounce(foo, 300);
