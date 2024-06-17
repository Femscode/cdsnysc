<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Album;
use App\Models\schools;
use App\Models\Follower;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $guarded = [];
   protected $table = 'users';
   	 
  

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  
    public function cdsname()
    {
    
        return $this->belongsTo(CdsGroup::class,'cdsgroup','uuid');
    }

    public function paymentstatus($paymentId,$userId) {
        $payment = Paid::where('payment_id',$paymentId)->where('user_id',$userId)->first();
        if($payment !== null) {
            return true;
        }
        return false;
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'scdsgroup' => 'array'
    ];
  
}
