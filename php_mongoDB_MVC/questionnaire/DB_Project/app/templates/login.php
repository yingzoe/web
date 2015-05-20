<?php ob_start(); ?>

    <h1> LOGIN </h1>
                    
    <form name="login" method="post" action="./auth" id="login">
            <div id="containerInputsLogin">
                <span>User:</span><input type="text" class="textLogin" name="name" data-validate="validate(required)" /><br /><br />
                <span>Password:</span> <input type="password" class="textLogin" name="password" data-validate="validate(required)" />
            </div>
            <input type="submit" class="buttonSubmit" value="GET IN" />
             <input type="button" class="buttonSubmit" value="SUBSCRIBE" onclick="location='/DB_Project/web/user/subscribe'"/>
    </form>

<?php $content = ob_get_clean(); ?>

<?php include 'layout1.php' ?>