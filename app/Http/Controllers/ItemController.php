<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
     // Get all  items
        public function showAll()
    {
        // return    Item::all();
        // with response status code
        return response()->json(Item::all(), 200);
    }


    // find by the particular index/id
    public function getById( $id)
    {        
        // return Item::find($id);

        $item = Item::find($id);
        if(is_null($item)) {
            return response()->json(['message' => 'Item Not Found'], 404);
        }
        return response()->json($item::find($id), 200);
    }
    

    // Search the item based on their name
    public function searchByName($name){
        return Item::where('name', 'like', '%'.$name.'%')->get();
    }
    

    // create a data in the database and store it 
    public function store(Request $request)
    {
        // lets validate the data before storing it
        $request->validate([
            'name'        =>  'required|min:3',
            'description' =>  'required|max:255',
            'price'       =>  'required',
             
        ]); 
        // create item
        // return Item::create($request->all());
        $item= Item::create($request->all());
        return response($item,201);

    }  


    
    // Update the item based on their id
    public function update(Request $request,  $id)
    {
        // first get data by id and then update that data
        $item = Item::find($id);
        if(is_null($item)) {
            return response()->json(['message' => 'Item Not Found'], 404);
        }
        $item->update($request->all());
        // return $item;
        return response($item, 200);
    }


    //delete the item based on their id
    public function destroy( $id)
    {
        
        // return Item::destroy($id);
        $item = Item::find($id);
        if(is_null($item)) {
            return response()->json(['message' => 'Item Not Found'], 404);
        }
        $item->delete();
        return response()->json(null, 204);

    }
    
}
