<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Symfony\Component\HttpFoundation\Response;

class CSSController extends Controller
{
public function __construct()
{
}

public function generateCSS()
{
$file = public_path() . "/css/new_style.css";

if (file_exists($file)) {
return response()
->file($file, ['Content-Type' => 'text/css']);
} else {
return response()
->view('custom.css', [], 200)
->header('Content-Type', 'text/css');
}
}
}

