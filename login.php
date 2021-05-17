<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ofix</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div id="container">
        <div id="header">
            <a href="index.php"><div id="logo">
                <img src="logo.png">
                <p>Ofix</p>
            </div></a>
            <div id="search-bar">
                
                <div  id="search-box">
                    <input type="text" placeholder="Search for anything...">
                    <a href="#"><i class="fas fa-search"></i></a>
                </div>
            
            
            </div>
            <div id="courses">
                <h1>My courses</h1>
            </div>
            
            <div id="wishlist">
                <a href=#wish><i class="fas fa-clipboard-list"></i></a>
            </div>
            <div id="cart">
                <a href=#cart><i class="fas fa-shopping-cart"></i></a>
            </div>
            
            <div id="sign-up">
                <a href="register.php">
                <button>Sign up</button>
                </a>
            </div>

            <div id="sign-in">
                <a href="login.php">
                <button>Sign in</button>
                </a>
            </div>

            

        </div>

       
        
        <div class="content-login">
            <div id="border-login">
                <h1>Sign in</h1>
                <form method="POST">
                    <i class="fas fa-user"></i><input type="text" id="login" name="login" placeholder="Login">
                    <i class="fas fa-lock"></i><input type="password" id="password" name="password" placeholder="Password">
                    <button type="submit" id="button-login" name="button-login">Log in </button>
                </form>
                <h4>You don't have account yet? <a href="register.php">Sign up!</a></h4>

            </div>
        </div>



    </div>
        
        
    </body>
</html>