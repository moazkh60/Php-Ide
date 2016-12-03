<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class code_submissions extends Model {
	protected $table = 'submitted_codes';
	//
	protected $fillable = ['user_id','code'];
}
