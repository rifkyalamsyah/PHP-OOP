<?php

// Exception
// Final Keyword

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";

// validateLoginRequest($loginRequest);

// Try Catch
/*
try{
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
}
*/


// Mutiple Try Catch (1)
/*
try{
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}
*/


// Mutiple Try Catch (2)
// Final Keyword
// Debug Exception
try{
    validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    // Debug Exception
    // Sebagai String
    echo $exception->getTraceAsString() . PHP_EOL;
    
    // Dump Trace
    var_dump($exception->getTrace());

} finally {
    // Final Keyword
    echo "ERROR ATAU TIDAK, AKAN DI EKSEKUSI" . PHP_EOL;
}


echo "VALID" . PHP_EOL;