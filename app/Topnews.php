<?php

namespace App;

use Carbon\Carbon;
use Hash;
use Validator;
use Illuminate\Database\Eloquent\Model;

class Topnews extends Model
{
    /*public $dates=[
        'created_at', 'updated_at', 'posted_at'
    ];
    /*public function setCreatedAtAttribute($date){
         $this->attributes['posted_at']= Carbon::createFromFormat('M/d/Y', $date)->format('Y-m-d');
    }*/
    private $rules = [
        'news_heading'=>'required',
        'news_body'=>'required',
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
   
    protected $fillables=[
        'news_heading', 'news_body'
    ];
    public function setNewsHeadingAttribute($value){
        $this->attributes['news_heading']= ucfirst($value);
    }
    public function setNewsBodyAttribute($valuee){
        $this->attributes['news_body']= ucfirst($valuee);
    }
    
   
}
