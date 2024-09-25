<div id="registration-form">
    <div>
        <h1>Login</h1>
    </div>
    <form action="#" method="post" id="user-register" data-validate="parsley">
        <div class='row'>
            <br>
        </div>

        <div class='row'>
            <label for="email">E-mail</label>
            <input type="text" placeholder="E-mail"  name='user[email]' id='email' data-required="true" data-type="email" data-error-message="Your E-mail is required">
        </div>
        <div class="row">
            <br>
        </div>
        <div class='row'>
            <label for="password">Password</label>
            <input type="password" placeholder="Password"  name='user[password]' id='password' data-required="true" data-type="password" data-error-message="Your Password is required">
        </div>
        <div class="row">
            <br>
        </div>
        <input type="submit" value="Login">
        <hr>
        <p style="text-align: center">New here? <a href="/register">Register</a></p>

    </form>
    <!--    </div>-->
</div>
