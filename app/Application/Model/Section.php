<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

  public $table = "section";


   protected $fillable = [
        'name','description','image'
   ];

	public function getNameLangAttribute(){
		return is_json($this->name) && is_object(json_decode($this->name)) ?  json_decode($this->name)->{getCurrentLang()}  : $this->name;
	}
	public function getNameEnAttribute(){
		return is_json($this->name) && is_object(json_decode($this->name)) ?  json_decode($this->name)->en  : $this->name;
	}
	public function getNameArAttribute(){
		return is_json($this->name) && is_object(json_decode($this->name)) ?  json_decode($this->name)->ar  : $this->name;
	}
	public function getDescriptionLangAttribute(){
		return is_json($this->description) && is_object(json_decode($this->description)) ?  json_decode($this->description)->{getCurrentLang()}  : $this->description;
	}
	public function getDescriptionEnAttribute(){
		return is_json($this->description) && is_object(json_decode($this->description)) ?  json_decode($this->description)->en  : $this->description;
	}
	public function getDescriptionArAttribute(){
		return is_json($this->description) && is_object(json_decode($this->description)) ?  json_decode($this->description)->ar  : $this->description;
	}

}
