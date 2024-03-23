function validateName(ev){
    let name = ev.name.value;
    if(name.length < 3){
        alert("the input name must contain at least 3 characters");
        return false
    }
    else if(name.length > 19 ){
        alert("the input name must contain less than 20 characters");
        return false
    }
    else if(/[0-9\W]/.test(name)){
        alert("the input name must not contain numbers or special characters");
        return false
    }
    return true;
}
function validatePhone(ev){
    let phone = ev.phone.value;
    if(phone.length < 3){
        alert("the input phone must contain at least 3 characters");
        return false
    }
    else if(phone.length > 15 ){
        alert("the input phone must contain less than 16 characters");
        return false
    }
    else if(/[a-z]/.test(phone)){
        alert("the input phone must not contain letters");
        return false
    }
    return true;
}
function validate(ev){
    let validation = [validateName(ev.target),validatePhone(ev.target)];
    return validation.some(e => e == false);
}
document.getElementById("form").addEventListener("submit", function(ev) {
    ev.preventDefault();

    if(!validate(ev)){
        this.submit();
    }

})
