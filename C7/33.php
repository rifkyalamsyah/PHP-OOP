<?php 

// Final Function

class SocialMedia 
{
    public string $name;
}

// Final Class
final class Facebook extends SocialMedia
{
    // Final Function
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

// Error
/*
class FakeFacebook extends Facebook
{
    // Error
    final function login(string $username, string $password): bool
    {
        return true;
    }
}
*/