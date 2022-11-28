<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Exception;
use Throwable;
use App\Product;
use App\User;
use App\Gallery;

class HomeController
{
    public function index()
    {
        $users = User::all()->count();
        $products = Product::all()->count();
        $images = Gallery::all()->count();
        return view('home', compact('users','products','images'));
    }

    public function loadRowImages()
    {  
        $images = Gallery::all();
        $route = 'admin.gallery.deleteImage';
        return view('admin.products.include.div_row_img', compact('route', 'images'));
    }

    public function uploadImage(Request $request){
        try{
                $rules = array(
                        'image'  => 'required|mimes:jpeg,png|max:2000',
                        'url_images' => 'url|required'          
                );
        
                $validator = Validator::make($request->all(), $rules);
        
                if ($validator->fails()) {
                    return response()->json(['status' => 500, 'message' => $validator]);
                }else{
                    if ($request->hasFile('image') && $request->file('image')->isValid()) {                
                    
                        $image = $request->file('image');

                        $filename = 'img-'.Str::random(6).$image->getClientOriginalName(); 
                        $dir = 'img/gallery';
                        $public_dir = public_path($dir);       
                        $route =  $dir.'/'. $filename;

                        if (!file_exists($public_dir)) {
                            mkdir($public_dir, 0777);
                        } 

                        $path = public_path($route);          
                        Image::make($image->getRealPath())->save($path);
                        $gallery = new Gallery;
                        $gallery->name = $filename;
                        $gallery->route = $route;  
                        $gallery->save();
                        return response()->json(['status' => 200, 'message' => 'OK']);
                    }else{ 
                        return response()->json(['status' => 500, 'message' => 'Error uploading image.']);
                    }
                }
            } catch (Throwable $e) {
                return response()->json(['status' => 500,' message' => $e->getMessage()]);
            } catch (Exception $e) {
                return response()->json(['status' => 500,' message' => $e->getMessage()]);
            }
    }

    public function deleteImage($id)
    {
        try{
            $image = Gallery::findOrFail($id);   

            $image->delete();

            if (file_exists($image->route)) {
                unlink($image->route);
            } 

            return response()->json(['status'=>200,'message'=>"OK"]);

        } catch (Throwable $e) {
            return response()->json(['status'=>500,'message'=>$e->getMessage()]);
        } catch (Exception $e) {
            return response()->json(['status'=>500,'message'=>$e->getMessage()]);
        }
    }
}
