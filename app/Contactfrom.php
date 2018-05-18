<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Contactfrom extends Model
{
    private $rules = [
            'Name'=>'required|max:60',
            'Title'=>'required|max:255',
            'Company'=>'required|max:100',
            'Email'=>'required|max:60',
            'Phone'=>'required|min:10|max:15',
            'Subject'=>'required',
            'Message'=>'required'
    ];
  
    public function validate()
    {

        $v=Validator::make($this->attributes, $this->rules);
        if($v->fails()){
            $this->errors= $v->messages();
            return false;
        }
        return true;
    }
    public function errors()
    {
      return $this->errors;  
    }
}
   