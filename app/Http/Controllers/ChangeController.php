<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Change;
use Session;

class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $changes= new Change;
         //Filter #
         if (request()->has('status')) {
            $changes = $changes->where('status',request('status'));
         }
         if (request()->has('implementer')) {
            $changes = $changes->where('implementer',request('implementer'));
         }

         //Sort #
         if (request()->has('sort_id')) {
            $changes = $changes->orderBy('id',request('sort_id'));
         }
         if (request()->has('sort_status')) {
            $changes = $changes->orderBy('status',request('sort_status'));
         }
         if (request()->has('sort_implementer')) {
            $changes = $changes->orderBy('implementer',request('sort_implementer'));
         }
         if (request()->has('sort_impact')) {
            $changes = $changes->orderBy('impactType',request('sort_impact'));
         }


        //create a variable and store all data pulled from the database and store in it
        $changes = $changes->paginate(10) ->appends([
                'status' => request ('status'),
                'implementer' => request ('implementer'),
                'sort_id'=> request ('sort_id'),
                'sort_status'=> request ('sort_status'),
                'sort_implementer'=> request ('sort_implementer'),
            ]);

        //return view with the above variable
        return view('adminlte::pages.change.index')->withChanges($changes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::pages.change.create');
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
                    'implementer' => 'required',
                    'status'  => 'required',
                    'priority'  => 'required',
                    'changeType'  => 'required',
                    'impactType'  => 'required',
            ));
        
        // Store Data
        $change = new Change;

        $change->subject        = $request->subject;
        $change->description    = $request->description;
        $change->implementer    = $request->implementer;
        $change->status         = $request->status;
        $change->priority       = $request->priority;
        $change->changeType     = $request->changeType;
        $change->impactType     = $request->impactType;

        $change ->save();
        
        //Pass successful message 
        Session::flash('success', 'New change is successfully added.');

        //Redirect to another page
        return redirect()->route('changes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $change =Change::find($id);
        return view('adminlte::pages.change.show')->withChange($change);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $change =Change::find($id);
        return view('adminlte::pages.change.edit')->withChange($change);
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
        $change =Change::find($id);

////////////////////Main Updater ///////////////////
        if (request()->has('subject')
            OR request()->has('implementer')
            OR request()->has('status')
            OR request()->has('priority')
            OR request()->has('changeType')
            OR request()->has('impactType')
            )
        {
            //Validate Data
            $this -> validate($request, array(
                        'subject' => 'required|max:255',
                        'implementer' => 'required',
                        'status'  => 'required',
                        'priority'  => 'required',
                        'changeType'  => 'required',
                        'impactType'  => 'required',
                ));

            $change->subject        = $request->input('subject');
            $change->description    = $request->input('description');
            $change->implementer    = $request->input('implementer');
            $change->status         = $request->input('status');
            $change->priority       = $request->input('priority');
            $change->changeType     = $request->input('changeType');
            $change->impactType     = $request->input('impactType');

            $change ->save();
            
            //Pass successful message 
            Session::flash('success', 'Record is successfully updated.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }

        ////////////////////Updater (Reason for Change) ///////////////////
        if (request()->has('reasonChange'))
        {

            $change->reasonChange = $request->input('reasonChange');

            $change ->save();
            
            //Pass successful message 
            Session::flash('success', 'The reason for change has successfully updated.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }

        ////////////////////Updater (Impact Analysis) ///////////////////
        if (request()->has('impactAnalysis'))
        {

            $change->impactAnalysis = $request->input('impactAnalysis');

            $change ->save();
            
            //Pass successful message 
            Session::flash('success', 'The impact analysis has successfully updated.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }

        ////////////////////Updater (Reason for Change) ///////////////////
        if (request()->has('backoutPlan'))
        {

            $change->backoutPlan = $request->input('backoutPlan');

            $change ->save();
            
            //Pass successful message 
            Session::flash('success', 'The backout plan has successfully updated.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }

        ////////////////////Updater (Reason for Change) ///////////////////
        if (request()->has('ccbReview'))
        {

            $change->ccbReview = $request->input('ccbReview');
            $change->ccbDate   = $request->input('ccbDate');

            $change ->save();
            
            //Pass successful message 
            Session::flash('success', 'The CCB review has successfully updated.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }

//////////////////////////delete modal/////////////////////////////
        if (request()->has('delReason'))
        {
            DB::table('changes')
            ->where('id', $change->id)
            ->update(['reasonChange' => null]);

           
            $change ->save();
            //Pass successful message 
            Session::flash('success', 'The reason for change has successfully deleted.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }


        else if (request()->has('delImpact'))
        {
            DB::table('changes')
            ->where('id', $change->id)
            ->update(['impactAnalysis' => null]);

           
            $change ->save();
                        //Pass successful message 
            Session::flash('success', 'The impact analysis has successfully deleted.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }


        else if (request()->has('delBackout'))
        {
            DB::table('changes')
            ->where('id', $change->id)
            ->update(['backoutPlan' => null]);

           
            $change ->save();
                        //Pass successful message 
            Session::flash('success', 'The backout plan has successfully deleted.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
        }


        else if (request()->has('delCCB'))
        {
            DB::table('changes')
            ->where('id', $change->id)
            ->update(['ccbReview' => null,'ccbDate'=> null]);

           
            $change ->save();
                        //Pass successful message 
            Session::flash('success', 'The CCB review has successfully deleted.');

            //Redirect to another page
            return redirect()->route('changes.show', $change->id);
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
        $change= Change::find($id);

        $change->delete();
        //Pass successful message 
        Session::flash('success', 'Change successfully Deleted.');
        //Redirect to another page
        return redirect()->route('changes.index');
    }
}
