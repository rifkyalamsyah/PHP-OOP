<?php

// Reflection


// helper/ValidationUtil.php 
// Example

// Validation Tanpa Reflaction
/*
class ValidateUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is null");
        } else if (!isset($request->password)) {
            throw new ValidationException("passsword is null");
        }
    }
}
*/

// Validation Menggunakan Reflection
class ValidateUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationException("passsword is not set");
        } else if (is_null($request->password)) {
            throw new ValidationException("username is null");
        } else if (is_null($request->password)) {
            throw new ValidationException("passsword is null");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}


// Mengakses Reflection
// Reflection.php
// Example
/*
<?php

// Reflection

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Rifky";
$request->password = "Rahasia";

// Vallidation Secara Manual
// ValidateUtil::validate($request);

ValidateUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;  
}

$register = new RegisterUserRequest();
$register->name = "Rifky";
$register->address = "Jogja";
$register->emaill = "rifkyalamsyah30#gmail.com";

ValidateUtil::validateReflection($register);

// Error
// ValidateUtil::validate($register);
 */