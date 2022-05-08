<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Cache;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use LaratrustUserTrait; // add this trait to your user model
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email', 'password', 'position', 'department_id', 'title_name_id', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function stcoks()
    {

        return $this->hasMany('App\Stcoks');
    }


    public function repairs()
    {

        return $this->hasMany('App\Stcoks');
    }

    public function repair_statuss()
    {

        return $this->hasMany('App\Repair_status');
    }

    // public function stcoks_update()
    // {

    //     return $this->hasMany('App\Stcoks');
    // }

    // public function stcoks_update()
    // {

    //     return $this->hasMany('App\Stcoks');
    // }

    public function department()
    {

        return $this->belongsTo('App\Department', 'department_id');
    }

    public function title_name()
    {

        return $this->belongsTo('App\Title_name', 'title_name_id');
    }

     public function tenders()
    {

        return $this->hasMany('App\Tender');
    }

    public function timeline_codiv_details()
    {

        return $this->hasMany('App\Timeline_covid_detail');
    }

    public function stock_wastes_outcome_model_cartridge_inks()
    {
        return $this->hasMany('App\Stock_wastes_outcome_model_cartridge_ink');
    }

    public function reportCheckUp_user()
    {
        return $this->belongsTo('App\ReportCheckUp', 'report_check_up_id');
    }
    public function receive_IdCards()
    {

        return $this->hasMany('App\IDCard\Receive_IdCard');
    }

    public function iDCards()
    {

        return $this->hasMany('App\IDCard\IDCard');
    }

}
