<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class ItemController extends Controller
{
    public function ItemView(){
        $item['allDataItem']=item::all();
        return view('item.view_item',$item);
        // return view('backend.barang.view_barang');
        

}
    public function ItemDetails($id){ 
        $itemDetail=item::find($id);
        return view('item.details_item', compact('itemDetail'));
}
}
