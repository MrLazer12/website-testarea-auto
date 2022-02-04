function close_form(section_loginOR_register){
    loginOR_register = document.getElementById(section_loginOR_register);
    loginOR_register.style.top = "-100vh";
}

function show_form(section_loginOR_register,close_section_loginOR_register){
    close_form(close_section_loginOR_register);
    loginOR_register = document.getElementById(section_loginOR_register);
    loginOR_register.style.transition = "1s ease-in";
    loginOR_register.style.top = "20%";
}
//===============================================================================

function redirect_user(location){
    window.location.href=location;
}