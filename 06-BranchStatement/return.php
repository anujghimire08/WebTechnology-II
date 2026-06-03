<?php
function getDiscount($price) {
    if ($price <= 0) {
        return 0; 
    }

    return $price * 0.10;
}

echo getDiscount(-1);
?>