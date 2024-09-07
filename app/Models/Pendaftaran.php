<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pendaftaran';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'peserta_id',
        'jenis_sertifikat_id',
        'status_pembayaran',
        'lulus',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status_pembayaran' => 'boolean',
            'lulus' => 'boolean',
        ];
    }

    public function jenisSertifikat(): BelongsTo
    {
        return $this->belongsTo(JenisSertifikat::class);
    }

    public function peserta(): BelongsTo
    {
        return $this->belongsTo(Peserta::class);
    }
}
