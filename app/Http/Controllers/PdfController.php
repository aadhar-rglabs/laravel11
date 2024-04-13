<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{

    public function pdfTest()
    {
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function generateInvoice()
    {
        $data = [
            ['name' => 'Kristen Anthony', 'email' => 'kristen.anthony@yopmail.com', 'mobile' => '9983917251'], 
            ['name' => 'Ocean Mcintosh', 'email' => 'ocean.mcintosh@yopmail.com', 'mobile' => '8277144820'],
            ['name' => 'Madeson Nolan', 'email' => 'madeson.nolan@yopmail.com', 'mobile' => '7737850501'],
        ];

        // Load the blade view.
        $pdf = Pdf::loadView('pdf', $data);
        return $pdf->download('invoice.pdf');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function pdfRender()
    {
        $data = [
            ['name' => 'Kristen Anthony', 'email' => 'kristen.anthony@yopmail.com', 'mobile' => '9983917251'], 
            ['name' => 'Ocean Mcintosh', 'email' => 'ocean.mcintosh@yopmail.com', 'mobile' => '8277144820'],
            ['name' => 'Madeson Nolan', 'email' => 'madeson.nolan@yopmail.com', 'mobile' => '7737850501'],
        ];
        return view('pdf-render', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
