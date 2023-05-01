<?php

namespace App\Sanmisha;

use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Report
{
    public function generate($candidate)
    {
        $data = $candidate->toArray();

        if(Auth::user()->form_layout == 'Form_4'){
            $pdf = PDF::loadView('report_4', compact('data'));            
        } else  if(Auth::user()->form_layout == 'Form_2'){
            $pdf = PDF::loadView('report_2', compact('data'));
        } else if(Auth::user()->form_layout == 'Form_3'){
            $pdf = PDF::loadView('report_3', compact('data'));
        } else {
            $pdf = PDF::loadView('report', compact('data'));
        }

        $pdf->setPaper('letter', 'portrait');
        $pdf->render();

        if(Auth::user()->form_layout == 'Form_1' || Auth::user()->form_layout == 'Form_2'){
            // Instantiate canvas instance
            $canvas = $pdf->getCanvas();

            // Get height and width of page
            $w = $canvas->get_width();
            $h = $canvas->get_height();

            // Specify watermark image
            $imageURL = env('BASE_PATH', '').'images/watermark.png';
            $imgWidth = 400;
            $imgHeight = 426;

            // Set image opacity
            $canvas->set_opacity(0.15);

            // Specify horizontal and vertical position
            $x = (($w-$imgWidth)/2);
            $y = (($h-$imgHeight)/2.5);

            // Add an image to the pdf
            $canvas->image($imageURL, $x, $y, $imgWidth, $imgHeight);

        }

        $path = public_path("reports/".Auth::user()->id);

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $pdf->save($path . "/" . $candidate->file_name . ".pdf");
    }
}
