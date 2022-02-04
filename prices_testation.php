<?php include "php/head.php"; ?>
<style>
    input:focus, input:hover{
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: none;
    }

    form>div{
        display: flex;
        align-items: center;
    }
    form div>input[type=text]{
        width: 10%;
        margin-left: 3%;
    }
</style>
<body>
    <header>
        <?php include "php/menu.php"; ?>
    </header>
    <br><br><br><br><br>

    <section class="center_content">
        <form action="">
            <div>
                <label for="maximum_authorized_mass">masa maximă autorizată</label>
                <input type="text" value="0" id="input_mass" maxlength="5">
            </div>
            <input class="range_slider" type="range" name="maximum_authorized_mass" class="slider" id="maximum_authorized_mass" min="0" max="20000">

            <div>
                <label for="cylindrical_capacity">capacitatea cilindrica</label>
                <input type="text" value="0" maxlength="4" id="input_cylindrical">
            </div>
            <input class="range_slider" type="range" name="maximum_authorized_mass" class="slider" id="cylindrical_capacity" min="0" max="5000">
        </form>

        <article id="output">
            <p id="result1">masa maximă autorizată: 0</p>
            <p id="result2">capacitatea cilindrica: 0</p>
            <br>
            <p>Taxa pentru testarea tehnică: 0</p>
            <p>Taxa pentru folosirea drumurilor: 0</p>
        </article>
    </section>

    <script>
        document.title = "Calculator Revizie tehnică și impozit rutier";

        maximum_authorized_mass = document.getElementById("maximum_authorized_mass");
        result1 = document.getElementById("result1");
        input_mass = document.getElementById("input_mass");

        input_mass.onkeyup = function set_mass(){
            maximum_authorized_mass.value = input_mass.value;
        }

        maximum_authorized_mass.oninput = function printResult(){
            input_mass.value = this.value;
            result1.innerHTML = "masa maximă autorizată: "+ this.value;
        }

        //===================================================================================

        cylindrical_capacity = document.getElementById("cylindrical_capacity");
        result2 = document.getElementById("result2");
        input_cylindrical = document.getElementById("input_cylindrical");

        input_cylindrical.onkeyup = function set_mass(){
            cylindrical_capacity.value = input_cylindrical.value;
        }

        cylindrical_capacity.oninput = function printResult(){
            input_cylindrical.value = this.value;
            result2.innerHTML = "capacitatea cilindrica: "+ this.value;
        }
    </script>
    <br><br>
    <a href="https://rapidasig.md/informatii-utile/testare-tehnica-taxa-drumuri">Sursa de inspirare</a>
    <?php include "php/footer.php"; ?>
</body>