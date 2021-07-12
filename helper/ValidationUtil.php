<?php

// Reflection


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
