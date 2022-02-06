<nav id="menu">
    <a id="logo" href="index.php">Testare Auto</a>
    <ul>
        <li><a href="index.php#company_services">Serviciile noastre</a></li>
        <li><a href="index.php#about_company">Despre noi</a></li>
        <li><a href="index.php#galeria">Galeria</a></li>
        <li><a href="index.php#company_news">Noutati</a></li>
        <li><a href="index.php#contact_company">Contacteaza-ne</a></li>
    </ul>
    <?php
    if (isset($_SESSION['login']))
        echo '
        <ul>
            <li title="editare date">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" />
                </svg>
            </li>
            <li title="esire">
                <a href="logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z" />
                    </svg>
                </a>
            </li>
        </ul>';
    else
        echo '
        <ul>
            <li><a onclick="show_form(\'login_section\',\'register_section\')">Logare</a></li>
            <li><a onclick="show_form(\'register_section\',\'login_section\')">Inregistrare</a></li>
        </ul>
        ';
    ?>

</nav>