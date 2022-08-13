<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resort;
use Illuminate\Support\Facades\Storage;

class resortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resorts = resort::all();
        return view('resorts.index',['resort'=>$resorts]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'mobile' => ['required'],
            'email' => ['nullable','email', 'max:255'],
            'image' => ['required','image','max:2048'],
        ]);


        if($request->hasFile('image'))
            $valid['image'] = $request->file('image')->store('ResortImages', 'public');

        if(resort::create($valid));
            return redirect(('resorts'))->with('status','Resort added successfully!!!');
        

        
        
        // $resort = new resort;
        // $resort->name = $request->name;
        // $resort->address = $request->address;
        // $resort->mobile = $request->mobile;
        // $resort->email = $request->email;
        // $resort->image = $request->image;
        // $resort->save();
        // return redirect(route('index'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $resort = resort::find($id);
        return view('editform',['resort'=>$resort]);
    
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
        // $resort =resort::find($id);
        // $resort->name = $request->name;
        // $resort->address = $request->address;
        // $resort->mobile = $request->mobile;
        // $resort->email = $request->email;
        // $resort->image = $request->image;
        // $resort->save();
        // return redirect(route('index'));

            


        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'mobile' => ['required'],
            'email' => ['required','email', 'max:255'],
            'image' => ['required','image','max:2048'],
        ]);


        $resort = resort::findOrFail($id);

        if($request->hasFile('image'))
            {
                if (Storage::disk('public')->exists($resort->getRawOriginal('image')))
                    Storage::disk('public')->delete($resort->getRawOriginal('image'));

                $valid['image'] = $request->file('image')->store('ResortImages', 'public');
            }

        if($resort->update($valid))
            return redirect('resorts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        resort::destroy($id);
        return redirect(route('resort.index'))->with('status','Resort deleted successfully!!!');
        
        
        // $resort = resort::find($id);

        // if (Storage::disk('public')->exists($resort->getRawOriginal('image')))
        //     Storage::disk('public')->delete($resort->getRawOriginal('image'));

        // $resort->delete();

        // return redirect('/');
    }

}
