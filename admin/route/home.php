<div class="form-container sign-up-container">
            <form action="?view=HOME&action=FORGOT" method="POST">
                <h3>Recover Account</h3>
                <input type="email" name="email" placeholder="Email" required=""/>
                <button style="width:100%;" name="submit">Recover Account</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="?view=LOGIN&action=LOGIN" method="POST">
                <h1>Sign in</h1>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button style="width:100%;" name="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Sign-in Now</h1>
                    <p>To keep connected with us please login with your info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Agent</h1>
                    <p>Dont remember your password ? </p>
                    <button class="ghost" id="signUp">Forgot password</button>
                </div>
            </div>
        </div>