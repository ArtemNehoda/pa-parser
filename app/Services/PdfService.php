<?php

namespace App\Services;

class PdfService
{
    public function download(string $view, array $params, string $filename)
    {
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        return response()->streamDownload(function () use ($view, $params) {
            $pdf = $this->generatePdf($view, $params);
            echo $pdf->output();
        }, $filename, $headers)->send();
    }

    private function generatePdf(string $view, array $params)
    {
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView(
            $view,
            $params
        );
        return $pdf;
    }
}
