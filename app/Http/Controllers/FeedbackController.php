<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        $details = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];

        Mail::to('raulocu23@gmail.com')->send(new FeedbackMail($details));

        return response()->json(['message' => 'Masukan berhasil dikirim!']);
    }
}
