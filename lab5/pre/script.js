function SaveDatInForm() {
    let fname = document.forms.myForm.FirstName.value;
    let lname = document.forms.myForm.LastName.value;
    let addr = document.forms.myForm.Address.value;
    let ctry = document.forms.myForm.Country.value;

    // save data to local storage
    localStorage.setItem('userFirstName', fname);
    localStorage.setItem('userLastName', lname);
    localStorage.setItem('userAddress', addr);
    localStorage.setItem('userCountry', ctry);

    alert("Data saved");
}

function showLocalData() {
    // load data from local storage
    let fn = localStorage.getItem('userFirstName');
    let ln = localStorage.getItem('userLastName');
    let ad = localStorage.getItem('userAddress');
    let cn = localStorage.getItem('userCountry');

    let out = document.getElementById("p1");
    out.innerHTML = `${fn} ${ln} ${ad} ${cn}`;
}
