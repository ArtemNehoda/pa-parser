<?php

namespace App\Services;

class PdfService
{
    public function download(string $view, array $params, string $filename)
    {
        $pdf = $this->generatePdf($view, $params);
        return $pdf->download($filename);
    }

    private function generatePdf(string $view, array $params)
    {
        $pdf = app()->make('dompdf.wrapper');
        // $pdf->setOptions(['dpi' => 130]);
        $pdf->loadView(
            $view,
            $params
        );
        return $pdf;
    }
}
