<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public function show(Certificate $certificate) {

        $user = Auth::user();

        if ($certificate->user_id !== $user->id) {
            return redirect('/');
        }

        return view('certificate.show', compact('certificate', 'user'));
    }
}
