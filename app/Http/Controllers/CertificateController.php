<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Auth;
use PDF;

class CertificateController extends Controller
{
    public function show(Certificate $certificate) {

        $user = Auth::user();

        if ($certificate->user_id !== $user->id) {
            return redirect('/');
        }

        return view('certificate.show', compact('certificate'));
    }

    public function guest($certificate_number) {

        $certificate = Certificate::where('certificate_number', $certificate_number)->first();

        return view('certificate.show', compact('certificate'));
    }

    public function pdf(Certificate $certificate, Request $request) {

        if (!$request->full_name || $request->full_name == "") {
            return view('certificate.show', compact('certificate'));
        }

        $fullName = request()->validate([
            'full_name' => 'required|string',
        ]);

        $fullName['full_name'] = trim($fullName['full_name']);

        $certificate->update($fullName);

        // $data = [
        //     'full_name' => $certificate->full_name,
        //     'number' => $certificate->certificate_number,
        //     'dated' => $certificate->issued_at,
        // ];

        $path = public_path('c/' . $certificate->certificate_number . '.pdf');
        $pdf = PDF::loadView('certificate.pdf', compact('certificate'))->setPaper('a4', 'landscape');
        $pdf->save($path);
    }

    public function full_name(Request $request) {

        $certificate = Certificate::find($request->certificate_id);

        if (!$request->full_name || trim($request->full_name) == "") {
            return redirect()->route('certificate.show', $certificate);
        }

        $fullName = request()->validate([
            'full_name' => 'required|string',
        ]);

        $fullName['full_name'] = trim($fullName['full_name']);

        $certificate->update($fullName);

        // $data = [
        //     'full_name' => $certificate->full_name,
        //     'certificate_number' => $certificate->certificate_number,
        //     'issued_at' => $certificate->issued_at,
        // ];

        $path = public_path('c/' . $certificate->certificate_number . '.pdf');
        $pdf = PDF::loadView('certificate.pdf', compact('certificate'))->setPaper('a4', 'landscape');
        $pdf->save($path);

        return redirect()->route('certificate.show', $certificate);
    }

    public function html(Certificate $certificate) {

        $user = Auth::user();

        if ($certificate->user_id !== $user->id) {
            return redirect('/');
        }

        return view('certificate.pdf', compact('certificate', 'user'));
    }
}
