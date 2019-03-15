<?php

namespace App\Application\Controllers\Admin;

use App\Application\Requests\Admin\Inscription\AddRequestInscription;
use App\Application\Requests\Admin\Inscription\UpdateRequestInscription;
use App\Application\Controllers\AbstractController;
use App\Application\DataTables\InscriptionsDataTable;
use App\Application\Model\Inscription;
use App\Application\Repository\InterFaces\InscriptionInterface;
use Yajra\Datatables\Request;
use App\Application\Model\Formation;
use Alert;

class InscriptionController extends AbstractController
{
    protected $inscriptionInterface;

    public function __construct(Inscription $model, InscriptionInterface $inscriptionInterface)
    {
        parent::__construct($model);
        $this->inscriptionInterface = $inscriptionInterface;
    }

    public function index(InscriptionsDataTable $dataTable){
        return $dataTable->render('admin.inscription.index');
    }

    public function show($id = null){
        $data = $this->inscriptionInterface->getFormation($id);
        return $this->createOrEdit('admin.inscription.edit' , $id, ['data'=>$data]);
    }

     public function store(AddRequestInscription $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('admin/inscription');
     }

     public function update($id , UpdateRequestInscription $request){
          $item = $this->storeOrUpdate($request, $id, true);
        return redirect()->back();

     }

    public function getFormationInfos($id ){
        $item = Formation::select('price','places','debut_formation','fin_formation')->find($id);    
        return json_encode($item);
    }

    public function getById($id){
        $fields = $this->model->findOrFail($id);
        return $this->createOrEdit('admin.inscription.show' , $id , ['fields' =>  $fields]);
    }

    public function destroy($id){
        return $this->deleteItem($id , 'admin/inscription')->with('sucess' , 'Done Delete inscription From system');
    }

    public function pluck(\Illuminate\Http\Request $request){
        return $this->deleteItem($request->id , 'admin/inscription')->with('sucess' , 'Done Delete inscription From system');
    }

    public function validation(\Illuminate\Http\Request $request){
            
        $infos="";
        if($request->status==1){
            $formation=Formation::withcount(['inscriptions'=> function($query){$query->where('status', 1);}])->find($request->formation_id);
            
            if($formation->places > $formation->inscriptions_count){                    
                $item = $this->storeOrUpdate($request, $request->id, true);
                $infos=trans('inscription.validate-inscription'); 
            }else{
                $infos=trans('inscription.validate-refuse');                    
            }
        }else{
            $item = $this->storeOrUpdate($request, $request->id, true);
            $infos=trans('inscription.validate-no-inscription');
        }    
        Alert::success($infos, trans('inscription.validate1'));
    return redirect()->back();    
}
}
