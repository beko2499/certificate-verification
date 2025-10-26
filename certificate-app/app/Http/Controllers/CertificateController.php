<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function verify(Request $request)
    {
        $request->validate([
            'serial_number' => 'required|string',
        ]);

        $certificate = Certificate::where('serial_number', $request->serial_number)->first();

        if ($certificate) {
            $message = $certificate->is_verified ? "شهادة صحيحة ✅" : "الشهادة غير موثقة ❌";
        } else {
            $message = "الشهادة غير موجودة ❌";
        }

        return view('verify', compact('message'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}