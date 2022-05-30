<?php
// <!-- /* htmlspecialcharsを短くする（ファンクション化） */ -->
function h($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}
?>