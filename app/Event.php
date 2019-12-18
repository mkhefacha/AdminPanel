<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Event extends Model
{
    use SoftDeletes;
    protected $table='events';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    protected $attributes = [
        'status' => 0
    ];

    public function getStatusAttribute($attribute)
    {
        return
            [
                0 => 'en attente',
                1 => 'deja lancé'

            ][$attribute];
    }

    protected $guarded=[];

    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }

    public function ListeCompanie()
    {
        return $this->belongsTo(ListeCompany::class, 'liste_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function smscompanie()
    {
        return $this->belongsTo(SmsCompany::class);
    }

    public function emailcompanie()
    {
        return $this->belongs(EmailCompany::class);
    }


}
