<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        Certificate::create([
            'student_name' => 'أحمد محمد',
            'university' => 'جامعة الخرطوم',
            'degree' => 'بكالوريوس علوم الحاسوب',
            'serial_number' => 'ABC12345',
            'is_verified' => true
        ]);
    }
}
