document.title = "Calculator Revizie tehnică și impozit rutier";

authorized_mass_buttons = document.getElementById("authorized_mass_buttons");
maximum_authorized_mass = document.getElementById("range_slider_maximum_authorized_mass");
input_mass = document.getElementById("input_mass");
set_value_click_maximum_authorized_mass(0);
//----------------------------------------------------------------------------------------
cylindrical_capacity_buttons = document.getElementById("cylindrical_capacity_buttons");
cylindrical_capacity = document.getElementById("range_slider_cylindrical_capacity");
input_cylindrical = document.getElementById("input_cylindrical");
set_value_click_cylindrical_capacity(0);
//----------------------------------------------------------------------------------------
own_mass = document.getElementById("own_mass");
range_slider_own_mass = document.getElementById("range_slider_own_mass");
input_own_mass = document.getElementById("input_own_mass");
set_value_click_range_slider_own_mass(0);
//----------------------------------------------------------------------------------------
max_places_in_buss = document.getElementById("max_places_in_buss");
input_places_in_buss = document.getElementById("input_places_in_buss");
range_slider_places_in_buss = document.getElementById("range_slider_places_in_buss");
set_value_click_range_slider_places_in_buss(0);
//----------------------------------------------------------------------------------------

//=====================================================================================
//check which category is selected
li_svg = document.querySelectorAll("#category_select > li svg");
form_buttons_range_slider = document.getElementById("form_buttons_range_slider");

span_testation_price = document.getElementById("testation_price");
span_price_roads = document.getElementById("price_roads");

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

function get_selected_category(index) {
    li_p = document.querySelector("#category_select > li:nth-child(" + (index + 1) + ") p");
    selected_category = li_p.getAttribute('type_category');

    change_elements_in_form();
}

// this function changes display of elements in form#form_buttons_range_slider by the selected category
function change_elements_in_form() {
    switch (selected_category) {
        case 'autoturism':
            {
                form_buttons_range_slider.style.display = "block";
                authorized_mass_buttons.style.display = "block";
                cylindrical_capacity_buttons.style.display = "block";
                max_places_in_buss.style.display = "none";
                own_mass.style.display = "none";

                span_testation_price.innerHTML = 0;
                span_price_roads.innerHTML = 0;

                add_buttons_to_rangeSlider(30000, "range_slider_maximum_authorized_mass", "set_value_click_maximum_authorized_mass", 0, 0, 35000, 5000);
                add_buttons_to_rangeSlider(10000, "range_slider_cylindrical_capacity", "set_value_click_cylindrical_capacity", 1, 0, 11000, 1000);
                span_testation_price.innerHTML = 0 + " lei";
                span_price_roads.innerHTML = 0 + " lei";
                break;
            }

        case 'motocicleta':
            {
                form_buttons_range_slider.style.display = "block";
                cylindrical_capacity_buttons.style.display = "block";
                authorized_mass_buttons.style.display = "none";
                max_places_in_buss.style.display = "none";
                own_mass.style.display = "none";

                add_buttons_to_rangeSlider(500, "range_slider_cylindrical_capacity", "set_value_click_cylindrical_capacity", 1, 0, 1000, 500);
                span_testation_price.innerHTML = 50 + " lei";
                span_price_roads.innerHTML = 0 + " lei";
                break;
            }

        case 'autobuz':
            {
                form_buttons_range_slider.style.display = "block";
                authorized_mass_buttons.style.display = "block";
                max_places_in_buss.style.display = "block";
                cylindrical_capacity_buttons.style.display = "none";
                own_mass.style.display = "none";

                add_buttons_to_rangeSlider(30000, "range_slider_maximum_authorized_mass", "set_value_click_maximum_authorized_mass", 0, 0, 35000, 5000);
                add_buttons_to_rangeSlider(120, "range_slider_places_in_buss", "set_value_click_range_slider_places_in_buss", 2, 0, 125, 15);
                span_testation_price.innerHTML = 0 + " lei";
                span_price_roads.innerHTML = 0 + " lei";
                break;
            }

        case 'camion':
            {
                form_buttons_range_slider.style.display = "block";
                authorized_mass_buttons.style.display = "block";
                cylindrical_capacity_buttons.style.display = "none";
                max_places_in_buss.style.display = "none";
                own_mass.style.display = "none";

                add_buttons_to_rangeSlider(30000, "range_slider_maximum_authorized_mass", "set_value_click_maximum_authorized_mass", 0, 0, 35000, 5000);
                span_testation_price.innerHTML = 0 + " lei";
                span_price_roads.innerHTML = 0 + " lei";
                break;
            }

        case 'remorca':
            {
                form_buttons_range_slider.style.display = "block";
                authorized_mass_buttons.style.display = "block";
                cylindrical_capacity_buttons.style.display = "none";
                max_places_in_buss.style.display = "none";
                own_mass.style.display = "none";

                add_buttons_to_rangeSlider(100000, "range_slider_maximum_authorized_mass", "set_value_click_maximum_authorized_mass", 0, 0, 105000, 10000);
                span_testation_price.innerHTML = 150 + " lei";
                span_price_roads.innerHTML = 0 + " lei";
                break;
            }

        case 'semiremorca':
            {
                form_buttons_range_slider.style.display = "block";
                authorized_mass_buttons.style.display = "block";
                own_mass.style.display = "block";
                cylindrical_capacity_buttons.style.display = "none";
                max_places_in_buss.style.display = "none";

                add_buttons_to_rangeSlider(100000, "range_slider_maximum_authorized_mass", "set_value_click_maximum_authorized_mass", 0, 0, 105000, 10000);
                add_buttons_to_rangeSlider(100000, "range_slider_own_mass", "set_value_click_range_slider_own_mass", 3, 0, 105000, 10000);

                span_testation_price.innerHTML = 150 + " lei";
                span_price_roads.innerHTML = 0 + " lei";
                break;
            }

        case 'tractor':
            {
                form_buttons_range_slider.style.display = "none";
                span_testation_price.innerHTML = 150 + " lei";
                span_price_roads.innerHTML = 2250 + " lei";
                break;
            }
    }
}
//===================================================================================

//===================================================================================
input_mass.onkeyup = function set_mass() {
    maximum_authorized_mass.value = input_mass.value;
    show_price_mass(input_mass.value, 'testation_price');
}

maximum_authorized_mass.oninput = function printResult() {
    result = this.value;
    input_mass.value = result;
    show_price_mass(result, 'testation_price');
}

function set_value_click_maximum_authorized_mass(number) {
    maximum_authorized_mass.value = number;
    input_mass.value = number;
    show_price_mass(input_mass.value, 'testation_price');

    // input_own_mass.setAttribute("maxlength",number.toString().length);
    // add_buttons_to_rangeSlider(number,"range_slider_own_mass", "set_value_click_range_slider_own_mass", 3, 0, number+10000, 10000);
}
//===================================================================================

//===================================================================================
input_cylindrical.onkeyup = function set_mass() {
    cylindrical_capacity.value = input_cylindrical.value;
    show_price_cylindricalCapacity(cylindrical_capacity.value, 'price_roads');
}

cylindrical_capacity.oninput = function printResult() {
    input_cylindrical.value = this.value;
    show_price_cylindricalCapacity(input_cylindrical.value, 'price_roads');
}

function set_value_click_cylindrical_capacity(number) {
    cylindrical_capacity.value = number;
    input_cylindrical.value = number;
    show_price_cylindricalCapacity(input_cylindrical.value, 'price_roads');
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
    show_price_by_max_places_in_buss(range_slider_places_in_buss.value, 'price_roads');
}

range_slider_places_in_buss.oninput = function print_places_in_buss() {
    input_places_in_buss.value = this.value;
    show_price_by_max_places_in_buss(this.value, 'price_roads');
}

function set_value_click_range_slider_places_in_buss(number) {
    range_slider_places_in_buss.value = number;
    input_places_in_buss.value = number;
    show_price_by_max_places_in_buss(number, 'price_roads');
}
//=====================================================================================

//=====================================================================================
function show_price_mass(price_testation, span_id) {
    final_price_testation = 0;

    if (price_testation <= 2000) {
        final_price_testation = 150;
    }
    else if (price_testation >= 2001 && price_testation <= 3500) {
        final_price_testation = 200;
    }
    else if (price_testation >= 3501 && price_testation <= 10000) {
        final_price_testation = 250;
    }
    else if (price_testation >= 10001 && price_testation <= 20000) {
        final_price_testation = 300;
    }
    else if (price_testation >= 20000) {
        final_price_testation = 350;
    }

    switch (selected_category) {
        case 'camion':
            {
                price_roads=0;
                if(price_testation<=1600){
                    price_roads=1200;
                }
                else if(price_testation>=1600 && price_testation<=5000){
                    price_roads=2250;
                }
                else if(price_testation>=5000 && price_testation<=10000){
                    price_roads=3000;
                }
                else if(price_testation>=10000){
                    price_roads=4500;
                }
                document.getElementById("price_roads").innerHTML = price_roads + " lei";
                break;
            }
    }

    document.getElementById(span_id).innerHTML = final_price_testation + " lei";
}
function show_price_cylindricalCapacity(price_roads, span_id) {
    if (price_roads <= 2000) {
        price_roads *= 0.60;
    }
    else if (price_roads >= 2001 && price_roads <= 3500) {
        price_roads *= 0.90;
    }
    else if (price_roads >= 3501 && price_roads <= 10000) {
        price_roads *= 1.20;
    }
    else if (price_roads >= 10001 && price_roads <= 20000) {
        price_roads *= 1.50;
    }
    else if (price_roads >= 20000) {
        price_roads *= 1.80;
    }

    document.getElementById(span_id).innerHTML = price_roads + " lei";
}
function show_price_by_max_places_in_buss(price, span_id) {
    if (price <= 11) {
        price = 2925;
    }
    else if (price >= 12 && price <= 17) {
        price = 3600;
    }
    else if (price >= 18 && price <= 24) {
        price = 4275;
    }
    else if (price >= 25 && price <= 40) {
        price = 4725;
    }
    else if (price >= 40) {
        price = 5400;
    }

    document.getElementById(span_id).innerHTML = price + " lei";
}
//=====================================================================================





//===================================================================================
function add_buttons_to_rangeSlider(max_rangeSlider_value, name_rangeSlider, name_functionOF_rangeSlider, index_class___info_range_slider, rangeSTART, rangeEND, incrementation) {
    //setting max lenght of range slider
    document.getElementById(name_rangeSlider).setAttribute("max", max_rangeSlider_value);

    // deleting all child elements of element info_range_sliders
    document.getElementsByClassName("info_range_slider")[index_class___info_range_slider].innerHTML = '';

    //creating the next structure of span => in order to insert in range slider
    //<span onclick="set_value_click_range_slider_own_mass(0)">1</span>
    for (let i = rangeSTART; i < rangeEND; i += incrementation) {
        span = document.createElement("span");
        span.setAttribute("onclick", name_functionOF_rangeSlider + "(" + i + ")");
        span.innerHTML = i;
        document.getElementsByClassName("info_range_slider")[index_class___info_range_slider].appendChild(span);
    }
}
//===================================================================================
