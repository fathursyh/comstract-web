<?php

namespace Database\Seeders;

use App\Models\JenisSertifikat;
use App\Models\Pendaftaran;
use App\Models\Peserta;
use App\Models\Sertifikat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Storage;

class PesertaSertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pdf_filename = 'example-certificate-1.pdf';
        $response = Http::get('https://www.edx.org/images/pdf/sample-course-certificate.pdf');

        if ($response->ok()) {
            if (!Storage::put($pdf_filename, $response->resource())) throw new \RuntimeException("Error Processing Request");
        } else {
            throw new \RuntimeException("Error Processing Request");
        }

        $pdf_filename2 = 'example-certificate-2.pdf';
        $response = Http::get('https://www.skillsforcare.org.uk/resources/documents/Developing-your-workforce/Care-Certificate/The-Care-Certificate-Template-PDF.pdf');

        if ($response->ok()) {
            if (!Storage::put($pdf_filename2, $response->resource())) throw new \RuntimeException("Error Processing Request");
        } else {
            throw new \RuntimeException("Error Processing Request");
        }

        $flyer_filename = 'example-fyler.jpg';
        $response = Http::get('https://unsplash.com/photos/Ap4h8QIxPVE/download?ixid=M3wxMjA3fDB8MXxhbGx8NHx8fHx8fDJ8fDE3MjU2MzQ4Mjd8&force=true&w=640');

        if ($response->ok()) {
            if (!Storage::put($flyer_filename, $response->resource())) throw new \RuntimeException("Error Processing Request");
        } else {
            throw new \RuntimeException("Error Processing Request");
        }

        $jenis_sertifikat = collect([]);

        for ($i = -3; $i <= 0; $i++) {
            for ($k = 1; $k <= 3; $k++) { 
                $date = fake()->dateTimeInInterval($i === 0 ? "now" : "$i years", $i === 0 ? '+2 months' : '+5 months');
                $filename = Str::random(40) . '.jpg';
                if (!Storage::copy($flyer_filename, "/public/flyer/$filename")) throw new \RuntimeException("Error Processing Request");

                $jenis_sertifikat->push(JenisSertifikat::factory()->create([
                    'nama' => fake()->sentence(3),
                    'batch' => $k,
                    'mitra' => fake()->sentence(4),
                    'pelaksanaan' => $date,
                    'flyer' => $filename,
                    'open' => $i === 0 ? true : fake()->boolean(20),
                ]));
            }
        }

        $peserta = Peserta::factory()->count(150)->create();
        $pendaftaran = collect([]);

        foreach ($peserta as $value) {
            $jenis_sertifikat_random = $jenis_sertifikat;

            if ($value->npm) {
                $tahun = (int) ('20' . Str::substr($value->npm, 4, 2));

                $tahun_angkatan = Carbon::create($tahun);

                $jenis_sertifikat_random = $jenis_sertifikat_random->filter(function ($value) use ($tahun_angkatan) {
                    $jarak = $tahun_angkatan->diffInYears($value->pelaksanaan);
                    return $jarak >= 0 && $jarak <= 3;
                });
            }

            for ($i = 0; $i < 2; $i++) {
                $pendaftaran->push(Pendaftaran::factory()->for($value)->for($jenis_sertifikat_random->random())->create());
            }
        }

        $pendaftaran->each(function ($value) use ($pdf_filename, $pdf_filename2) {
            if ($value->status_pembayaran) {
                $jenis_sertif = $value->jenisSertifikat;
                $identitas_peserta = $value->peserta;

                $attendance_filename = Str::random(40) . '.pdf';
                if (!Storage::copy($pdf_filename2, "/public/sertifikat/attendance/$attendance_filename")) throw new \RuntimeException("Error Processing Request");

                if ($value->lulus) {
                    $kelulusan_filename = Str::random(40) . '.pdf';
                    if (!Storage::copy($pdf_filename, "/public/sertifikat/kelulusan/$kelulusan_filename")) throw new \RuntimeException("Error Processing Request");

                    Sertifikat::factory()->for($jenis_sertif)->for($identitas_peserta)->create([
                        'kode' => fake()->numerify('Comstrac/##/##/###'),
                        'filename' => $kelulusan_filename,
                        'expired' => fake()->boolean() ? fake()->dateTimeBetween('now', '+7 months') : null,
                        'tipe' => 'kelulusan',
                    ]);
                }

                Sertifikat::factory()->for($jenis_sertif)->for($identitas_peserta)->create([
                    'kode' => fake()->numerify('Comstrac/##/##/###'),
                    'filename' => $attendance_filename,
                    'expired' => null,
                    'tipe' => 'attendance',
                ]);
            }
        });

        Storage::delete([$pdf_filename, $pdf_filename2, $flyer_filename]);
    }
}
