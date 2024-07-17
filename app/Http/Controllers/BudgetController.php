<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use PDF;

class BudgetController extends Controller
{
    // Menampilkan daftar budget
    public function index()
    {
        $budgets = Budget::all();
        return view('budgets.index', compact('budgets'));
    }

    // Menampilkan form untuk membuat budget baru
    public function create()
    {
        return view('budgets.create');
    }

    // Menyimpan budget baru
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Budget::create($request->all());

        return redirect()->route('budgets.index')
                         ->with('success', 'Budget created successfully.');
    }

    // Menampilkan satu budget tertentu
    public function show(Budget $budget)
    {
        return view('budgets.show', compact('budget'));
    }

    // Menampilkan form untuk mengedit budget
    public function edit(Budget $budget)
    {
        return view('budgets.edit', compact('budget'));
    }

    // Memperbarui budget tertentu
    public function update(Request $request, Budget $budget)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $budget->update($request->all());

        return redirect()->route('budgets.index')
                         ->with('success', 'Budget updated successfully.');
    }

    // Menghapus budget tertentu
    public function destroy(Budget $budget)
    {
        $budget->delete();

        return redirect()->route('budgets.index')
                         ->with('success', 'Budget deleted successfully.');
    }

    // Menghasilkan laporan PDF
    public function generateReport()
    {
        $budgets = Budget::all();

        $pdf = PDF::loadView('budgets.report', compact('budgets'));
        return $pdf->download('laporan_budgets.pdf');
    }
}
