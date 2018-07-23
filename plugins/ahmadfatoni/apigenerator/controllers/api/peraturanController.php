<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use Pda\Peraturan\Models\Peraturan;
class peraturanController extends Controller
{
	protected $Peraturan;

    protected $helpers;

    public function __construct(Peraturan $Peraturan, Helpers $helpers)
    {
        parent::__construct();
        $this->Peraturan    = $Peraturan;
        $this->helpers          = $helpers;
    }

    public function index(){

        $data = $this->Peraturan->all()->toArray();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    public function show($id){

        $data = $this->Peraturan->where('id',$id)->first();

        if( count($data) > 0){

            return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);

        }

        $this->helpers->apiArrayResponseBuilder(400, 'bad request', ['error' => 'invalid key']);

    }

    public function store(Request $request){

    	$arr = $request->all();

        while ( $data = current($arr)) {
            $this->Peraturan->{key($arr)} = $data;
            next($arr);
        }

        $validation = Validator::make($request->all(), $this->Peraturan->rules);
        
        if( $validation->passes() ){
            $this->Peraturan->save();
            return $this->helpers->apiArrayResponseBuilder(201, 'created', ['id' => $this->Peraturan->id]);
        }else{
            return $this->helpers->apiArrayResponseBuilder(400, 'fail', $validation->errors() );
        }

    }

    public function update($id, Request $request){

        $status = $this->Peraturan->where('id',$id)->update($data);
    
        if( $status ){
            
            return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been updated successfully.');

        }else{

            return $this->helpers->apiArrayResponseBuilder(400, 'bad request', 'Error, data failed to update.');

        }
    }

    public function delete($id){

        $this->Peraturan->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }

    public function destroy($id){

        $this->Peraturan->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }


    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
    
}