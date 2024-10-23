<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


use function Pest\Laravel\json;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tools::all();
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name_tool' => 'required|string|max:100',
            'description_tool' => 'required|max:255',
            'price_day_tool' => 'required|max:11',
            'stock_tool' => 'required|max:11',
            'image_tool' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        try {
            if ($request->hasFile('image_tool')) {
                $image = $request->file('image_tool');
                $nameImage = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/tools', $nameImage);
                $data['image_tool'] = $nameImage;
            }
            Tools::create($data);
            return response()->json([
                'status' => 200,
                'message' => 'data berhasil ditambahkan',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tools $tools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tools $tools)
    {
        $getIdData = Tools::find($tools->id);
        return response()->json([
            'status' => 200,
            'data' => $getIdData
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tools $tools)
    {
        $data = $request->validate([
            'name_tool' => 'required|string|max:100',
            'description_tool' => 'required|max:255',
            'price_day_tool' => 'required|max:11',
            'stock_tool' => 'required|max:11',
            'image_tool' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        try {
            if ($request->hasFile('image_tool')) {
                $tools = Tools::find($tools->id);
                if ($tools && $tools->image) {
                    $oldImagePath = public_path('storage/images/tools/' . $tools->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                $image = $request->file('image_tool');
                $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('storage/images/tools/'), $imageName);
                $data['image_tool'] = $imageName;
            } else {
                $data['image_tool'] = $tools->image ?? null;
            }

            $tools->update($data);
            return response()->json([
                'status' => 200,
                'message' => 'data berhasil diedit',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tools $tools)
    {
        $getIdData = Tools::find($tools->id);
        try {
            if ($getIdData->image_tool !== null && file_exists(public_path('storage/images/tools/' . $getIdData->image))) {
                unlink(public_path('storage/images/tools/' . $getIdData->image));
            }

            $getIdData->delete();
            return response()->json([
                'status' => 200,
                'message' => 'data berhasil dihapus',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        };
    }
}
