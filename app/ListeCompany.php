<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ListeCompany extends Model
{
    use SoftDeletes;
    public $table = 'liste_companies';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

  protected $guarded=[];


    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contactContacts()
    {
        return $this->hasMany(ContactContact::class, 'company_id', 'id');
    }

}
