<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Sanmisha\Report;

class Candidate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'application_date',
        'ref_no',
        'check_id',
        'name',
        'father_name',
        'dob',
        'pos',
        'address',
        'pincode',
        'city',
        'state',
        'district',
        'verification_date',
        'file_name',
        'status'
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::creating(function (Candidate $candidate) {
            $fileName = Str::slug($candidate->name);
            $exists = Candidate::firstWhere('file_name', $fileName);

            $x = 1;
            while($exists) {
                $fileName = Str::slug($candidate->name) . "-" . $x;
                $exists = Candidate::firstWhere('file_name', $fileName);
                $x++;
            }
            $candidate->file_name = $fileName;
        });

        static::created(function (Candidate $candidate) {
            $candidate = Candidate::find($candidate->id);

            $watermarkReports = ['report_1', 'report_2'];
            $layout = Auth::user()->form_layout;
            $watermark = in_array($layout, $watermarkReports);

            $report = new Report();
            $report->generate($candidate, $layout, $watermark);
        });
    }

    public function setApplicationDateAttribute($value)
    {
        $this->attributes['application_date'] = $value != null ? Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d') : null;
    }

    public function getApplicationDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function getDobAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function setVerificationDateAttribute($value)
    {
        $this->attributes['verification_date'] = $value != null ? Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d') : null;
    }

    public function getVerificationDateAttribute($value)
    {
        return !is_null($value) ? Carbon::parse($value)->format('d/m/Y') : null;
    }
}
