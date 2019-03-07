<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{

  public $table = "formation";


   protected $fillable = [
        'libelle','description', 'price', 'places', 'debut_formation', 'fin_formation', 'image'
   ];

	public function getLibelleLangAttribute(){
		return is_json($this->libelle) && is_object(json_decode($this->libelle)) ?  json_decode($this->libelle)->{getCurrentLang()}  : $this->libelle;
	}
	public function getLibelleEnAttribute(){
		return is_json($this->libelle) && is_object(json_decode($this->libelle)) ?  json_decode($this->libelle)->en  : $this->libelle;
	}
	public function getLibelleArAttribute(){
		return is_json($this->libelle) && is_object(json_decode($this->libelle)) ?  json_decode($this->libelle)->ar  : $this->libelle;
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
