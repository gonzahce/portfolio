<?php include(HTML_DIR . 'overall/header.php'); ?>
    
<h2>Helooo log</h2>

<?php
if(isset($_SESSION['app_id'])) {
    echo '<a href="?view=logout">'. strtoupper($_users[$_SESSION['app_id']]['user']) .'</a>';
} else {
    echo '<div role="form" onkeypress="return runScriptReg(event)">';
    echo '<input type="text" id="user_reg" placeholder="Introducir Email">';
    echo '<input type="password" id="pass_reg" placeholder="Introducir Contraseña">';
    echo '<input type="password" id="pass_dos" placeholder="Introducir Contraseña otra vezs">';
    echo '</br><label><input type="checkbox" id="tyc_reg" value="1" checked>Acepto los T&C</label>';
    echo '</br><button type="button" onclick="goReg()">Registarse</button>';
    echo '</div>';
    echo '<div id="_AJAX_REG_"></div>';
} ?>


<script src="views/app/js/reg.js"></script>

<?php include(HTML_DIR . 'overall/footer.php'); ?>