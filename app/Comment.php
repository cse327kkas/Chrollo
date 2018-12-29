<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
use App\Presenters\DatePresenter;
 
 
class Comment extends Model
{
  use DatePresenter;
 
  // fields can be filled
  protected $fillable = ['body', 'user_id', 'posts_id'];
 
  public function post()
  {
    return $this->belongsTo('App\Posts');
  }
 
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}