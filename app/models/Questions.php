<?php

class Questions extends Eloquent {

        protected   $table = 'questions';
        
        protected $fillable = array('title', 'content', 'created_at', 'created_ip');
        
        public function user() 
        {
            return $this->belongsTo('User', 'user_id');
        } 
        
        public function comments() 
        {
            return $this->hasMany('Comments', 'question_id');
        }
    
}