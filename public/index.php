<?php
declare(strict_types=1);

require_once __ROOT__ . '/src/utils/include.php';

use App\Somatik\Album;

$albums = Album::getAll();

render('login.php', 'Login', ['albums' => $albums]);
