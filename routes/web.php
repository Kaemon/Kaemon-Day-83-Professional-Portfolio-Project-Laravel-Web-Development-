<?php

use App\Models\AboutMe;
use App\Models\Education;
use App\Models\Hero;
use App\Models\HobbyPhoto;
use App\Models\SiteSetting;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
    try {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|string|max:2000',
        ]);

        $setting = SiteSetting::first();
        $toEmail = $setting?->to_email ?? 'kaemonng1017@gmail.com';

        Http::withToken(config('services.resend.key'))
            ->post('https://api.resend.com/emails', [
                'from' => 'Portfolio Contact <onboarding@resend.dev>',
                'to' => [$toEmail],
                'subject' => "Portfolio Contact from {$data['name']}",
                'text' => "Name: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
                'reply_to' => $data['email'],
            ])
            ->throw();

        return response()->json(['success' => true]);
    } catch (Exception $e) {
        $msg = get_class($e).': '.$e->getMessage();
        error_log('[contact] '.$msg);
        logger()->error('Contact failed: '.$msg);

        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
});
