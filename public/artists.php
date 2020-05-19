<?php
declare(strict_types=1);

use App\Somatik\Artist;

require_once __ROOT__ . '/src/utils/include.php';

render('artists.php', 'Artists', ['artists' => Artist::getAll()]);
