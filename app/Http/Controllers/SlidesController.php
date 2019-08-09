<?php

namespace App\Http\Controllers;

use App\Slides;
use File;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slides::all();

        return view('admin.slide.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.slide.formAddSlide');
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $slide             = $request->except('_token');
        $slide['status']   = 0;
        if($request->hasFile('image'))
        {
            $file          = $request->file('image');
            $NameImage     = $file->getClientOriginalName();
            $NameImage     = str_random(4)."-".$NameImage;
            while(file_exists("/images/slides/".$NameImage)){
                $NameImage = str_radom(4)."-".$NameImage;
            }
            $file->move(public_path('/images/slides/'),$NameImage);

            $slide['image'] = $NameImage;
        }
        $slides = Slides::create($slide);

        return redirect()->route('index-slider')->with('success','Bạn đã thêm slide thành công');

    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function show(Slides $slides)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function edit(Slides $slides)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slides $slides)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slides  $slides
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slides::find($id);
        if(!empty($slide->image)){
            $img_path = public_path("images/slides/".$slide->image);
            if(File::exists($img_path)){
                File::delete($img_path);
            }
        }
        $slide->destroy($id);
        return redirect()->back()->with('success','Bạn đã Xóa slide thành công');;
    }

    public function upadateStatusSlide($id){
        $slides = Slides::find($id);
        $slides->status = $slides->status ? 0 : 1;
        $slides->save();
        return redirect()->back();
    }
}
