<?php include(HTML_DIR . 'overall/header.php'); ?>
    
<h2>Helooo log</h2>

<?php
if(isset($_SESSION['app_id'])) {
    echo '<a href="?view=logout">Logout</a>';
} else {
    echo '<div role="form" onkeypress="return runScriptLogin(event)">';
    echo '<input type="text" id="user" placeholder="Introducir Email">';
    echo '<input type="password" id="pass" placeholder="Introducir Contraseña">';
    echo '<button type="button" onclick="goLogin()">Iniciar Sesión</button>';
    echo '</div>';
    echo '<div id="_AJAX_LOGIN_"></div>';
} ?>


<script src="views/app/js/login.js"></script>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

