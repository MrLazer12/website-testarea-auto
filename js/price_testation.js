document.title = "Calculator Revizie tehnică și impozit rutier";

authorized_mass_buttons = document.getElementById("authorized_mass_buttons");
maximum_authorized_mass = document.getElementById("range_slider_maximum_authorized_mass");
set_value_click_maximum_authorized_mass(0);
input_mass = document.getElementById("input_mass");
//----------------------------------------------------------------------------------------
cylindrical_capacity_buttons = document.getElementById("cylindrical_capacity_buttons");
cylindrical_capacity = document.getElementById("range_slider_cylindrical_capacity");
set_value_click_cylindrical_capacity(0);
input_cylindrical = document.getElementById("input_cylindrical");
//----------------------------------------------------------------------------------------
span_testation_price = document.getElementById("testation_price");
span_price_roads = document.getElementById("price_roads");

max_places_in_buss = document.getElementById("max_places_in_buss");
own_mass = document.getElementById("own_mass");
//----------------------------------------------------------------------------------------
range_slider_own_mass = document.getElementById("range_slider_own_mass");
input_own_mass = document.getElementById("input_own_mass");
//----------------------------------------------------------------------------------------
input_places_in_buss = document.getElementById("input_places_in_buss");
range_slider_places_in_buss = document.getElementById("range_slider_places_in_buss");
//----------------------------------------------------------------------------------------


//=====================================================================================
//check which category is selected
li_svg = document.querySelectorAll("#category_select > li svg");
form_buttons_range_slider = document.getElementById("form_buttons_range_slider");

function change_to_active(index) {
    for (let i = 0; i < li_svg.length; i++)
        li_svg[i].classList.remove("selected_category");

    li_svg[index].classList.add("selected_category");
    get_selected_category(index);
    change_elements_in_form();
}

var selected_category;
//set cars as active
get_selected_category(0);

function get_selected_category(index)
{
    li_p = document.querySelector("#category_select > li:nth-child("+(index+1)+") p");
    selected_category = li_p.getAttribute('type_category');  
    
    change_elements_in_form();
}

// this function changes display of elements in form#form_buttons_range_slider by the selected category
function change_elements_in_form(){
    switch(selected_category)
    {
        case 'autoturism':
        {
            form_buttons_range_slider.style.display = "block";
            authorized_mass_buttons.style.display = "block";
            cylindrical_capacity_buttons.style.display = "block";
            max_places_in_buss.style.display = "none";
            own_mass.style.display = "none";

            span_testation_price.innerHTML = 0;
            span_price_roads.innerHTML = 0;
            break;
        }
        
        case 'motocicleta':
        {
            form_buttons_range_slider.style.display = "block";
            cylindrical_capacity_buttons.style.display = "block";
            authorized_mass_buttons.style.display = "none";
            max_places_in_buss.style.display = "none";
            own_mass.style.display = "none";
            break;
        }

        case 'autobuz':
        {
            form_buttons_range_slider.style.display = "block";
            authorized_mass_buttons.style.display = "block";
            max_places_in_buss.style.display = "block";
            cylindrical_capacity_buttons.style.display = "none";
            own_mass.style.display = "none";
            break;
        }

        case 'camion':
        {
            form_buttons_range_slider.style.display = "block";
            authorized_mass_buttons.style.display = "block";
            cylindrical_capacity_buttons.style.display = "none";
            max_places_in_buss.style.display = "none";
            own_mass.style.display = "none";
            break;
        }

        case 'remorca':
        {
            form_buttons_range_slider.style.display = "block";
            authorized_mass_buttons.style.display = "block";
            cylindrical_capacity_buttons.style.display = "none";
            max_places_in_buss.style.display = "none";
            own_mass.style.display = "none";
            break;
        }

        case 'semiremorca':
        {
            form_buttons_range_slider.style.display = "block";
            authorized_mass_buttons.style.display = "block";
            own_mass.style.display = "block";
            cylindrical_capacity_buttons.style.display = "none";
            max_places_in_buss.style.display = "none";
            break;
        }

        case 'tractor':
        {
            form_buttons_range_slider.style.display = "none";
            span_testation_price.innerHTML = 150+" lei";
            span_price_roads.innerHTML = 2250+" lei";
            break;
        }
    }
}
//===================================================================================


//===================================================================================
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
input_own_mass.onkeyup = function set_own_mass() {
    range_slider_own_mass.value = input_own_mass.value;
}

range_slider_own_mass.oninput = function print_own_mass() {
    input_own_mass.value = this.value;
}

function set_value_click_range_slider_own_mass(number) {
    range_slider_own_mass.value = number;
    input_own_mass.value = number;
}
//=====================================================================================

//=====================================================================================
input_places_in_buss.onkeyup = function set_places_in_buss() {
    range_slider_places_in_buss.value = input_places_in_buss.value;
}

range_slider_places_in_buss.oninput = function print_places_in_buss() {
    input_places_in_buss.value = this.value;
}

function set_value_click_range_slider_places_in_buss(number) {
    range_slider_places_in_buss.value = number;
    input_places_in_buss.value = number;
}
//=====================================================================================
