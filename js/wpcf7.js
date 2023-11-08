window.addEventListener('DOMContentLoaded', function() {
    const brs = document.querySelectorAll('.wpcf7 br');
    if(brs) {
        brs.forEach(br => br.remove());
    }
});

