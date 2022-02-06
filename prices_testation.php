<?php include "php/head.php"; ?>
<style>
    input:focus,
    input:hover {
        -webkit-box-shadow: none;
        box-shadow: none;
        border-color: none;
    }

    form {
        background: #3b459e;
        padding: 4%;
        border: 8px solid #0a99d1;
        border-radius: 7.5px;
        color: #0a99d1;
        font-weight: bolder;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    form>div {
        display: flex;
        align-items: center;
    }

    form div>input[type=text] {
        width: 10%;
        margin-left: 3%;
        border: none;
        border-bottom: 3px solid #0a99d1;
        background: none;
        padding: 6px;
        color: #0a99d1;
        font-family: fantasy;
        margin: 0 2%;
    }

    ul#category_select {
        display: flex;
        flex-wrap: wrap;
        text-align: center;
        justify-content: center;
    }

    ul#category_select>li {
        margin: 1%;
        font-family: fantasy;
        font-weight: bold;
        font-size: 1.22em;
        text-transform: lowercase;
    }

    ul#category_select>li svg {
        background: #886ED7;
        text-align: center;
        color: white;
        width: 125px;
        height: 105px;
        padding: 10%;
    }

    ul#category_select>li:hover {
        cursor: pointer;
    }

    ul#category_select>li:hover svg {
        transition: 1s ease-in;
        background: #422C83;
        color: #AF66D5;
    }

    #output>p {
        border: 5px solid lightsalmon;
        display: flex;
    }

    #output>p b,
    #output>p span {
        padding: 2%;
        display: block;
        border-bottom: 5px solid orangered;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    #output>p b {
        background-color: lightsalmon;
        width: 30%;
        text-align: right;
    }

    #output>p span {
        width: 70%;
        font-size: 1.2em;
        font-family: fantasy;
    }


    .prices table th,
    .prices table td {
        padding: 1.5%;
        border: 3px solid #886ED7;
    }

    .prices table {
        border-collapse: collapse;
        border: 4px solid #886ED7;
        width: 70%;
        margin: 0 auto;
    }

    .prices table thead th:first-of-type {
        width: 4vw;
    }
    .prices table th {
        background: #886ED7;
        color: white;
        font-size: 1.3em;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .nr_criteria_styles{
        font-size: 2em;
        text-align: center;
        font-weight: bold;
    }
    .prices table td {
        font-size: 1.1em;
    }

    .prices table td:nth-child(2) {
        text-align: center;
    }
</style>

<body>
    <header>
        <?php include "php/menu.php"; ?>
    </header>
    <br><br><br><br><br>
    <section class="center_content">
        <ul id="category_select">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car" class="svg-inline--fa fa-car fa-w-16" role="img" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z" />
                </svg>
                <p>Autoturism</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="motorcycle" class="svg-inline--fa fa-motorcycle fa-w-20" role="img" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z" />
                </svg>
                <p>Motocicleta</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bus" class="svg-inline--fa fa-bus fa-w-16" role="img" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h6.4c16 0 25.6-12.8 25.6-25.6V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM112 400c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm16-112c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h256c17.67 0 32 14.33 32 32v128c0 17.67-14.33 32-32 32H128zm272 112c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z" />
                </svg>
                <p>Autobuz</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-moving" class="svg-inline--fa fa-truck-moving fa-w-20" role="img" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M621.3 237.3l-58.5-58.5c-12-12-28.3-18.7-45.3-18.7H480V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v336c0 44.2 35.8 80 80 80 26.3 0 49.4-12.9 64-32.4 14.6 19.6 37.7 32.4 64 32.4 44.2 0 80-35.8 80-80 0-5.5-.6-10.8-1.6-16h163.2c-1.1 5.2-1.6 10.5-1.6 16 0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H624c8.8 0 16-7.2 16-16v-85.5c0-17-6.7-33.2-18.7-45.2zM80 432c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm128 0c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm272-224h37.5c4.3 0 8.3 1.7 11.3 4.7l43.3 43.3H480v-48zm48 224c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32z" />
                </svg>
                <p>Camion</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trailer" class="svg-inline--fa fa-trailer fa-w-20" role="img" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M624,320H544V80a16,16,0,0,0-16-16H16A16,16,0,0,0,0,80V368a16,16,0,0,0,16,16H65.61c7.83-54.21,54-96,110.39-96s102.56,41.79,110.39,96H624a16,16,0,0,0,16-16V336A16,16,0,0,0,624,320ZM96,243.68a176.29,176.29,0,0,0-32,20.71V136a8,8,0,0,1,8-8H88a8,8,0,0,1,8,8Zm96-18.54c-5.31-.49-10.57-1.14-16-1.14s-10.69.65-16,1.14V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8Zm96,39.25a176.29,176.29,0,0,0-32-20.71V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8ZM384,320H352V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8Zm96,0H448V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8Zm-304,0a80,80,0,1,0,80,80A80,80,0,0,0,176,320Zm0,112a32,32,0,1,1,32-32A32,32,0,0,1,176,432Z" />
                </svg>
                <p>Remorca</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-loading" class="svg-inline--fa fa-truck-loading fa-w-20" role="img" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M50.2 375.6c2.3 8.5 11.1 13.6 19.6 11.3l216.4-58c8.5-2.3 13.6-11.1 11.3-19.6l-49.7-185.5c-2.3-8.5-11.1-13.6-19.6-11.3L151 133.3l24.8 92.7-61.8 16.5-24.8-92.7-77.3 20.7C3.4 172.8-1.7 181.6.6 190.1l49.6 185.5zM384 0c-17.7 0-32 14.3-32 32v323.6L5.9 450c-4.3 1.2-6.8 5.6-5.6 9.8l12.6 46.3c1.2 4.3 5.6 6.8 9.8 5.6l393.7-107.4C418.8 464.1 467.6 512 528 512c61.9 0 112-50.1 112-112V0H384zm144 448c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z" />
                </svg>
                <p>SemiRemorca</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tractor" class="svg-inline--fa fa-tractor fa-w-20" role="img" viewBox="0 0 640 512">
                    <path fill="currentColor" d="M528 336c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 112c-13.23 0-24-10.77-24-24s10.77-24 24-24 24 10.77 24 24-10.77 24-24 24zm80-288h-64v-40.2c0-14.12 4.7-27.76 13.15-38.84 4.42-5.8 3.55-14.06-1.32-19.49L534.2 37.3c-6.66-7.45-18.32-6.92-24.7.78C490.58 60.9 480 89.81 480 119.8V160H377.67L321.58 29.14A47.914 47.914 0 0 0 277.45 0H144c-26.47 0-48 21.53-48 48v146.52c-8.63-6.73-20.96-6.46-28.89 1.47L36 227.1c-8.59 8.59-8.59 22.52 0 31.11l5.06 5.06c-4.99 9.26-8.96 18.82-11.91 28.72H22c-12.15 0-22 9.85-22 22v44c0 12.15 9.85 22 22 22h7.14c2.96 9.91 6.92 19.46 11.91 28.73l-5.06 5.06c-8.59 8.59-8.59 22.52 0 31.11L67.1 476c8.59 8.59 22.52 8.59 31.11 0l5.06-5.06c9.26 4.99 18.82 8.96 28.72 11.91V490c0 12.15 9.85 22 22 22h44c12.15 0 22-9.85 22-22v-7.14c9.9-2.95 19.46-6.92 28.72-11.91l5.06 5.06c8.59 8.59 22.52 8.59 31.11 0l31.11-31.11c8.59-8.59 8.59-22.52 0-31.11l-5.06-5.06c4.99-9.26 8.96-18.82 11.91-28.72H330c12.15 0 22-9.85 22-22v-6h80.54c21.91-28.99 56.32-48 95.46-48 18.64 0 36.07 4.61 51.8 12.2l50.82-50.82c6-6 9.37-14.14 9.37-22.63V192c.01-17.67-14.32-32-31.99-32zM176 416c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm22-256h-38V64h106.89l41.15 96H198z" />
                </svg>
                <p>tractor</p>
            </li>
        </ul>

        <form action="">
            <div>
                <label for="maximum_authorized_mass">Masa maximă autorizată</label>
                <input type="text" placeholder="0" id="input_mass" maxlength="5">
            </div>
            <input class="range_slider" type="range" name="maximum_authorized_mass" class="slider" id="maximum_authorized_mass" min="0" max="20000">

            <div>
                <label for="cylindrical_capacity">Capacitatea cilindrica</label>
                <input type="text" placeholder="0" maxlength="4" id="input_cylindrical">
            </div>
            <input class="range_slider" type="range" name="maximum_authorized_mass" class="slider" id="cylindrical_capacity" min="0" max="5000">
        </form>

        <br>
        <br>
        <article id="output">
            <p><b>Taxa pentru testarea tehnică:</b> <span>0</span></p>
            <p><b>Taxa pentru folosirea drumurilor:</b> <span>0</span></p>
        </article>
    </section>
    <br>
    <br>
    <section class="center_content prices">
        <table>
            <tr>
                <th>Toate categoriile de vehicule cu masa totală indicată în certificatul de înmatriculare, kg </th>
                <th>Suma taxei, lei/unitate</th>
            </tr>
            <tr>
                <td>Motociclete</td>
                <td>50</td>
            </tr>

            <tr>
                <td>Pînă la 2000kg inclusiv</td>
                <td>150</td>
            </tr>
            <tr>
                <td>De la 2001kg la 3500kg inclusiv </td>
                <td>200</td>
            </tr>
            <tr>
                <td>De la 3501kg la 10000kg inclusiv</td>
                <td>250</td>
            </tr>

            <tr>
                <td>De la 10001kg la 20000kg inclusiv</td>
                <td>300</td>
            </tr>
            <tr>
                <td>De peste 20000kg</td>
                <td>350</td>
            </tr>
            <tr>
                <td>Remorci şi semiremorci pînă la 1000kg inclusiv</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Remorci şi semiremorci de peste 1000kg</td>
                <td>150</td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Nr.<br>crt.</th>
                    <th>Obiectul impunerii</th>
                    <th>Unitatea de măsură</th>
                    <th>Taxa - lei</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td rowspan="3" class="nr_criteria_styles">1</td>
                    <td colspan="3">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="motorcycle" class="svg-inline--fa fa-motorcycle fa-w-20" role="img" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M512.9 192c-14.9-.1-29.1 2.3-42.4 6.9L437.6 144H520c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24h-45.3c-6.8 0-13.3 2.9-17.8 7.9l-37.5 41.7-22.8-38C392.2 68.4 384.4 64 376 64h-80c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h66.4l19.2 32H227.9c-17.7-23.1-44.9-40-99.9-40H72.5C59 104 47.7 115 48 128.5c.2 13 10.9 23.5 24 23.5h56c24.5 0 38.7 10.9 47.8 24.8l-11.3 20.5c-13-3.9-26.9-5.7-41.3-5.2C55.9 194.5 1.6 249.6 0 317c-1.6 72.1 56.3 131 128 131 59.6 0 109.7-40.8 124-96h84.2c13.7 0 24.6-11.4 24-25.1-2.1-47.1 17.5-93.7 56.2-125l12.5 20.8c-27.6 23.7-45.1 58.9-44.8 98.2.5 69.6 57.2 126.5 126.8 127.1 71.6.7 129.8-57.5 129.2-129.1-.7-69.6-57.6-126.4-127.2-126.9zM128 400c-44.1 0-80-35.9-80-80s35.9-80 80-80c4.2 0 8.4.3 12.5 1L99 316.4c-8.8 16 2.8 35.6 21 35.6h81.3c-12.4 28.2-40.6 48-73.3 48zm463.9-75.6c-2.2 40.6-35 73.4-75.5 75.5-46.1 2.5-84.4-34.3-84.4-79.9 0-21.4 8.4-40.8 22.1-55.1l49.4 82.4c4.5 7.6 14.4 10 22 5.5l13.7-8.2c7.6-4.5 10-14.4 5.5-22l-48.6-80.9c5.2-1.1 10.5-1.6 15.9-1.6 45.6-.1 82.3 38.2 79.9 84.3z"></path>
                        </svg>
                        <b>Motociclete cu capacitatea cilindrică a motorului:</b>
                    </td>
                </tr>
                <tr>
                    <td>a) de pînă la 500 cm3 inclusiv </td>
                    <td>unitate</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>b) de peste 500 cm3 </td>
                    <td>unitate</td>
                    <td>600</td>
                </tr>


                <tr>
                    <td rowspan="6" class="nr_criteria_styles">2</td>
                    <td colspan="3">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car" class="svg-inline--fa fa-car fa-w-16" role="img" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z"></path>
                        </svg>
                        <b>Autoturisme, autovehicule pentru utilizări speciale pe şasiu de autoturism cu capacitatea cilindrică a motorului:</b>
                    </td>
                </tr>
                <tr>
                    <td>a) de pînă la 2000 cm<sup>3</sup> inclusiv</td>
                    <td>cm<sup>3</sup></td>
                    <td>0,60</td>
                </tr>
                <tr>
                    <td>b) de la 2001 la 3000 cm<sup>3</sup> inclusiv</td>
                    <td>cm<sup>3</sup></td>
                    <td>0,90</td>
                </tr>
                <tr>
                    <td>c) de la 3001 la 4000 cm<sup>3</sup> inclusiv</td>
                    <td>cm<sup>3</sup></td>
                    <td>1,20</td>
                </tr>
                <tr>
                    <td>d) de la 4001 la 5000 cm<sup>3</sup> inclusiv</td>
                    <td>cm<sup>3</sup></td>
                    <td>1,50</td>
                </tr>
                <tr>
                    <td>e) de peste 5001 cm<sup>3</sup>
                    <td>cm<sup>3</sup></td>
                    <td>1.80</td>
                </tr>

                <tr>
                    <td class="nr_criteria_styles">3</td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trailer" class="svg-inline--fa fa-trailer fa-w-20" role="img" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M624,320H544V80a16,16,0,0,0-16-16H16A16,16,0,0,0,0,80V368a16,16,0,0,0,16,16H65.61c7.83-54.21,54-96,110.39-96s102.56,41.79,110.39,96H624a16,16,0,0,0,16-16V336A16,16,0,0,0,624,320ZM96,243.68a176.29,176.29,0,0,0-32,20.71V136a8,8,0,0,1,8-8H88a8,8,0,0,1,8,8Zm96-18.54c-5.31-.49-10.57-1.14-16-1.14s-10.69.65-16,1.14V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8Zm96,39.25a176.29,176.29,0,0,0-32-20.71V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8ZM384,320H352V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8Zm96,0H448V136a8,8,0,0,1,8-8h16a8,8,0,0,1,8,8Zm-304,0a80,80,0,1,0,80,80A80,80,0,0,0,176,320Zm0,112a32,32,0,1,1,32-32A32,32,0,0,1,176,432Z"></path>
                        </svg>
                        <b>Remorci</b>
                    </td>
                    <td>tona</td>
                    <td>270</td>
                </tr>

                <tr>
                    <td rowspan="3" class="nr_criteria_styles">4</td>
                    <td colspan="3">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-loading" class="svg-inline--fa fa-truck-loading fa-w-20" role="img" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M50.2 375.6c2.3 8.5 11.1 13.6 19.6 11.3l216.4-58c8.5-2.3 13.6-11.1 11.3-19.6l-49.7-185.5c-2.3-8.5-11.1-13.6-19.6-11.3L151 133.3l24.8 92.7-61.8 16.5-24.8-92.7-77.3 20.7C3.4 172.8-1.7 181.6.6 190.1l49.6 185.5zM384 0c-17.7 0-32 14.3-32 32v323.6L5.9 450c-4.3 1.2-6.8 5.6-5.6 9.8l12.6 46.3c1.2 4.3 5.6 6.8 9.8 5.6l393.7-107.4C418.8 464.1 467.6 512 528 512c61.9 0 112-50.1 112-112V0H384zm144 448c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"></path>
                        </svg>
                        <b>Semiremorci cu capacitatea de ridicare înscrisă în certificatul de înmatriculare:</b>
                    </td>
                </tr>
                <tr>
                    <td>a) de pînă la 20 t inclusiv </td>
                    <td>tona</td>
                    <td>225</td>
                </tr>
                <tr>
                    <td>b) de peste 20 t</td>
                    <td>unitate</td>
                    <td>4500</td>
                </tr>

                <tr>
                    <td class="nr_criteria_styles">5</td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tractor" class="svg-inline--fa fa-tractor fa-w-20" role="img" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M528 336c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 112c-13.23 0-24-10.77-24-24s10.77-24 24-24 24 10.77 24 24-10.77 24-24 24zm80-288h-64v-40.2c0-14.12 4.7-27.76 13.15-38.84 4.42-5.8 3.55-14.06-1.32-19.49L534.2 37.3c-6.66-7.45-18.32-6.92-24.7.78C490.58 60.9 480 89.81 480 119.8V160H377.67L321.58 29.14A47.914 47.914 0 0 0 277.45 0H144c-26.47 0-48 21.53-48 48v146.52c-8.63-6.73-20.96-6.46-28.89 1.47L36 227.1c-8.59 8.59-8.59 22.52 0 31.11l5.06 5.06c-4.99 9.26-8.96 18.82-11.91 28.72H22c-12.15 0-22 9.85-22 22v44c0 12.15 9.85 22 22 22h7.14c2.96 9.91 6.92 19.46 11.91 28.73l-5.06 5.06c-8.59 8.59-8.59 22.52 0 31.11L67.1 476c8.59 8.59 22.52 8.59 31.11 0l5.06-5.06c9.26 4.99 18.82 8.96 28.72 11.91V490c0 12.15 9.85 22 22 22h44c12.15 0 22-9.85 22-22v-7.14c9.9-2.95 19.46-6.92 28.72-11.91l5.06 5.06c8.59 8.59 22.52 8.59 31.11 0l31.11-31.11c8.59-8.59 8.59-22.52 0-31.11l-5.06-5.06c4.99-9.26 8.96-18.82 11.91-28.72H330c12.15 0 22-9.85 22-22v-6h80.54c21.91-28.99 56.32-48 95.46-48 18.64 0 36.07 4.61 51.8 12.2l50.82-50.82c6-6 9.37-14.14 9.37-22.63V192c.01-17.67-14.32-32-31.99-32zM176 416c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm22-256h-38V64h106.89l41.15 96H198z"></path>
                        </svg>
                        <b>Autoremorchere, tractoare</b>
                    </td>
                    <td>unitate</td>
                    <td>2250</td>
                </tr>

                <tr>
                    <td rowspan="5" class="nr_criteria_styles">6</td>
                    <td colspan="3"><b>Autocamioane, autovehicule pentru utilizări speciale pe şasiu de autocamion, orice alte autovehicule cu autopropulsie, cu masa totală:</b></td>
                </tr>
                <tr>
                    <td>a) de pînă la 1,6 t inclusiv</td>
                    <td>unitate</td>
                    <td>1200</td>
                </tr>
                <tr>
                    <td>b) de la 1,6 la 5 t inclusiv</td>
                    <td>unitate</td>
                    <td>2250</td>
                </tr>
                <tr>
                    <td>c) de la 5 la 10 t inclusiv </td>
                    <td>unitate</td>
                    <td>3000</td>
                </tr>
                <tr>
                    <td>d) de peste 10 t</td>
                    <td>unitate</td>
                    <td>4500</td>
                </tr>

                <tr>
                    <td rowspan="6" class="nr_criteria_styles">7</td>
                    <td colspan="3">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bus" class="svg-inline--fa fa-bus fa-w-16" role="img" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h6.4c16 0 25.6-12.8 25.6-25.6V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM112 400c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm16-112c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h256c17.67 0 32 14.33 32 32v128c0 17.67-14.33 32-32 32H128zm272 112c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path>
                        </svg>
                        <b>Autobuze cu capacitatea:*</b>
                    </td>
                </tr>
                <tr>
                    <td>a) de pînă la 11 locuri </td>
                    <td>unitate</td>
                    <td>2925</td>
                </tr>
                <tr>
                    <td>b) de la 12 la 17 locuri inclusiv</td>
                    <td>unitate</td>
                    <td>3600</td>
                </tr>
                <tr>
                    <td>c) de la 18 la 24 locuri inclusiv</td>
                    <td>unitate</td>
                    <td>4275</td>
                </tr>
                <tr>
                    <td>d) de la 25 la 40 locuri inclusiv</td>
                    <td>unitate</td>
                    <td>4275</td>
                </tr>
                <tr>
                    <td>e) de peste 40 locuri</td>
                    <td>unitate</td>
                    <td>5400</td>
                </tr>
                <tr>
                    <td colspan="4"><b>* Numărul de locuri se calculează fără locul şoferului.</b></td>
                </tr>
            </tbody>
        </table>
    </section>

    <script>
        document.title = "Calculator Revizie tehnică și impozit rutier";

        maximum_authorized_mass = document.getElementById("maximum_authorized_mass");
        input_mass = document.getElementById("input_mass");

        input_mass.onkeyup = function set_mass() {
            maximum_authorized_mass.value = input_mass.value;
        }

        maximum_authorized_mass.oninput = function printResult() {
            input_mass.value = this.value;
        }

        //===================================================================================

        cylindrical_capacity = document.getElementById("cylindrical_capacity");
        input_cylindrical = document.getElementById("input_cylindrical");

        input_cylindrical.onkeyup = function set_mass() {
            cylindrical_capacity.value = input_cylindrical.value;
        }

        cylindrical_capacity.oninput = function printResult() {
            input_cylindrical.value = this.value;
        }
    </script>
    <br><br>
    <a href="https://rapidasig.md/informatii-utile/testare-tehnica-taxa-drumuri">Sursa de inspirare</a>
    <?php include "php/footer.php"; ?>
</body>