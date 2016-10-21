<?php
function loadform() {
    echo '<form method="POST" class="main_form">';
    echo '<label>Uw naam</label>';
    echo '<input type="text" name="klantnaam"/>';
    echo '<input type="submit" value="verzend!"/>';
    echo '</form>';
}
function databaseconnect() {
    
}
?>