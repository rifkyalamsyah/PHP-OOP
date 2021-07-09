<?php

// Exception
// Final Keyword


// exception/ValidationException.php 
// Example
/*
<?php

// Exception
class ValidationException extends Exception {

}
*/

// -----------------------------------------------------------------

// helper/Exception.php
// Example
/*
<?php

// Exception
function validateLoginRequest(LoginRequest $request)
{
    if(!isset($request->username)) {
        throw new ValidationException("Username is null");
    } else if (!isset($request->password)) { 
        throw new ValidationException("Password is null");
    } else if (trim($request->username) == "") {
        throw new Exception("Username is empty");
    } else if (trim($request->password) == "") {
        throw new Exception("Password is empty");
    }
}
*/

// -----------------------------------------------------------------

// data/LoginRequest.php 
// Example
/*
<?php

// Exception
class LoginRequest
{
    public string $username;
    public string $password;
}
*/

// -----------------------------------------------------------------


// Mengakses Exception
// Exception.php 
// Example

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
// Example
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
