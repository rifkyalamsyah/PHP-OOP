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