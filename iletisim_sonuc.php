<?php
echo "<h2>Gönderilen Bilgiler</h2>";
echo "<ul>";
foreach ($_GET as $key => $value) {
    echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . nl2br(htmlspecialchars($value)) . "</li>";
}
echo "</ul>";
?>