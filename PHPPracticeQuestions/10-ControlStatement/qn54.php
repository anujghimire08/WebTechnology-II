<?php

/*match Expression (PHP 8+) -> Use match expression to assign a status message based on HTTP status codes: 200="OK", 404="Not Found", 500="Server Error". */

$statusCode = 404;

$message = match ($statusCode) {
    200 => "OK",
    404 => "Not Found",
    500 => "Server Error",
    default => "Unknown Status Code"
};

echo $message;
