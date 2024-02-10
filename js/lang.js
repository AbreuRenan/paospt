import langData from "./languages.js";

document.addEventListener("DOMContentLoaded", () => {
  const langSelector = document.getElementById("langSelector");
  const savedLang = localStorage.getItem('langPrefer') ? localStorage.getItem('langPrefer') : null;

  langSelector.addEventListener("change", handleLangSelectorChange);
  if (savedLang) {
    langSelector.value = savedLang;
    changeStringsToSelectedLang(savedLang);
}
});

function findLocalMatch(langAttrValue, selectedLang) {
  const localizedString = langData.languages[selectedLang].strings[langAttrValue];
  return localizedString;
}

function handleLangSelectorChange({ target }) {
  localStorage.setItem("langPrefer", target.value);
  changeStringsToSelectedLang(target.value);
}

function changeStringsToSelectedLang(lang) {
  const allTextContainers = document.querySelectorAll("html [data-lang]");
  const navMenuContainer = document.querySelectorAll(`.main-menu`);
  navMenuContainer.forEach(menu => {
    menu.classList.remove('active-lang');
    if (menu.classList.contains(`lang-${lang}`)) menu.classList.add('active-lang');  
  });

  allTextContainers.forEach((textContainer) => {
    const langAttributeValue = textContainer.getAttribute("data-lang");
    const newTextContent = findLocalMatch(langAttributeValue, lang);
    textContainer.innerText = newTextContent;
    if(textContainer.nodeName === 'INPUT') textContainer.value = newTextContent;
  });


}
