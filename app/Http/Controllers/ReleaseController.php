<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Release;
use Session;

class ReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releases= new Release;
         //Filter #
         if (request()->has('status')) {
            $releases = $releases->where('status',request('status'));
         }
         if (request()->has('type')) {
            $releases = $releases->where('type',request('type'));
         }

         //Sort #
         if (request()->has('sort_id')) {
            $releases = $releases->orderBy('id',request('sort_id'));
         }
         if (request()->has('sort_status')) {
            $releases = $releases->orderBy('status',request('sort_status'));
         }
         if (request()->has('sort_type')) {
            $releases = $releases->orderBy('type',request('sort_type'));
         }


        //create a variable and store all data pulled from the database and store in it
        $releases = $releases->paginate(10) ->appends([
                'status' => request ('status'),
                'type' => request ('type'),
                'sort_id'=> request ('sort_id'),
                'sort_status'=> request ('sort_status'),
                'sort_type'=> request ('sort_type'),
            ]);

        //return view with the above variable
        return view('adminlte::pages.release.index')->withReleases($releases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::pages.release.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Data
        $this -> validate($request, array(
                    'subject' => 'required|max:255',
                    'status'  => 'required',
                    'priority'  => 'required',
                    'type'  => 'required',
            ));
        
        // Store Data
        $release = new Release;

        $release->subject        = $request->subject;
        $release->description    = $request->description;
        $release->planStartDate  = $request->planStartDate;
        $release->planEndDate    = $request->planEndDate;
        $release->status         = $request->status;
        $release->type           = $request->type;
        $release->priority       = $request->priority;

        $release ->save();
        
        //Pass successful message 
        Session::flash('success', 'Record is successfully stored.');

        //Redirect to another page
        return redirect()->route('releases.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $release =Release::find($id);
        return view('adminlte::pages.release.show')->withRelease($release);}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $release =Release::find($id);
        return view('adminlte::pages.release.edit')->withRelease($release);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    public function update(Request $request, $id)
    {
        $release = Release::find($id);

        ////////////////////Updater (Build Plan) ///////////////////
        if (request()->has('buildPlan'))
        {

            $release->buildPlan = $request->input('buildPlan');

            $release ->save();
            
            //Pass successful message 
            Session::flash('success', 'The build plan has successfully updated.');

            //Redirect to another page
            return redirect()->route('releases.show', $release->id);
        }

        ////////////////////Deleter (Build Plan) ///////////////////
        else if (request()->has('delBuildPlan'))
        {
            DB::table('releases')
            ->where('id', $release->id)
            ->update(['buildPlan' => null]);

           
            $release ->save();
            //Pass successful message 
            Session::flash('success', 'The build plan has successfully deleted.');

            //Redirect to another page
            return redirect()->route('releases.show', $release->id);
        }



        ////////////////////Updater (Main update) ///////////////////
        else
        {
            //Validate Data
            $this -> validate($request, array(
                        'subject' => 'required|max:255',
                        'status'  => 'required',
                        'priority'  => 'required',
                        'type'  => 'required',
                ));
            

            $release->subject        = $request->input('subject');
            $release->description    = $request->input('description');
            $release->planStartDate  = $request->input('planStartDate');
            $release->planEndDate    = $request->input('planEndDate');
            $release->status         = $request->input('status');
            $release->type           = $request->input('type');
            $release->priority       = $request->input('priority');

            $release ->save();
            
            //Pass successful message 
            Session::flash('success', 'Update Saved');

            //Redirect to another page
            //return redirect()->route('releases.index');

            return redirect()->route('releases.show', $release->id);
        }


        
        

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
