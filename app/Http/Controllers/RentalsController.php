<?php

namespace App\Http\Controllers;

use App\Models\Rentals;
use Illuminate\Http\Request;
use App\Models\Tools;

class RentalsController extends Controller
{
    public function index()
    {
        $rentals = Rentals::with('tools')->get();
        return response()->json($rentals);
    }
    public function store(Request $request)
    {
        // Buat rental baru tanpa validasi
        $rental = Rentals::create([
            'rental_date' => $request->rental_date,
            'return_date' => $request->return_date,
            'status' => 'menunggu pembayaran',
            'price_rental' => 0, // Kalkulasi harga nanti
        ]);

        $totalPrice = 0;

        // Iterasi tools yang dipilih oleh user
        if ($request->has('tools')) {
            foreach ($request->tools as $tool) {
                // Ambil data tool dari database
                $toolData = Tools::find($tool['id']);

                if ($toolData) {
                    // Tambahkan barang ke peminjaman dengan jumlah yang dipilih
                    $rental->tools()->attach($toolData, ['quantity' => $tool['quantity']]);

                    // Kalkulasi total harga barang yang dipinjam
                    $totalPrice += $toolData->price_day_tool * $tool['quantity'];
                }
            }
        }

        // Update harga total di tabel rentals
        $rental->update(['price_rental' => $totalPrice]);

        return response()->json([
            'status' => 200,
            'message' => 'Peminjaman berhasil ditambahkan',
        ]);
    }
}
