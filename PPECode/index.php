<?php 

    session_start();



?> 

<?php 

    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) { 
        echo '<ul style="padding:0; color:red;">'; 

        foreach($_SESSION['ERRMSG_ARR'] as $msg) { 
        echo '<li>',$msg,'</li>'; 
    } 

    echo '</ul>'; 
        unset($_SESSION['ERRMSG_ARR']); 
    }
?> 
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
    </head>


    <body>
        <div class="loginForm">
            <form action="reg.php" method="POST">
                Identifiant<br>
                <input type="text" name="identifiant" /><br>
                Mot de passe<br>
                <input  type="password" name="pwd" /><br>
                <div class="submit">
                    <input  type="submit" value="Login" /> 
                </div>
                <br>
                <a href="new_usr.php">Créer un compte</a>
                <br><br>
                <a href="#">Restaurer son mot de passe?</a>
            </form>
        </div> 
    </body>