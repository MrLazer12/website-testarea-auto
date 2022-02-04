<?php include "php/head.php"; ?>

<body>
    <header>
        <?php include "php/menu.php"; ?>

        <article class="preview_header">
            <img src="img/preview_header.jpg" alt="preview_header">
            <div>
                <h1 class="h1_text_colored_shadow">Testare Auto</h1>
                <br>
                <p>Punct De Inspecție Auto în XXXXXX<br>
                Deschis astăzi până la ora 17:00</p>
                <button onclick="redirect_user('prices_testation.php')">Costul</button>
                <button>Programeaza-te</button>
            </div>
        </article>
    </header>

    
    <section id="login_section">
        <button onclick="close_form('login_section')">X</button>
        <form action="" method="post">
            <label for="login_l">Login</label>
            <input type="text" name="login" id="login_l">
            <label for="password_l">Password</label>
            <input type="password" name="password" id="password_l">
            <div>
                <p><a href="">Create accaunt</a></p>
                <p><a href="">Recover accaunt</a></p>
            </div>
            <br>
            <input type="submit" value="Logare">
        </form>
    </section>

    <section id="register_section">
        <button onclick="close_form('register_section')">X</button>
        <form action="" method="post">
            <label for="login_r">Login</label>
            <input type="text" name="login_r" id="login_r">

            <label for="email_r">Email</label>
            <input type="text" name="login_r" id="email_r">

            <label for="password_r">Password</label>
            <input type="password" name="password_r" id="password_r">
        
            <label for="confirm_password_r">Confirm password</label>
            <input type="password" name="confirm_password_r" id="confirm_password_r">
            <br>
            <input type="submit" value="Register">
        </form>
    </section>


    <br>
    <div id="company_news" class="title_block_content center_content">
        <h3 class="h1_text_colored_shadow">NOUTĂȚI</h3>
    </div>
    <div class="block_news center_content">
        <div class="news_item">
            <img src="img/news_item_default_photo.jpg" alt="news_item_default_photo.jpg">
            <h4>Postat pe 20.02.2020</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maxime error optio dignissimos. Sit quod voluptates repellat tempora ipsam explicabo voluptatum eius tenetur odit eaque, hic fugit, doloremque perferendis modi.</p>
            <a href="">Află mai multe</a>
        </div>
        <div class="news_item">
            <img src="img/news_item_default_photo.jpg" alt="news_item_default_photo.jpg">
            <h4>Postat pe 20.02.2020</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti voluptate eveniet doloremque maiores consequuntur illo voluptatem. Dolor similique magni dolores. Fuga excepturi numquam impedit, optio expedita hic repellendus consequuntur!</p>
            <a href="">Află mai multe</a>
        </div>
        <div class="news_item">
            <img src="img/news_item_default_photo.jpg" alt="news_item_default_photo.jpg">
            <h4>Postat pe 20.02.2020</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quod cum consequuntur tempore architecto at aliquid dolorem temporibus minus ullam atque, modi repellat perspiciatis eaque ratione nostrum fugit eius quibusdam.</p>
            <a href="">Află mai multe</a>
        </div>
    </div>


    <section id="about_company" class="about_company">
        <article class="center_content">
            <h1 class="h1_text_colored_shadow">Despre noi</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sequi dicta officiis tempora voluptatibus, voluptas odio quam minima incidunt pariatur culpa sapiente error. Alias temporibus ut dolore dignissimos repudiandae consequatur.</p>
            <br><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sequi dicta officiis tempora voluptatibus, voluptas odio quam minima incidunt pariatur culpa sapiente error. Alias temporibus ut dolore dignissimos repudiandae consequatur.</p>
            <br><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sequi dicta officiis tempora voluptatibus, voluptas odio quam minima incidunt pariatur culpa sapiente error. Alias temporibus ut dolore dignissimos repudiandae consequatur.</p>
        </article>
    </section>


    <div class="title_block_content center_content">
        <h3 class="h1_text_colored_shadow">COMENTARII</h3>
    </div>
    <article class="best_comments center_content">
        <div class="comment">
            <div>
                <p>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                </p>
                <p>17.06.2021</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illum alias, perferendis quia praesentium iusto non quae odio nesciunt consequuntur cumque natus reiciendis veritatis ipsam perspiciatis autem tempora? Facere, hic.</p>
            <h3>- User</h3>
        </div>
        <div class="comment">
            <div>
                <p>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                </p>
                <p>17.06.2021</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illum alias, perferendis quia praesentium iusto non quae odio nesciunt consequuntur cumque natus reiciendis veritatis ipsam perspiciatis autem tempora? Facere, hic.</p>
            <h3>- User</h3>
        </div>
        <div class="comment">
            <div>
                <p>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                    <i class="star"></i>
                </p>
                <p>17.06.2021</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illum alias, perferendis quia praesentium iusto non quae odio nesciunt consequuntur cumque natus reiciendis veritatis ipsam perspiciatis autem tempora? Facere, hic.</p>
            <h3>- User</h3>
        </div>
    </article>
    <br>
    <div class="comments_buttons center_content">
        <button>ARATĂ MAI MULTE</button>
    </div>

    <br><br>
    <article id="company_services" class="company_services_description">
        <div class="center_content">
            <h2 class="company_services_main_title">Serviiciile <b>noastre</b></h2>
            <h4>Verificam</h4>
            <br>
            <br>
            <div class="list-services">
                <div class="service">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="algolia" class="svg-inline--fa fa-algolia fa-w-14" role="img" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M229.3 182.6c-49.3 0-89.2 39.9-89.2 89.2 0 49.3 39.9 89.2 89.2 89.2s89.2-39.9 89.2-89.2c0-49.3-40-89.2-89.2-89.2zm62.7 56.6l-58.9 30.6c-1.8.9-3.8-.4-3.8-2.3V201c0-1.5 1.3-2.7 2.7-2.6 26.2 1 48.9 15.7 61.1 37.1.7 1.3.2 3-1.1 3.7zM389.1 32H58.9C26.4 32 0 58.4 0 90.9V421c0 32.6 26.4 59 58.9 59H389c32.6 0 58.9-26.4 58.9-58.9V90.9C448 58.4 421.6 32 389.1 32zm-202.6 84.7c0-10.8 8.7-19.5 19.5-19.5h45.3c10.8 0 19.5 8.7 19.5 19.5v15.4c0 1.8-1.7 3-3.3 2.5-12.3-3.4-25.1-5.1-38.1-5.1-13.5 0-26.7 1.8-39.4 5.5-1.7.5-3.4-.8-3.4-2.5v-15.8zm-84.4 37l9.2-9.2c7.6-7.6 19.9-7.6 27.5 0l7.7 7.7c1.1 1.1 1 3-.3 4-6.2 4.5-12.1 9.4-17.6 14.9-5.4 5.4-10.4 11.3-14.8 17.4-1 1.3-2.9 1.5-4 .3l-7.7-7.7c-7.6-7.5-7.6-19.8 0-27.4zm127.2 244.8c-70 0-126.6-56.7-126.6-126.6s56.7-126.6 126.6-126.6c70 0 126.6 56.6 126.6 126.6 0 69.8-56.7 126.6-126.6 126.6z" />
                        </svg>
                        suspendărea
                    </h3>
                    <p>sistemul de rulare (rulmenţi, amortizatoare, silent-blok-uri, anvelope, etc)</p>
                </div>

                <div class="service">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="searchengin" class="svg-inline--fa fa-searchengin fa-w-15" role="img" viewBox="0 0 460 512">
                            <path fill="currentColor" d="M220.6 130.3l-67.2 28.2V43.2L98.7 233.5l54.7-24.2v130.3l67.2-209.3zm-83.2-96.7l-1.3 4.7-15.2 52.9C80.6 106.7 52 145.8 52 191.5c0 52.3 34.3 95.9 83.4 105.5v53.6C57.5 340.1 0 272.4 0 191.6c0-80.5 59.8-147.2 137.4-158zm311.4 447.2c-11.2 11.2-23.1 12.3-28.6 10.5-5.4-1.8-27.1-19.9-60.4-44.4-33.3-24.6-33.6-35.7-43-56.7-9.4-20.9-30.4-42.6-57.5-52.4l-9.7-14.7c-24.7 16.9-53 26.9-81.3 28.7l2.1-6.6 15.9-49.5c46.5-11.9 80.9-54 80.9-104.2 0-54.5-38.4-102.1-96-107.1V32.3C254.4 37.4 320 106.8 320 191.6c0 33.6-11.2 64.7-29 90.4l14.6 9.6c9.8 27.1 31.5 48 52.4 57.4s32.2 9.7 56.8 43c24.6 33.2 42.7 54.9 44.5 60.3s.7 17.3-10.5 28.5zm-9.9-17.9c0-4.4-3.6-8-8-8s-8 3.6-8 8 3.6 8 8 8 8-3.6 8-8z" />
                        </svg>
                        funcționărea motorului
                    </h3>
                    <p>sistemul de alimentare, sistemul lubrifiant, dispozitivul de evacuare a gazelor, zgomotul produs</p>
                </div>

                <div class="service">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cubes" class="svg-inline--fa fa-cubes fa-w-16" role="img" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M488.6 250.2L392 214V105.5c0-15-9.3-28.4-23.4-33.7l-100-37.5c-8.1-3.1-17.1-3.1-25.3 0l-100 37.5c-14.1 5.3-23.4 18.7-23.4 33.7V214l-96.6 36.2C9.3 255.5 0 268.9 0 283.9V394c0 13.6 7.7 26.1 19.9 32.2l100 50c10.1 5.1 22.1 5.1 32.2 0l103.9-52 103.9 52c10.1 5.1 22.1 5.1 32.2 0l100-50c12.2-6.1 19.9-18.6 19.9-32.2V283.9c0-15-9.3-28.4-23.4-33.7zM358 214.8l-85 31.9v-68.2l85-37v73.3zM154 104.1l102-38.2 102 38.2v.6l-102 41.4-102-41.4v-.6zm84 291.1l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6zm240 112l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6z" />
                        </svg>
                        sistemul de franare
                    </h3>
                    <p>sistem de frânare, frâna de staționare (funcționare, etanșeitate)</p>
                </div>

                <div class="service">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compass" class="svg-inline--fa fa-compass fa-w-16" role="img" viewBox="0 0 496 512">
                            <path fill="currentColor" d="M225.38 233.37c-12.5 12.5-12.5 32.76 0 45.25 12.49 12.5 32.76 12.5 45.25 0 12.5-12.5 12.5-32.76 0-45.25-12.5-12.49-32.76-12.49-45.25 0zM248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm126.14 148.05L308.17 300.4a31.938 31.938 0 0 1-15.77 15.77l-144.34 65.97c-16.65 7.61-33.81-9.55-26.2-26.2l65.98-144.35a31.938 31.938 0 0 1 15.77-15.77l144.34-65.97c16.65-7.6 33.8 9.55 26.19 26.2z" />
                        </svg>
                        sistemul de directie
                    </h3>
                    <p>jocul volanului, servomecanism (funcționare)</p>
                </div>

                <div class="service">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="first-aid" class="svg-inline--fa fa-first-aid fa-w-18" role="img" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M0 80v352c0 26.5 21.5 48 48 48h48V32H48C21.5 32 0 53.5 0 80zm128 400h320V32H128v448zm64-248c0-4.4 3.6-8 8-8h56v-56c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v56h56c4.4 0 8 3.6 8 8v48c0 4.4-3.6 8-8 8h-56v56c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8v-56h-56c-4.4 0-8-3.6-8-8v-48zM528 32h-48v448h48c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z" />
                        </svg>
                        mijloace de prim ajutor
                    </h3>
                    <p>trusa medicală și componentele acesteia, stingător de incendiu</p>
                </div>

                <div class="service">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="ethereum" class="svg-inline--fa fa-ethereum fa-w-10" role="img" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z" />
                        </svg>
                        Alte elemente
                    </h3>
                    <p>parbrizul, geamurile, oglinzile retrovizoare, vitezometrul, centurile de siguranță, șasiul, caroseria (funcționalitate, concordanță)</p>
                </div>
            </div>
            <br>
            <br>
        </div>
    </article>

    <br><br>
    <div id="galeria" class="title_block_content center_content">
        <h3 class="h1_text_colored_shadow">GALERIA</h3>
    </div>
    <div class="gallery center_content">
        <?php
        $gallery = scandir("img/gallery");
        unset($gallery[0]);
        unset($gallery[1]);
        $gallery = array_values($gallery);
        for ($i = 0; $i < count($gallery); $i++) {
            echo '<img src="img/gallery/' . $gallery[$i] . '" alt="' . $gallery[$i] . '">';
        }
        ?>
    </div>
    <br><br>


    <section id="contact_company" class="contact_company">
        <article class="center_content">
            <div>
                <h1 class="h1_text_colored_shadow">Contact US</h1>
                <form action="/action_page.php">
                    <label for="fname">Nume</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Prenume</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Localitate</label>
                    <select id="country" name="country">
                        <option value="chisinau">Chisinau</option>
                        <option value="ialoveni">Ialoveni</option>
                        <option value="causeni">Causeni</option>
                    </select>

                    <label for="subject">Subiectu</label>
                    <textarea id="subject" name="subject" placeholder="Scrieti mesajul..." rows="15"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </article>
    </section>
    <?php include "php/footer.php"; ?>
    <script src="js/login_register_form_logic.js"></script>
</body>

</html>