<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('D', strtotime(date("Y-m-d")));
        $query = DB::select("SELECT * FROM schedules WHERE ( collection_day = '". $today ."'  AND active = 1) OR (frequency = 'daily' AND active = 1)");

        $count = count($query);
        $schedules = [];

        if ($count > 0){
             for($i=0; $i<$count;$i++){
                 $schedules[$i] = $query[$i];    
             }
        } 

        return response()->json([
            "schedules" => $schedules
        ]);


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
        $userID = $request->input('user_id');
        $location = DB::table('locations')->where('user_id', $userID )->get();

        $collection = new Collection();
        $collection->schedule_id = $request->input('schedule_id');
        $collection->user_id = $userID;
        $collection->address = $location[0]->address;
        $collection->region = $location[0]->region;
        $collection->save();

        return response()->json([
            "resp" => $collection
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsecollection_day
     */
    public function show($id)
    {
        //
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
