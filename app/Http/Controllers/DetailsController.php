<?php

namespace App\Http\Controllers;

use App\Models\Details;
use App\Http\Requests\StoreDetailsRequest;
use App\Http\Requests\UpdateDetailsRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function print(Request $request)
    {
        $details = new Details;

        $data = $request;

        $name = $request->name;
        $state = $request->state;
        $lga = $request->lga;
        $town = $request->town;
        $school = $request->school;
        $class = $request->class;
        $date_unformatted = $request->date;
        $date = Carbon::parse($date_unformatted)->format('d M Y');
        $parent_name = $request->parent_name;
        $father_number = $request->father_number;
        $mother_number = $request->mother_number;
        $personal_number = $request->personal_number;
        $sacraments = $request->sacraments;
        $sacred_liturgy = $request->sacred_liturgy;
        $personal_liturgy = $request->personal_liturgy;
        $obey_executive = $request->obey_executive;
        $occupation = $request->occupation;
        $address = $request->address;
        $agreement = $request->agreement;

        $message[] = ['Form Received', 'Form will now be compiled and downloaded', 'info'];

        $pdf = Pdf::loadView('pdf.profile',compact('name','state','lga','town','school','class','date','parent_name','father_number','mother_number','personal_number','sacraments','sacred_liturgy','personal_liturgy','obey_executive','occupation','address','agreement'));
        
        return $pdf->download(''.$name.'.pdf');
    }
    
    public function download()
    {
        $pdf = Pdf::loadView('pdf.form');
        return $pdf->download('firt.pdf');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDetailsRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Details $details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Details $details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailsRequest $request, Details $details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Details $details)
    {
        //
    }
}