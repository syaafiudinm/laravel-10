<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $products = Product::get();
        $users = User::get();
        $data = [
            'title' => 'syaafiudinm Laravel',
            'date' => date('m/d/Y'),
            'products' => $products,
            'users' => $users,
        ];

        $pdfDoc = Pdf::loadView('product.generate-product-pdf', $data);
        return $pdfDoc->download('syaafiudinm.pdf');
    }
}
