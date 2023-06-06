<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagetitle = "daftar NFT";
        $dataNFT = Product::all();
        return view('product.index',[
            'pagetitle'=>$pagetitle,
            'datas'=>$dataNFT
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pagetitle = "tambah NFT";
        $datatype = Type::all();
        return view('product.create',[
            'pagetitle'=>$pagetitle,
            'types'=>$datatype
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
            'numeric' => 'Isi : attribute dengan angka',
            'image' => 'Isi : attribute dengan jpg, jpeg, png, bmp, gif, svg, atau webp saja'
        ];
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image',
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(resource_path('images/nft'), $imageName);
        $tambahNFT = new Product();
        $tambahNFT->name = $request->name;
        $tambahNFT->price = $request->price;
        $tambahNFT->image = $imageName;
        $tambahNFT->type_id = $request->type;
        $tambahNFT->save();
        return redirect()->route('product.index');
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
        $pagetitle = "edit NFT";
        $dataNFT = Product::find($id);
        $datatype = Type::all();
        return view('product.edit',[
            'pagetitle'=>$pagetitle,
            'data'=>$dataNFT,
            'types'=>$datatype
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
            'numeric' => 'Isi : attribute dengan angka',
            'image' => 'Isi : attribute dengan jpg, jpeg, png, bmp, gif, svg, atau webp saja'
        ];
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'price'=>'required|numeric',
            'image'=>'image',
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(resource_path('images/nft'), $imageName);
            $tambahNFT = Product::find($id);
            $tambahNFT->name = $request->name;
            $tambahNFT->price = $request->price;
            $tambahNFT->image = $imageName;
            $tambahNFT->type_id = $request->type;
            $tambahNFT->save();

        }else{
            $tambahNFT = Product::find($id);
            $tambahNFT->name = $request->name;
            $tambahNFT->price = $request->price;
            $tambahNFT->type_id = $request->type;
            $tambahNFT->save();
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index')->with('success','Produk berhasil dihapus');
    }
}
