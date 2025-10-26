<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Barryvdh\DomPDF\Facade\Pdf;

return new class extends Migration
{
    public function downloadPDF($id)
{
    $certificate = Certificate::findOrFail($id);
    $pdf = Pdf::loadView('pdf.certificate', compact('certificate'));
    return $pdf->download('certificate_'.$certificate->serial_number.'.pdf');
}


    public function up(): void
{
    Schema::create('admins', function (Blueprint $table) {
        $table->id();
        $table->string('username')->unique();
        $table->string('password');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
