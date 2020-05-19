<?php
declare(strict_types=1);

use App\Somatik\Artist;

require_once __ROOT__ . '/src/utils/include.php';
require_once __ROOT__ . '/src/security.php';

$data = $_POST;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __ROOT__ . '/src/utils/validation.php';

//    $errors = validate($data, [
//        'email' => 'required|email',
//        'password' => 'required|string'
//    ]);

    if (empty($errors)) {
        $user = Artist::resolve($data['email']);
        if ($user && $user->login($data['password'])) {
            set_session_current_user($user);
            header("Location: /admin/index");
            die();
        } else {
            $errors['email'] = 'Invalid email or password';
        }
    }
}

render('login.php', 'Login', $errors);
