<?php

class Comments extends Eloquent {

        protected $table = 'comments';
        
        protected $fillable = array('comment', 'created_at', 'created_ip');
        
        public function user() 
        {
            return $this->belongsTo('User', 'user_id');
        } 
        
        public function questions() 
        {
            return $this->belongsTo('Questions', 'question_id');
        } 
    
}