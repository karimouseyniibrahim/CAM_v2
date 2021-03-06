<?php
namespace App\Application\Repository\Eloquent;

use App\Application\Model\Group;
use App\Application\Model\Log;
use App\Application\Model\Menu;
use App\Application\Model\Page;
use App\Application\Model\Permission;
use App\Application\Model\Role;
use App\Application\Model\Setting;
use App\Application\Model\User;
use App\Application\Model\UserInfo;
use App\Application\Model\Formation;
use App\Application\Model\Site;
use App\Application\Model\Local;
use App\Application\Model\Inscription;
use App\Application\Model\Artisan;
use App\Application\Model\Request;
use App\Application\Model\Contact;
use App\Application\Repository\InterFaces\HomeInterface;
use Illuminate\Support\Facades\DB;



class HomeEloquent extends AbstractEloquent implements HomeInterface{

    public function __construct(User $user )
    {
        $this->model = $user;
    }
    public function getData($days , $limit){
        $lastRegisterUser= $this->model->with('group')->limit(10)->orderBy('id' , 'desc')->get();
        return [
            'userCount' => $this->model->count(),
            'groupCount' => Group::count(),
            'permissionsCount' => Permission::count(),
            'roleCount' => Role::count(),
            'lastRegisterUser' => $lastRegisterUser ,
            'pages' => Page::count() ,
            'menus' => Menu::count() ,
            'artisan' => Artisan::count() ,
            'formation' => Formation::count() ,
            'site' => Site::count() ,
            'local' => Local::count() ,
            'contact' => Contact::count() ,
            'contactNoRead' => Contact::where("read",null)->count(),
            'requests' => Request::count() ,
            'requestsN' => Request::where("status",null)->count(),
            'inscription' => Inscription::count() ,
            'inscriptionsN' => Inscription::where("status",null)->count() ,
            
            'setting' => Setting::count(),
            'logs' => Log::count(),
            'log' => Log::with('user')->limit(10)->orderBy('id' , 'desc')->get(),
        ];
    }



}