<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\GeneralTrait;
use App\category;

class categoryController extends Controller
{
 use GeneralTrait ;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $categories = category::select('id' , 'name_'.app() -> getLocale() )->get();

        return response()->json($categories);
    }



    public function categoryById(Request  $request)
    {
        $category = category::find($request->id);

        if(!$category){
            return $this -> returnError('001' ,'هذا المنتج غير موجود');
        }

        return $this->returnData('category' , $category , 'تم جلب البيانات بنجاح') ;
    }


    public function changeStatus(Request  $request)
    {

        category::where('id' , $request->id) ->update(['active'=>$request->active]);

        return $this->returnSuccessMessage('تم التحديث بنجاح','');
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
