<?php

class AuthController
{
    public function register()
    {
        $supabase = include(__DIR__ . '/../config/supabase.php');
        $auth = $supabase['auth']();

        try {
            $auth->createUserWithEmailAndPassword('newuser@email.com', 'password123');
            echo 'User created successfully!';
        } catch (Exception $e) {
            echo $auth->getError();
        }
    }

    public function login()
    {
        $supabase = include(__DIR__ . '/../config/supabase.php');
        $auth = $supabase['auth']();

        try {
            $auth->signInWithEmailAndPassword('user@email.com', 'password123');
            $data = $auth->data();
            echo 'Login successful!';
        } catch (Exception $e) {
            echo $auth->getError();
        }
    }
}
