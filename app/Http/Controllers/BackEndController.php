<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ViewErrorBag;
use TCG\Voyager\Facades\Voyager;

class BackEndController extends Controller
{
    public function search(Request $request)
    {
        $dataTypeContent = DB::table($request->table)->where($request->search_type, 'like', '%'.$request->search_text.'%')->orderBy('id', 'desc')->paginate(setting('admin.pagination'));
         $dataType = Voyager::model('DataType')->where('slug', '=', $request->table)->first();
        return view('bread.show', [
            'dataType' =>  $dataType,
            'dataTypeContent' => $dataTypeContent,
            'search_text' => $request->search_text,
            'search_type' => $request->search_type
        ]);
    }

    public function relationship($id, $table, $key, $type)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
        switch ($type) {
            case 'list':
                // return $dataType->model_name;
                $dataTypeContent = $dataType->model_name::where($key, $id)->orderBy('id', 'asc')->paginate(setting('admin.pagination')); 
                
                return view('bimgo::bread.show', [
                    'dataType' =>  $dataType,
                    'dataTypeContent' => $dataTypeContent
                ]);
                break;
            case 'create':
                $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
                $dataRowsAdd = Voyager::model('DataRow')->where([['data_type_id', '=', $dataType->id], ['add', "=", 1]])->orderBy('order', 'asc')->get();
        
                return view('bread.create', [
                    'dataType' => $dataType,
                    'dataRows'=>$dataRowsAdd,
                    'key' => $key,
                    'id' => $id
                ]);
                break;
            default:
                # code...
                break;
        }   
    }

    public function view($table, $id)
    {
      
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
        $dataRows = Voyager::model('DataRow')->where([['data_type_id', '=', $dataType->id], ['read', "=", 1]])->orderBy('order', 'asc')->get();
        
        $data = $dataType->model_name::where('id', '=', $id)->first();
    
        // return response()->json($dataRows);
        return view('bread.view', [
            'dataType' =>  $dataType,
            'dataRows' => $dataRows,
            'data' => $data

        ]);
    }


    public function recovery($table, $id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
        $dataType->model_name::withTrashed()->where('id', '=', $id)->restore();
        $dataTypeContent = $dataType->model_name::onlyTrashed()->orderBy('deleted_at', 'asc')->paginate(setting('admin.pagination')); 
    
        // return response()->json($dataTypeContent);
        return view('bread.deletes', [
            'dataType' =>  $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }

    public function deletes($table)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $table)->first();
        $dataTypeContent = $dataType->model_name::onlyTrashed()->orderBy('deleted_at', 'asc')->paginate(setting('admin.pagination')); 
    
        // return response()->json($dataTypeContent);
        return view('bread.deletes', [
            'dataType' =>  $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }

}
