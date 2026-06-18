<?php

use App\Models\AboutMe;
use App\Models\Education;
use App\Models\Hero;
use App\Models\HobbyPhoto;
use App\Models\SiteSetting;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'hero' => Hero::first(),
        'about' => AboutMe::first(),
        'work' => WorkExperience::orderBy('sort_order')->get(),
        'education' => Education::orderBy('sort_order')->get(),
        'hobbies' => HobbyPhoto::orderBy('sort_order')->take(12)->get(),
        'setting' => SiteSetting::first(),
    ]);
});

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'message' => 'required|string|max:2000',
    ]);

    $setting = SiteSetting::first();
    $toEmail = $setting?->to_email ?? 'kaemonng1017@gmail.com';

    if ($setting?->to_email && $setting?->smtp_password) {
        config([
            'mail.mailers.smtp.username' => $setting->to_email,
            'mail.mailers.smtp.password' => $setting->smtp_password,
            'mail.from.address' => $setting->to_email,
        ]);
        Mail::purge('smtp');
    }

    try {
        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
            function ($mail) use ($data, $toEmail) {
                $mail->to($toEmail)
                    ->subject("Portfolio Contact from {$data['name']}")
                    ->replyTo($data['email'], $data['name']);
            }
        );
    } catch (\Exception $e) {
        logger()->error('Contact mail failed: ' . $e->getMessage());

        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }

    return response()->json(['success' => true]);
});
