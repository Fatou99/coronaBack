<?php

namespace App\Http\Controllers;

use App\Reporting;
use Illuminate\Http\Request;
use  App\Repositories\ReportRepository;


class ReportController extends Controller
{
   private $repository;

    public function __construct(ReportRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
//        $reports = Reporting::all();
//        $data= array('reports' => $reports);
//        foreach ($reports as $key => $val) {
//            echo "$key => $val <br>";
//        }
       return response()->json($this->repository->index());
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
//        $request->validate([
//            'longitude'=>'required',
//            'latitude'=>'required',
//            'type'=>'required',
//            'urlToImage'=>'required',
//            'time'=>'required',
//        ]);

//            $post_data = $request->all();
//            $report = new Reporting();
//             $report->longitude = $post_data['longitude'];
// $report->latitude = $post_data['latitude'];
// $report->type = $post_data['type'];
// $report->urlToImage = $post_data['urlToImage'];
// $report->time = $post_data['time'];
// $report->save();

            $post_data = $request->all();
$report = Reporting::create($post_data);


//       [
//            'longitude' => $request->get('longitude'),
//            'latitude' => $request->get('latitude'),
//            'type' => $request->get('type'),
//            'urlToImage' => $request->get('urlToImage'),
//            'time' => $request->get('time'),
//        ]);
        $report->save();
//        return redirect('/result')->with('success', 'report saved!');
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
