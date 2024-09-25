<div id="registration-form">
        <div>
            <h1>Register</h1>
        </div>
        <form action="#" method="post" id="user-register" data-validate="parsley">
            <div class='row'>
                <label for='first_name'>First Name</label>
                <input type="text" placeholder="First Name" name='user[first_name]' id='first_name' data-required="true" data-error-message="Your First Name is required">
            </div>
            <div class='row'>
                <label for='last_name'>Last Name</label>
                <input type="text" placeholder="Last Name" name='user[last_name]' id='last_name' data-required="true" data-error-message="Your Last Name is required">
            </div>
            <div class='row'>
                <label for="email">E-mail</label>
                <input type="text" placeholder="E-mail"  name='user[email]' id='email' data-required="true" data-type="email" data-error-message="Your E-mail is required">
            </div>
            <div class='row'>
                <label for="password">Password</label>
                <input type="password" placeholder="Password"  name='user[password]' id='password' data-required="true" data-type="password" data-error-message="Your Password is required">
            </div>
            <div class="row">
                <br>
            </div>
            <input type="submit" value="Register">
            <hr>
            <p style="text-align: center">Already got an account? <a href="/login">Login</a></p>
        </form>
<!--    </div>-->
</div>
