<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Endroid\QrCode;
use Illuminate\Support\Facades\DB;

class QRcodeControllerEndroid extends Controller
{
    public function generate($url)
    {
        $qrCode = new QrCode($url);
        header('Content-Type: '.$qrCode->getContentType());
        return $qrCode->writeString();
    }
}
