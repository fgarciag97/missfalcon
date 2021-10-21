<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ReporteController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function reporte($id_municipio = null)
    {
        $pdf = new \FPDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $this->loadModel('Rondas');
        $rondas = $this->Rondas->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $pagina = 0;
        foreach ($rondas as $key){
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial', 'B', 30);
        $pdf->Image(WWW_ROOT . 'img/logo_miss.jpeg', 10, 5, 35, 35, "JPEG", "");
        $pdf->SetY(12);
        $pdf->Cell(40, 0, '', 0, 0, 'L');
        $pdf->Cell(0, 10, utf8_decode('Miss Falcón'), 0, 1, 'L');
        $pdf->Cell(40, 0, '', 0, 0, 'L');
        $pdf->SetFont('Arial', '', 20);
        $pdf->Cell(0, 10, utf8_decode('Reporte sobre votaciones'), 0, 1, 'L');
        $pdf->SetFillColor(68, 114, 195);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->ln(15);

        $pausa = count($rondas);
        $pagina++;

        $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(275, 7, utf8_decode('RONDA: '.$key['denominacion']), 1, 1, 'L', TRUE);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(10, 5, '#', 1, 0, 'C', TRUE);
        $pdf->Cell(80, 5, 'JURADO', 1, 0, 'C', TRUE);
        $pdf->Cell(80, 5, 'CANDIDATA', 1, 0, 'C', TRUE);
        $pdf->Cell(75, 5, 'MUNICIPIO', 1, 0, 'C', TRUE);
        $pdf->Cell(30, 5, 'PUNTUACION', 1, 1, 'C', TRUE);

        $this->loadModel('ViewCalificacion');
        $consulta = $this->ViewCalificacion->find('all')->order(['nombre_jurado' => 'ASC', 'candidata' => 'ASC'])->toArray();
        $pdf->SetTextColor(0, 0, 0);
        foreach ($consulta as $key2) {
                if ($key['id'] == $key2['id_ronda']) {
                    $contador += 1;
                    $pdf->Cell(10, 5, $contador, 1, 0, 'C');
                    $pdf->Cell(80, 5, utf8_decode($key2['nombre_jurado']), 1, 0, 'L', TRUE);
                    $pdf->Cell(80, 5, utf8_decode($key2['candidata']), 1, 0, 'L', TRUE);
                    $pdf->Cell(75, 5, utf8_decode($key2['candidata_municipio']), 1, 0, 'L', TRUE);
                    $pdf->Cell(30, 5, utf8_decode($key2['puntuacion']. '/5 Pts'), 1, 1, 'C', TRUE);
                }
            }
            $pdf->SetFillColor(68, 114, 195);
            $pdf->SetTextColor(255, 255, 255);
            if ($pagina != $pausa) {
                $pdf->AddPage();
            }
        }
        $pdf->Output('Reporte.pdf', 'I');
        exit();
    }
} 