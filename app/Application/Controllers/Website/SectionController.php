<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use App\Application\Model\Local;
use App\Application\Model\Section;
use App\Application\Repository\InterFaces\LocalInterface;
use App\Application\Requests\Website\Section\AddRequestSection;
use App\Application\Requests\Website\Section\UpdateRequestSection;

class SectionController extends AbstractController
{

    protected $localInterface;

    public function __construct(Section $model, LocalInterface $localInterface)
    {
        parent::__construct($model);
        $this->localInterface = $localInterface;
    }

    public function index()
    {
        $items = $this->model;

        if (request()->has("name") && request()->get("name") != "") {
            $items = $items->where("name", "like", "%" . request()->get("name") . "%");
        }

        $data = ['data' => $this->localInterface->getRequestById(null)];
        $items = $items->paginate(env('PAGINATE'));
        $url = setting("sections");
        $imag = [];
        if ($url != null) {
            $imag = ["imag" => url('/' . env('UPLOAD_PATH') . '/' . $url)];
        }

        return view('website.section.index', compact('data', 'items', 'imag'));
    }

    public function show($id = null)
    {
        return $this->createOrEdit('website.section.edit', $id);
    }

    public function store(AddRequestSection $request)
    {
        $item = $this->storeOrUpdate($request, null, true);
        return redirect('section');
    }

    public function update($id, UpdateRequestSection $request)
    {
        $item = $this->storeOrUpdate($request, $id, true);
        return redirect()->back();

    }

    public function getById($id)
    {
        $fields = $this->model->findOrFail($id);
        $locaux = Local::where('section_id', $id)->get();
        $data = $this->localInterface->getRequestById($id);
        return $this->createOrEdit('website.section.show', $id, compact('data', 'locaux', 'fields'));
    }

    public function getBySlug($slug)
    {
        $sections = $this->model->all();
        $fields = $sections->where('slug', str_slug($slug))->first();
        if (is_null($fields)) {
            return view('errors.404');
        }

        $locaux = Local::where('section_id', $fields->id)->get();
        $data = $this->localInterface->getRequestById($fields->id);

        return $this->createOrEdit('website.section.show', $fields->id, compact('data', 'locaux', 'fields'));
    }

    public function destroy($id)
    {
        return $this->deleteItem($id, 'section')->with('sucess', 'Done Delete Section From system');
    }
    public function locaux($id)
    {
        $locaux = Local::where('section_id', $id)->pluck('name', 'id')->all();
        return json_encode(transformSelect($locaux));
    }
}
