<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PrintController extends Controller
{
      public function __construct()
      {
            $this->Borrow = new Borrow;
      }
      public function index()
      {
            $data = [
                  'borrow' => $this->Borrow->allData(),
            ];
            return view('borrows.list', $data);
      }
      public function print()
      {
            $data = [
                  'borrow' => $this->Borrow->allData(),
            ];
            return view('print', $data);
      }
      public function pdf()
      {
            $data = [
                  'borrow' => $this->Borrow->allData(),
            ];
            $html = view('pdf', $data);

            // instantiate and use the dompdf class
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            
            
            
            $dompdf->setPaper('A4', 'landscape');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream();
      }
}
