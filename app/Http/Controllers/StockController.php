<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\MoneyStore;


class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::latest()->paginate(10);
        return view('pages.stocks.index', compact('stocks'));
    }

    public function create()
    {
        $products = \App\Models\Product::all();
        $transactions = \App\Models\Transaction::all();
        $moneyStores = \App\Models\MoneyStore::all();

        return view('pages.stocks.create', [
            'mode' => 'create',
            'stock' => new Stock(),
            'products' => $products,
            'transactions' => $transactions,
            'moneyStores' => $moneyStores,

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Stock::create($data);
        return redirect()->route('stocks.index')->with('success', 'Successfully created!');
    }

    public function show(Stock $stock)
    {
        return view('pages.stocks.view', compact('stock'));
    }

    public function edit(Stock $stock)
    {
        $products = \App\Models\Product::all();
        $transactions = \App\Models\Transaction::all();
        $moneyStores = \App\Models\MoneyStore::all();

        return view('pages.stocks.edit', [
            'mode' => 'edit',
            'stock' => $stock,
            'products' => $products,
            'transactions' => $transactions,
            'moneyStores' => $moneyStores,

        ]);
    }

    public function update(Request $request, Stock $stock)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $stock->update($data);
        return redirect()->route('stocks.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect()->route('stocks.index')->with('success', 'Successfully deleted!');
    }
}