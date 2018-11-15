<html>
    <head>
        <title>Page login et register</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="col-md-6">    
                <h2>Login</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Pseudo</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit">connexion</button>
                </form>
            </div>

            <div class="col-md-6">    
                <h2>Register</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Pseudo</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </body>
</html>


<?

?>