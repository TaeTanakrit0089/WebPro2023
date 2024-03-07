function validateForm() {
    var idCard = document.getElementById("idCard");
    var idCardError = document.getElementById("idCardError");
    var prefix = document.getElementById("prefix");
    var prefixError = document.getElementById("prefixCardError");
    var firstName = document.getElementById("firstName");
    var firstNameError = document.getElementById("firstNameError");
    var lastName = document.getElementById("lastName");
    var lastNameError = document.getElementById("lastNameError");
    var address = document.getElementById("address");
    var addressError = document.getElementById("addressError");
    var subdistrict = document.getElementById("subdistrict");
    var subdistrictError = document.getElementById("subdistrictError");
    var district = document.getElementById("district");
    var districtError = document.getElementById("districtError");
    var province = document.getElementById("province");
    var provinceError = document.getElementById("provinceError");
    var zipcode = document.getElementById("zipcode");
    var zipcodeError = document.getElementById("zipcodeError");

    var isValid = true;

    // IDcard
    if (!(/^[0-9]{13}$/).test(idCard.value)) {
        // alert("รหัสบัตรประชาชนไม่ถูกต้อง");
        isValid = false;
        idCardError.innerHTML = "รหัสบัตรประชาชนไม่ถูกต้อง";
        idCard.classList.add("is-invalid");
    } else {
        idCardError.innerHTML = "";
        idCard.classList.remove("is-invalid");
    }

    // คำนำหน้า
    if (prefix.value === "") {
        isValid = false;
        prefix.classList.add("is-invalid");
        prefixError.innerHTML = "กรุณาเลือกคำนำหน้านาม";
    } else {
        prefix.classList.remove("is-invalid");
    }

    // First Name
    if (firstName.value.length < 2 || firstName.value.length > 20) {
        isValid = false;
        firstNameError.innerHTML = "กรุณากรอกชื่อ ความยาวระหว่าง 2_Tum-20 ตัวอักษร";
        firstName.classList.add("is-invalid");
    } else {
        firstNameError.innerHTML = "";
        firstName.classList.remove("is-invalid");
    }

    // Last Name
    if (lastName.value.length < 2 || lastName.value.length > 30) {
        isValid = false;
        lastNameError.innerHTML = "กรุณากรอกนามสกุล ความยาวระหว่าง 2_Tum-30 ตัวอักษร";
        lastName.classList.add("is-invalid");
    } else {
        lastNameError.innerHTML = "";
        lastName.classList.remove("is-invalid");
    }

    // Address
    if (address.value.length < 15) {
        isValid = false;
        addressError.innerHTML = "กรุณากรอกที่อยู่ ความยาวไม่ต่ำกว่า 15 ตัวอักษร";
        address.classList.add("is-invalid");
    } else {
        addressError.innerHTML = "";
        address.classList.remove("is-invalid");
    }

    // Subdistrict
    if (subdistrict.value.length < 2) {
        isValid = false;
        subdistrictError.innerHTML = "กรุณากรอกตำบล/แขวง ความยาวไม่ต่ำกว่า 2_Tum ตัวอักษร";
        subdistrict.classList.add("is-invalid");
    } else {
        subdistrictError.innerHTML = "";
        subdistrict.classList.remove("is-invalid");
    }

    // District
    if (district.value.length < 2) {
        isValid = false;
        districtError.innerHTML = "กรุณากรอกอำเภอ/เขต ความยาวไม่ต่ำกว่า 2_Tum ตัวอักษร";
        district.classList.add("is-invalid");
    } else {
        districtError.innerHTML = "";
        district.classList.remove("is-invalid");
    }

    // Province
    if (province.value === "") {
        isValid = false;
        provinceError.innerHTML = "กรุณาเลือกจังหวัด";
        province.classList.add("is-invalid");
    } else {
        provinceError.innerHTML = "";
        province.classList.remove("is-invalid");
    }

    // Zipcode
    if (zipcode.value === "") {
        isValid = false;
        zipcodeError.innerHTML = "กรุณากรอกรหัสไปรษณีย์";
        zipcode.classList.add("is-invalid");
    } else if (zipcode.value.length !== 5) {
        isValid = false;
        zipcodeError.innerHTML = "รหัสไปรษณีย์ไม่ถูกต้อง";
        zipcode.classList.add("is-invalid");
    } else {
        zipcodeError.innerHTML = "";
        zipcode.classList.remove("is-invalid");
    }

    var resultMessageElement = document.getElementById("result-message");
    resultMessageElement.innerHTML = isValid ? "<div class='alert alert-success'>ข้อมูลถูกต้อง</div>" : "<div class='alert alert-danger'>กรุณากรอกข้อมูลให้ถูกต้อง</div>";
}