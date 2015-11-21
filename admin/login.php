<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../content/assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../content/assets/css/login.css" />
    </head>
    <body class='login-screen'>
        <div class="container login-container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default panel-login">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                Login
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login.php" class='form-horizontal'>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name='name' class='form-control' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password:</label>
                                    <div class="col-sm-10">
                                        <input type='password' name='password' class='form-control' />
                                    </div>
                                </div>
                                <input type="submit" value="login" class='btn btn-primary center-block btn-block'/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- JavaScripts -->
        <script type="text/javascript" src="../content/assets/plugins/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="../content/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
