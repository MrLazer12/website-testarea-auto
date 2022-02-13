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