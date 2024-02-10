window.addEventListener('DOMContentLoaded', ()=> {
function waitForElementToExist(selector) {
    return new Promise(resolve => {
      if (document.querySelector(selector)) {
        return resolve(document.querySelector(selector));
      }
      const observer = new MutationObserver(() => {
        if (document.querySelector(selector)) {
          resolve(document.querySelector(selector));
          observer.disconnect();
        }
      });
  
      observer.observe(document.body, {
        subtree: true,
        childList: true,
      });
    });
  }
  waitForElementToExist('.grecaptcha-badge').then(element => {
    element.style = "visibility: hidden";
    const regex1 = /^\/contato(?:\/)?$/;
    const regex2 = /^\/recrutamento(?:\/)?$/;
    if(regex1.test(window.location.pathname) || regex2.test(window.location.pathname)) {
        element.style = "visibility: show";
    }
  });

})
