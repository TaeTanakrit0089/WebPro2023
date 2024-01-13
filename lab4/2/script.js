const countryNamesEng = ['Select the Country', 'Brunei', 'Cambodia', 'Indonesia', 'Laos', 'Malaysia', 'Myanmar', 'Philippines', 'Singapore', 'Thailand', 'Vietnam'];
const countryNamesThai = ['เลือกประเทศ', 'บรูไน', 'เขมร', 'อินโดนีเซีย', 'ลาว', 'มาเลเซีย', 'พม่า', 'ฟิลิปปินส์', 'สิงคโปร์', 'ประเทศไทย', 'เวียดนาม'];
window.onload = function () {
    changeLanguage()
};

function changeLanguage() {
    const currentLanguage = document.documentElement.lang;

    document.documentElement.lang = (currentLanguage === "en") ? "th" : "en";

    const titleElement = document.getElementById('title');
    const nameTitle = document.getElementById('formNameTitle');
    const nameInput = document.getElementById('formNameInput');
    const surnameTitle = document.getElementById('formSurnameTitle');
    const surnameInput = document.getElementById('formSurnameInput');
    const countryTitle = document.getElementById('selectCountryTitle');
    const changeLanguageBtn = document.getElementById('changeLanguageBtn');

    if (document.documentElement.lang === 'th') {
        titleElement.textContent = 'ฟอร์มสมัครสมาชิกแล้วแต่แอพ';

        nameTitle.textContent = 'ชื่อ:';
        nameInput.placeholder = 'ชื่อ';

        surnameTitle.textContent = 'นามสกุล:';
        surnameInput.placeholder = 'นามสกุล';

        countryTitle.textContent = 'ประเทศ:';
        reloadCountryList(document.documentElement.lang);

        changeLanguageBtn.textContent = 'Change To English';
    } else {
        titleElement.textContent = 'Laew Tae App Membership Application Form';

        nameTitle.textContent = 'Name:';
        nameInput.placeholder = '์Name:';

        surnameTitle.textContent = 'Surname:';
        surnameInput.placeholder = 'Surname';

        countryTitle.textContent = 'Country:';
        reloadCountryList(document.documentElement.lang);

        changeLanguageBtn.textContent = 'เปลี่ยนภาษา';
    }

}

function reloadCountryList(language) {
    const countrySelect = document.getElementById("selectCountrySelect");
    countrySelect.innerHTML = "";
    let countryList;
    if (language === 'th')
        countryList = countryNamesThai;
    else
        countryList = countryNamesEng;
    countryList.forEach((text, index) => createOption(text, index, countrySelect));
}

function createOption(text, value, parentElement) {
    const newOption = document.createElement("option");
    newOption.value = value;
    newOption.text = text;
    parentElement.add(newOption);
}

