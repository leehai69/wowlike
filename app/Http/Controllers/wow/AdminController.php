<?php

namespace App\Http\Controllers\wow;

use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Client as Client;
use App\Http\Controllers\Controller;
use Response;
use App\TokenLikes;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    function setting(){
        $config = DB::collection('setting_w')->where('type','auto_config')->first();
        return view('admin.wow.setting')->with('data',['auto'=>$config]);
    }
    function save_setting(Request $request){
        $config = DB::collection('setting_w')->where('type','auto_config')->update($request->All());
        if($config){
            return ['message'=>'บันทึกเรียบร้อยแล้ว!!!','type'=>'success','success'=>'true'];
        }else{
            return ['message'=>'ไม่สามารถบันทึกข้อผิดพลาดได้!!!','type'=>'error','success'=>'false'];
        }
    }
    function user(){
        if(Input::has('keyword')){
            $users = DB::collection('user')->where('name', 'like', '%' . Input::get('keyword') . '%')->orWhere('fbid', 'like', '%' . Input::get('keyword') . '%')->orderBy('created_at','desc')->paginate(100);
        }else{
            $users = DB::collection('user')->orderBy('created_at','desc')->paginate(100);
        }
        return view('admin.wow.user',['users'=>$users]);
    }
    function view_user($id){
        $users = DB::collection('user')->where('_id',$id)->first();
        return view('admin.wow.view_user',['data'=>$users]);
    }
    function addLike(Request $request){
        $fbid = $request->fbid;
        $like = DB::collection('user_meta')->where('fbid',$fbid)->where('type','like')->where('active',1)->orderBy('created_at','desc')->first();
        if($like){
            $qr = DB::collection('user_meta')->where('fbid',$fbid)->where('type','like')->update(['time_expired'=>date('c',strtotime("+".$request->day." day", strtotime($like['time_expired'])))]);
        }else{
            $qr = DB::collection('user_meta')->insert([
                'fbid'=>$fbid,
                'type'=>'like',
                'money'=>0,
                'time_expired'=>date('c',strtotime("+".$request->day." day", time())),
                'created_at'=>date('c',time()),
                'active'=>1
            ]);
        }
        if(!$qr){
            return Response::json(array('success'=>'true','type'=>'error','message'=>'ข้อผิดพลาดที่ไม่รู้จัก โปรดลองอีกครั้ง !'),404);
        }else{
            return Response::json(array('success'=>'true','type'=>'success','message'=>'เพิ่มเรียบร้อยแล้ว !'));
        }
    }
    function addFollow(Request $request){
        $fbid = $request->fbid;
        $follow = DB::collection('user_meta')->where('fbid',$fbid)->where('type','follow')->where('active',1)->orderBy('created_at','desc')->first();
        if($follow){
            $qr = DB::collection('user_meta')->where('fbid',$fbid)->where('type','follow')->update(['time_expired'=>date('c',strtotime("+".$request->day." day", strtotime($follow['time_expired'])))]);
        }else{
            $qr = DB::collection('user_meta')->insert([
                'fbid'=>$fbid,
                'type'=>'follow',
                'money'=>0,
                'time_expired'=>date('c',strtotime("+".$request->day." day", time())),
                'created_at'=>date('c',time()),
                'active'=>1
            ]);
        }
        if(!$qr){
            return Response::json(array('success'=>'true','type'=>'error','message'=>'ข้อผิดพลาดที่ไม่รู้จัก โปรดลองอีกครั้ง!'),404);
        }else{
            return Response::json(array('success'=>'true','type'=>'success','message'=>'เพิ่มเรียบร้อยแล้ว!'));
        }
    }
    function edit_user(Request $request){
        $fbid = $request->fbid;
        $money = (int)$request->money;
        $query = DB::collection('user')->where('fbid',$fbid)->increment('money',$money);
        if(!$query){
            return Response::json(array('success'=>'true','type'=>'error','message'=>'ข้อผิดพลาดที่ไม่รู้จัก โปรดลองอีกครั้ง!'),404);
        }else{
            return Response::json(array('success'=>'true','type'=>'success','message'=>'ปรับปรุงเรียบร้อยแล้ว !'));
        }
    }
    function blockUser($id,$type){
        $qr = DB::collection('user')->where('_id',$id)->update(['active'=>$type]);
        if(!$qr){
            return Redirect::to('/admin/user_w');
            //return Response::json(array('success'=>'true','type'=>'error','message'=>'Lỗi không xác định. Vui lòng thử lại !'),404);
        }else{
            return Redirect::to('/admin/user_w');
            //return Response::json(array('success'=>'true','type'=>'success','message'=>'Thêm thành công !'));
        }
    }
    function import_token(Request $request){
        $token = $request->access_token;
        $token = explode(PHP_EOL,$token);
        $client = new Client(['http_errors' => false]);
        foreach($token as $access_token)
        $res = $client->request('GET', 'https://graph.facebook.com/me?access_token='.$access_token);
        $info = json_decode($res->getBody(),true);
        if(isset($info['id']) && !isset($info['category']) && !strpos(@$info['email'],'@tfbnw.net')){
            $token_likes = TokenLikes::where('fbid',$info['id'])->first();
            if($token_likes){
                $token_likes->live = 1;
                $token_likes->access_token = $access_token;
                $token_likes->name = $info['name'];
                $token_likes->save();
            }else{
                $token_likes = TokenLikes::create([
                    'fbid'=>$info['id'],
                    'name'=>$info['name'],
                    'access_token'=>$access_token,
                    'gender'=>$info['gender'],
                    'locale'=>$info['locale'],
                    'live'=>1,
                ]);
            }
        }
    }
}
