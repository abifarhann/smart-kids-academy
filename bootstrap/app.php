<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    
// Helper untuk format nomor WhatsApp
function formatWhatsAppNumber($phoneNumber) {
    $cleanNumber = preg_replace('/\D/', '', $phoneNumber);
    
    if (substr($cleanNumber, 0, 2) === '08') {
        $cleanNumber = '628' . substr($cleanNumber, 2);
    } elseif (substr($cleanNumber, 0, 1) === '8') {
        $cleanNumber = '62' . $cleanNumber;
    } elseif (substr($cleanNumber, 0, 2) !== '62') {
        $cleanNumber = '62' . $cleanNumber;
    }
    
    return $cleanNumber;
}

// Helper untuk generate URL WhatsApp
function whatsappUrl($phoneNumber, $message = '') {
    $formattedNumber = formatWhatsAppNumber($phoneNumber);
    $url = "https://wa.me/{$formattedNumber}";
    
    if (!empty($message)) {
        $url .= "?text=" . urlencode($message);
    }
    
    return $url;
}