<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;


class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('welcome',compact(['works']));
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

        $this->validateWork = [
            'title' => 'required|max:100',
            'due_date' => 'required',
            'des' => 'required',
        ];
        $this->validateWorkErr = [
            'title.required' => 'Please enter name title!',
            'title.max' => 'Custom font wrong format!',
            'due_date.required' => 'Please choose Due Date!',
            'des.required' => 'Please enter name des!',
        ];

        /* validate request */
        $validator = Validator::make($request->all(), $this->validateWork, $this->validateWorkErr);

        if ($validator->fails()) {
            return response()->json(
                [
                    'type' => 'error',
                    'title' => 'Thất bại',
                    'content' => $validator->errors()->all(),
                ], 400
            );
        }

        $input = [
            'title'=>$request->todoTitleAdd,
            'due_date'=>$request->task_due_date,
            'des'=>$request->task_desc,
        ];
        
        $work = Work::create($input);
        if($work){
            return response()->json(
                [
                    'type' => 'success',
                    'title' => 'Success',
                    'content' => $work,
                ], 400
            );
        }

        return response()->json(
            [
                'type' => 'error',
                'title' => 'Thất bại',
                'content' => null,
            ], 400
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        //
    }
}
