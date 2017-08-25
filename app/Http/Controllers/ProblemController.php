<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Problem;
use Session;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
         $problems= new Problem;
         //Filter #
         if (request()->has('status')) {
            $problems = $problems->where('status',request('status'));
         }
         if (request()->has('assignee')) {
            $problems = $problems->where('assignee',request('assignee'));
         }

         //Sort #
         if (request()->has('sort_id')) {
            $problems = $problems->orderBy('id',request('sort_id'));
         }
         if (request()->has('sort_status')) {
            $problems = $problems->orderBy('status',request('sort_status'));
         }
         if (request()->has('sort_assignee')) {
            $problems = $problems->orderBy('assignee',request('sort_assignee'));
         }
         if (request()->has('sort_date')) {
            $problems = $problems->orderBy('resolutionDate',request('sort_date'));
         }


        //create a variable and store all data pulled from the database and store in it
        $problems = $problems->paginate(10) ->appends([
                'status' => request ('status'),
                'assignee' => request ('assignee'),
                'sort_id'=> request ('sort_id'),
                'sort_status'=> request ('sort_status'),
                'sort_assignee'=> request ('sort_assignee'),
                'sort_date'=> request ('sort_date'),
            ]);

        //return view with the above variable
        return view('adminlte::pages.problem.index')->withProblems($problems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::pages.problem.create');
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
                    'description' => 'required',
                    'assignee' => 'required',
                    'status'  => 'required',
                    'type'  => 'required',
                    'resolutionDate'=> 'date',
            ));
        
        // Store Data
        $problem = new Problem;

        $problem->subject        = $request->subject;
        $problem->description    = $request->description;
        $problem->assignee       = $request->assignee;
        $problem->requester       = $request->requester;
        $problem->status         = $request->status;
        $problem->type           = $request->type;
        $problem->resolutionDate = $request->resolutionDate;

        $problem ->save();
        
        //Pass successful message 
        Session::flash('success', 'The Record is successfully stored.');

        //Redirect to another page
        return redirect()->route('problems.index');

        //return redirect('problem') -> with('status','done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $problem =Problem::find($id);
        return view('adminlte::pages.problem.show')->withProblem($problem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problem =Problem::find($id);
        return view('adminlte::pages.problem.edit')->withProblem($problem);
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
        
        
        $problem = Problem::find($id);

        ////////////////////Update Modal ///////////////////
        if (request()->has('subject')
            OR request()->has('description')
            OR request()->has('assignee')
            OR request()->has('status')
            OR request()->has('type')
            )
        {
            //Validate Data
            $this -> validate($request, array(
                        'subject' => 'required|max:255',
                        'description' => 'required',
                        'assignee' => 'required',
                        'status'  => 'required',
                        'type'  => 'required',
                        'resolutionDate'=> 'date',
                ));

            $problem->subject        = $request->input('subject');
            $problem->description    = $request->input('description');
            $problem->assignee       = $request->input('assignee');
            $problem->requester      = $request->input('requester');
            $problem->status         = $request->input('status');
            $problem->type           = $request->input('type');
            $problem->resolutionDate = $request->input('resolutionDate');

            $problem ->save();
            
            //Pass successful message 
            Session::flash('success', 'Record is successfully updated.');

            //Redirect to another page
            return redirect()->route('problems.index');

        }
        ////////////////////Updater (Root Cause) ///////////////////
        else if (request()->has('rootCause'))
        {

            $problem->rootCause = $request->input('rootCause');

            $problem ->save();
            
            //Pass successful message 
            Session::flash('success', 'The root Cause has successfully updated.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
        }

        ////////////////////Updater (Impact) ///////////////////
        else if (request()->has('impact'))
        {

            $problem->impact = $request->input('impact');

            $problem ->save();
            
            //Pass successful message 
            Session::flash('success', 'The impact has successfully updated.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
        }

        ////////////////////Updater (Symptoms) ///////////////////
        else if (request()->has('symptoms'))
        {

            $problem->symptoms = $request->input('symptoms');

            $problem ->save();
            
            //Pass successful message 
            Session::flash('success', 'The symptoms has successfully updated.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
        }

        else if (request()->has('solution'))
        {

            $problem->solution = $request->input('solution');
            $problem->solutionTitle = $request->input('solutionTitle');

            $problem ->save();
            
            //Pass successful message 
            Session::flash('success', 'The solution has successfully saved.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
        }


        //////////////////////////delete modal/////////////////////////////
        if (request()->has('delRoot'))
        {
            DB::table('problems')
            ->where('id', $problem->id)
            ->update(['rootCause' => null]);

           
            $problem ->save();
                        //Pass successful message 
            Session::flash('success', 'The root cause has successfully deleted.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
        }
        else if (request()->has('delImpact'))
        {
            DB::table('problems')
            ->where('id', $problem->id)
            ->update(['impact' => null]);

           
            $problem ->save();
                        //Pass successful message 
            Session::flash('success', 'The impact has successfully deleted.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
        }
        else if (request()->has('delSymp'))
        {
            DB::table('problems')
            ->where('id', $problem->id)
            ->update(['symptoms' => null]);

           
            $problem ->save();
                        //Pass successful message 
            Session::flash('success', 'The symptoms has successfully deleted.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
        }
        else if (request()->has('delSol'))
        {
            DB::table('problems')
            ->where('id', $problem->id)
            ->update(['solution' => null,'solutionTitle'=> null]);

           
            $problem ->save();
                        //Pass successful message 
            Session::flash('success', 'The solution has successfully deleted.');

            //Redirect to another page
            return redirect()->route('problems.show', $problem->id);
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
        $problem= Problem::find($id);

        $problem->delete();
        //Pass successful message 
        Session::flash('success', 'Record is successfully Deleted.');
        //Redirect to another page
        return redirect()->route('problems.index');
    }




}
