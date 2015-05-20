<?php ob_start(); ?>
    <h1> SUBSCRIBE </h1>
    
    <form name="subscribe" method="post" action="./subscribe" id="subscribe">
        <div id="containerInputsLogin">
            <span>User:</span><input type="text" class="textLogin" name="name" data-validate="validate(required)" /><br /><br />
            <span>Password:</span> <input type="password" class="textLogin" name="password" data-validate="validate(required)" />
        </div>
        <input type="submit" class="buttonSubmit" value="SUBSCRIBE" />
        <a href="/DB_Project/web/user/login"><input type="button" class="buttonSubmit" value="RETURN" /></a>
    </form>

<?php $content = ob_get_clean(); ?>
<?php include 'layout1.php' ?>
