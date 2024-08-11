<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Permission::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<div style="display: inline-block;">';
                    $btn .= '<a href="' . route('products.show', $row->id) . '" class="btn btn-info btn-sm" style="margin-right: 5px;">Show</a>';
                    // if (auth()->user()->can('product-edit')) {
                    //     $btn .= '<a href="' . route('products.edit', $row->id) . '" class="btn btn-primary btn-sm" style="margin-right: 5px;">Edit</a>';
                    // }
                    // if (auth()->user()->can('product-delete')) {
                    //     $btn .= '<form action="' . route('products.destroy', $row->id) . '" method="POST" style="display: inline-block; margin-right: 5px;">
                    //                 ' . csrf_field() . '
                    //                 ' . method_field("DELETE") . '
                    //                 <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this item?\');">Delete</button>
                    //             </form>';
                    // }
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('permission.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->input('name')]);
        return redirect()->route('permission.index')->with('success', 'Permission created successfully');
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
