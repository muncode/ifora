function checkForm(form) {
    const name = form.name.value;
    const n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
    if (!n) {
        alert("Имя введено неверно, пожалуйста исправьте ошибку");
        return false;
    }
    if (form.phone.value) {
        const phone = form.phone.value;
        const p = phone.match(/^[0-9+][0-9- ]*[0-9- ]+$/);
        if (!p) {
            alert("Телефон введен неверно");
            return false;
        }
    }
    else if (form.mail.value) {
        const mail = form.mail.value;
        const m = mail.match(/.+@.+\..+/i);
        if (!m) {
            alert("E-mail введен неверно, пожалуйста исправьте ошибку");
            return false;
        }
    }
    else {
        alert("Введите контактные данные");
        return false;
    }
    return true;
}
function ExportToExcel(){
    var htmltable= document.getElementById('my-table-id');
    var html = htmltable.outerHTML;
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
}