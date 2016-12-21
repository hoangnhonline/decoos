<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\LoaiSp;
use App\Models\Cate;
use App\Models\Settings;
use App\Models\Album;


use App\Models\CustomerNotification;
use Helper, File, Session, Auth, Hash;

class AlbumController extends Controller
{
    
    public static $loaiSp = []; 
    public static $loaiSpArrKey = [];    

    public function __construct(){

    }
    
    public function loadSlider(){
        return view('frontend.home.ajax-slider');
    }
    public function detail(Request $request)
    {             
        $lang = "vi";
        $productArr = [];
        $id = $request->id;
        $detail = Album::find($id);
        if(!$detail){
            return redirect()->route('home');
        }
        $rsLoai = LoaiSp::find( $detail->loai_id );
        $rsCate = Cate::find( $detail->cate_id );

        $hinhArr = AlbumImg::where('product_id', $detail->id)->get()->toArray();                
                $lienquanArr = Album::where('product.cate_id', $detail->cate_id)                
                ->where('product.id', '<>', $detail->id)
                ->leftJoin('product_img', 'product_img.id', '=','product.thumbnail_id')
                ->select('product.id as product_id', 'name_vi', 'slug_vi', 'name_en', 'slug_en', 'price', 'price_sale', 'product_img.image_url')->get();   

        if( $detail->meta_id > 0){
           $meta = MetaData::find( $detail->meta_id )->toArray();
           $seo['title'] = $meta['title_'.$lang] != '' ? $meta['title_'.$lang] : $detail->name_vi;
           $seo['description'] = $meta['description_'.$lang] != '' ? $meta['description_'.$lang] : $detail->name_vi;
           $seo['keywords'] = $meta['keywords_'.$lang] != '' ? $meta['keywords_'.$lang] : $detail->name_vi;
        }else{
            $seo['title'] = $seo['description'] = $seo['keywords'] = $detail->name_vi;
        }               
        
        $socialImage = AlbumImg::find($detail->thumbnail_id)->image_url;

        $loaiSp = LoaiSp::where('status', 1)->orderBy('display_order')->get();
        foreach($loaiSp as $loai){
            $cateList[$loai->id] = Cate::where('loai_id', $loai->id)->orderBy('display_order')->get();
        }

        return view('frontend.album.detail', compact('detail', 'rsLoai', 'rsCate', 'hinhArr', 'productArr', 'lienquanArr', 'seo', 'socialImage', 'lang', 
            'loaiSp', 'cateList'
            ));
    }

    
}
