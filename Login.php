<?php include 'attachments/head.php'; ?>


<!-- <div class="container" style="height: 100vh;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="Login.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="login-wrapper">
    <div class="container">
        <div class="row" style="display: flex; justify-content: center; align-items: center; height: 100vh">
         <div class="login-form">
            <div class="login-heading">
                <h1>Login</h1>
            </div>
            <form action="Login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="forget-txt mt-10">
                    <p>Forget your password?</p>
                </div>

                <button class="login-btn">Login</button>
                <div class="text-center mt-10">
                    <p>Don't have an account? <a href="Register.php">Register</a></p>
                </div>
         </div>
        </div>
    </div>
</div>


<?php include 'attachments/foot.php'; ?>