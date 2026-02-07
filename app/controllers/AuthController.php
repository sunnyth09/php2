<?php
class AuthController extends Controller
{
    public function register()
    {
        $this->view('auth/register');
    }

    public function store()
    {
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username && $email && $password) {
            $userModel = $this->model('User');
            if ($userModel->findByEmail($email)) {
                $this->view('auth/register', ['error' => 'Email already exists']);
                return;
            }
            $userModel->create([
                'username' => $username,
                'email' => $email,
                'password' => $password
            ]);
            $this->redirect('/auth/login');
        } else {
            $this->view('auth/register', ['error' => 'Please fill all fields']);
        }
    }

    public function login()
    {
        $this->view('auth/login');
    }

    public function authenticate()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $userModel = $this->model('User');
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user'] = $user;
            $this->redirect('/');
        } else {
            $this->view('auth/login', ['error' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        $this->redirect('/auth/login');
    }
}
