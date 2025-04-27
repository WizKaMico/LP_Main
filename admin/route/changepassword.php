
        <div class="form-container sign-in-container">
            <form action="?view=CHANGEPASSWORD&action=CHANGEPASSWORD" method="POST">
                <h5>Hi! <?php echo $_GET['email']; ?></h5>
                <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required="" readonly=""/>
                <input type="password" name="password" placeholder="Password" />
                <button style="width:100%;" name="submit">Change Password</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Agent</h1>
                </div>
            </div>
        </div>