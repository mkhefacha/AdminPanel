<?php

namespace App;
use App\User;
use auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ContactContact extends Model
{
    use SoftDeletes;

    public $table = 'contact_contacts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'company_id',
        'updated_at',
        'deleted_at',
        'contact_email',
        'contact_phone_1',
        'contact_phone_2',
        'contact_name',
        'contact_creer',
        'user_id',
        'liste_id',

    ];


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
    public function getContactPhone1Attribute($value)
    {





          if ((auth()->id()==$this->user_id) || (auth()->user()->hasRole('Superadmin')) || (auth()->user()->hasRole('Admin')))
          {
              return ($value);
          }

          else

              return substr_replace($value ,"****",2,4);


    }


    public function getContactPhone2Attribute($value)
    {

        if ((auth()->id()==$this->user_id) || (auth()->user()->hasRole('Superadmin')) || (auth()->user()->hasRole('Admin')))
        {
            return ($value);

        }

        else

            return substr_replace($value ,"****",2,4);

    }

    public function getContactEmailAttribute($value)
    {
        $mystring = $value;
        $mystring = substr($mystring, 1, strpos($mystring, "@"));

        if ((auth()->id()==$this->user_id) || (auth()->user()->hasRole('Superadmin')) || (auth()->user()->hasRole('Admin')))
        {
            return ($value);

        }

        else

            return str_replace($mystring ,"****", $value);

    }





}
