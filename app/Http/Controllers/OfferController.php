<?php

namespace App\Http\Controllers;
use App\Category;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('makiny_front.offer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //  dd($request);
//          $this->validate($request, [
//                    'name'  => 'required',
//                    'des'  => 'required',
//                    'location'  => 'required',
//                    'date'  => 'required',
//                    'time'  => 'required',
//                    'price'  => 'required',
//                    'category_id' => 'required',
//                ]);
//        dd($request);
          Offer::create([
              'user_id'=>Auth::id(),
              'name'=> $request->input('name'),
              'description'=> $request->input('description'),
              'location'=> $request->input('location'),
              'date'=> $request->input('date'),
              'time'=> $request->input('time'),
              'price'=> $request->input('price'),
              //'photo' => request()->image->store('uploads', 'public'),
              'category_id'=>1,
          ]);

//        $user_id = Auth::id();
//        $offer = new Offer;
//        $offer->name= request('name');
//        $offer->description= request('description');
//        $offer->location= request('location');
//        $offer->date= request('date');
//        $offer->price= request('price');
//        $offer->photo= request('photo');
//        $offer->category_id= $user_id;
//        $offer->user_id = $user_id;
//        $offer->save();
//
        return view('makiny_front.index');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $category_id=$id;
        $find=Category::findOrFail($category_id);
        $offer=$find->offer()->get();
        return view('makiny_front.index',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
