# CAM 



# Table of contents

for give project more work time

**Modules:**

- /ar/events/slug-in-arabe
- /en/events/slug-in-english
- /fr/evenements/slug-en-francais

**Pages:**

- /ar/parent-pages-slug-ar/subpage-slug-ar/page-slug-ar
- /en/parent-pages-slug-en/subpage-slug-en/page-slug-en
- /fr/parent-pages-slug-fr/subpage-slug-fr/page-slug-fr

## Requirements

- PHP >= 7.1.3
- MySQL 5.7
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- Memcached or Redis
- XML PHP Extension

## Installation

First install [Composer](https://getcomposer.org)

1. Download the git


2. Enter the newly created folder

   ```
   cd CAN_v2
   ```

3. DB migration and seed, user creation, import database

## Feature

create langauge files<br>
 Add Item to AdminAPanel Menu<br>
 Create model with update , add validation <br>
 create Datatable class and html<br>
 Create Controller with add,edit,delete,store,update actions<br>
 Create View for add , edit, show <br>
 Generate Admin route  <br>
 Create Api class with view,view by id ,delete,store,update<br>
 Generate Api route <br>
 Create transform file for each api calss<br>
 Create Migration file<br>
 Acl permission system<br>
 setting system <br>
 multi theme for admin panel<br>
 support multi language<br>
ً we generate two request file one for store data other for update data <br>

   <!-- Requests -->
 # Requests
We Generate two Requests file one for update and other for add
```
  app\Application\Requests\Admin\ModelRequestName\AddRequestModelname
  app\Application\Requests\Admin\ModelRequestName\UpdateRequestModelname
```
the first one will use in store function on the controller <br>
the secound one will use in the update function in the controller

 <!-- Requests  -->


 
 
 <!-- model -->
# Model
```app/Application/Model/Nameofmodel.php```
    
this will be the model of the module
it will contain the following
    
## Table name make sure this is the table name    
```
  public $table = "Nameofmodel";
```

## Fillable column make sure you add all column on your table
```
    protected $fillable = [
           'name'
    ]; 
```      

<!-- model -->

<!-- Datatable -->
# Datatable
```app/Application/Datatables/NameofmodelDatatable.php```
 
## this is class to handel datatable .... every table in laraflat have his own class on this path so you must <br>
configure this class to show your data <br>
 
    this method will handel the add,view,update action 
     ```php
        public function ajax()
             {
                 return $this->datatables
                      ->eloquent($this->query())
                      ->addColumn('edit', 'admin.nameofmodel.buttons.edit')
                      ->addColumn('delete', 'admin.nameofmodel.buttons.delete')
                      ->addColumn('view', 'admin.nameofmodel.buttons.view')
                     ->addColumn('name', 'admin.nameofmodel.buttons.langcol')
                      ->make(true);
             }
     ```
 you can add or delete or  customize any of this feilds <br>
 
## this method you can show or delete the tds from the table 
 
     ```php
         protected function getColumns()
            {
                return [
                    [
                        'name' => "id",
                        'data' => 'id',
                        'title' => adminTrans('curd' , 'id'),
                    ],
                    [
                        'name' => "name",
                        'data' => 'name',
                    ],
                     [
                          'name' => "view",
                          'data' => 'view',
                          'title' => adminTrans('curd' , 'view'),
                          'exportable' => false,
                          'printable' => false,
                          'searchable' => false,
                          'orderable' => false,
                     ],
                     [
                          'name' => 'edit',
                          'data' => 'edit',
                          'title' => adminTrans('curd' , 'edit'),
                          'exportable' => false,
                          'printable' => false,
                          'searchable' => false,
                          'orderable' => false,
                     ],
                     [
                           'name' => 'delete',
                           'data' => 'delete',
                           'title' => adminTrans('curd' , 'delete'),
                           'exportable' => false,
                           'printable' => false,
                           'searchable' => false,
                           'orderable' => false,
                     ],
        
                ];
            }
    ```
you can see more about this from datatable <a href="https://yajrabox.com/docs/laravel-datatables/master">documentation</a> 

<!-- Datatable --> 


<!-- controller -->
# Controller
```app/Application/Controllers/admin/NameofmodelControllers.php```
```app/Application/Controllers/website/NameofmodelControllers.php```


all controller extends this class AbstractController this where the magic happen <br>
this class have all logic to get store update add methods on Laraflat <br>

## constructor function 

```
  public function __construct(Nameofmodel $model)
    {
        parent::__construct($model);
    }
```

<!-- controller -->
# Controller
```app/Application/Controllers/NameofmodelControllers.php```

all controller extends this class AbstractController this where the magic happen <br>
this class have all logic to get store update add methods on Laraflat <br>

## constructor function 

```
  public function __construct(Nameofmodel $model)
    {
        parent::__construct($model);
    }
```

here we add the model that we add ,  edit , update , store , delete Don not worry laralflat  write this to you <br>
to make ot easy to make this action

## index Method 

here we  build the datatable and render it do not worry about this all this work don by laraflat
```
 public function index(NameofmodelDataTable $dataTable){
        return $dataTable->render('admin.nameofmodel.index');
    }
```
    
## show Method 
this function call when you show add , edit
```
         public function show($id = null){
                return $this->createOrEdit('admin.nameofmodel.edit' , $id);
            }
```
you can pass any data to view as array as third arg in ```createOrEdit```


## Store Method

this method will call on store , update action
```
  public function store($id = null , \Illuminate\Http\Request $request){
         return $this->storeOrUpdate($request , $id , 'admin/nameofmodel');
    }
```
you can here customize your request and can check if request store by  ``` if($id == null)```

## GetById Method

this method control the view action in datatable 
```
   public function getById($id){
        $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
        return $this->createOrEdit('admin.nameofmodel.show' , $id , ['fields' =>  $fields]);
    }
```
this Method get all table column and send it with the item to the view to show details

## Destroy Method

this methods call when you try to delete the item 
```
 public function destroy($id){
        return $this->deleteItem($id , 'admin/categorie')->with('sucess' , 'Done Delete categorie From system');
    }
```
<!-- controller -->


<!-- views -->
# Views
```app/Application/views/admin/nameofmodel```
```app/Application/views/website/nameofmodel```

we generate by default 7 view 3 the index , edit , show this is the common fiels <br>
the other 4 controll the btns in datatable 

<!-- views -->

<!-- routes -->
# Routes
```app/Application/routes/admin/admin.php```
```app/Application/routes/website/website.php```
```app/Application/routes/visitor.php```


<!-- Lang Files -->
# Lang Files
```recources/lang/ar/nameofmodel```
<!-- Lang Files -->


<!-- tinymce -->
#  Tinymce
```how to use tinymce on any texteara```

just put this id on any texteara ``` tinymce ```<br>
then at the end of the page put this code

```
 @section('script')
        @include('admin.layout.helpers.tynic')
 @endsection
```    
<!-- tinymce -->


<!-- translate filed -->
# Translade Fileds
```add filed accept mluti language```
```
 {!! extractFiled('name' , isset($item->name) ? $item->name : null , 'text' , 'categorie') !!}
```  
  <ul>
    <li>name => feild name</li>
    <li>isset($item->name) ? $item->name : null => check if this is store action or edit action </li>
    <li>text => type of feild</li>
    <li>categorie => translate file must have key name of feild</li>
  </ul>
<!-- translate filed -->

<!-- get value from multi language col -->
#  Show By Lang
```get value deppend on user language```

you can use this two function  ``` getDefaultValueKey($filed) ```<br>
this function will decet the user lang and show him value depend on this lang or use this <br>
``` getLangValue($filed , 'ar')``` this function you must pass the language you want to show <br>

<!-- get value from multi language col -->

<!-- save arrays-->
# save arrays
if you want to save arrays in database just make the filed name as array like the example
```
  <input type="text" name="title[]" />
```
laralflat will decet the array filed and contvert it as json 
<!-- save arrays-->

<!-- trans words -->
# Trans Words
``` adminTrans('filename' , 'word')```
<!-- trans words -->

<!-- add lang to url-->
# Append lang to url
``` concatenateLangToUrl('admin/cat/item/1')```
<!-- trans words -->

<!-- get Av lan-->
# Get Languge
get all available language
``` getAvLang()```
<!-- get Av lan -->

<!-- transform select -->
# transform array
some times you will have array with multi language value so you want to get just the current language<br>
in this case use this function ```transformSelect()``` <br>
it will return with array this value will be from the current user language
<!-- transform select -->

<!-- Get Setting  -->
 # Get Setting
 laraflat have setting table so if you want to get setting just call this function ```getSetting('siteTitle')```
 <!-- Get Setting  -->


 <!-- menus -->
 # Menu
laraflat support menu system so if you want to show your menu use this function 
```menu('menuName')```
this will build ul with li with menu itmes 
 <!-- menus  -->
 
 
