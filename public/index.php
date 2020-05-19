<?php
declare(strict_types=1);

use App\Somatik\Artist;

$authorized_only = true;

require_once __ROOT__ . '/src/utils/include.php';
require_once __ROOT__ . '/src/security.php';

render('artists.php', 'Artists', ['artists' => Artist::getAll()]);