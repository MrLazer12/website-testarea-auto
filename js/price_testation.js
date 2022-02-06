document.title = "Calculator Revizie tehnică și impozit rutier";

maximum_authorized_mass = document.getElementById("maximum_authorized_mass");
set_value_click_maximum_authorized_mass(0);
input_mass = document.getElementById("input_mass");

input_mass.onkeyup = function set_mass() {
    maximum_authorized_mass.value = input_mass.value;
}

maximum_authorized_mass.oninput = function printResult() {
    input_mass.value = this.value;
}

function set_value_click_maximum_authorized_mass(number) {
    maximum_authorized_mass.value = number;
    input_mass.value = number;
}
//===================================================================================

//===================================================================================
cylindrical_capacity = document.getElementById("cylindrical_capacity");
set_value_click_cylindrical_capacity(0);
input_cylindrical = document.getElementById("input_cylindrical");

input_cylindrical.onkeyup = function set_mass() {
    cylindrical_capacity.value = input_cylindrical.value;
}

cylindrical_capacity.oninput = function printResult() {
    input_cylindrical.value = this.value;
}

function set_value_click_cylindrical_capacity(number) {
    cylindrical_capacity.value = number;
    input_cylindrical.value = number;
}
//=====================================================================================


//=====================================================================================
//check which category is selected
li_svg = document.querySelectorAll("#category_select > li svg");

function change_to_active(index) {
    for (let i = 0; i < li_svg.length; i++)
        li_svg[i].classList.remove("selected_category");

    li_svg[index].classList.add("selected_category");
    check_selected_category();
}

var selected_category;
check_selected_category();
function check_selected_category()
{
    console.log(li_svg.length);
    for (let i = 0; i < li_svg.length; i++) {
        if(li_svg[i].classList.contains("selected_category") == true)
        {
            li_p = document.querySelector("#category_select > li:nth-child("+(i+1)+") p");
            selected_category = li_p.innerHTML;
        }
    }
    console.log(selected_category);
}