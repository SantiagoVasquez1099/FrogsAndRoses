<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Exception;
use Throwable;
use App\ProductImage;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('product_access'), 403);

        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('product_create'), 403);

        return view('admin.products.create');
    }

    public function store(StoreProductRequest $request)
    {
        abort_unless(\Gate::allows('product_create'), 403);

        $product = Product::create($request->all());

        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        return view('admin.products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        abort_unless(\Gate::allows('product_edit'), 403);

        $product->update($request->all());

        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        abort_unless(\Gate::allows('product_show'), 403);

        return view('admin.products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        abort_unless(\Gate::allows('product_delete'), 403);

        $product->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Product::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

    public function loadRowImages($id)
    {  
        $product = Product::findOrFail($id);
        $images = $product->images;
        $route = 'admin.products.deleteImage';
        return view('admin.products.include.div_row_img', compact('route', 'images'));
    }

    public function uploadImage($id, Request $request){
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
                        $product = Product::findOrFail($id);

                        $filename = $product->id.'-'.Str::random(6).$image->getClientOriginalName(); 
                        $dir = 'img/products';
                        $public_dir = public_path($dir);       
                        $route =  $dir.'/'. $filename;

                        if (!file_exists($public_dir)) {
                            mkdir($public_dir, 0777);
                        } 

                        $path = public_path($route);          
                        Image::make($image->getRealPath())->save($path);
                        $product_image = new ProductImage;
                        $product_image->name = $filename;
                        $product_image->route = $route;
                        $product_image->product()->associate($product);      
                        $product_image->save();
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
            $image = ProductImage::findOrFail($id);   

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
