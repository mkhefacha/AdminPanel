<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ContactCompany extends Model
{
    use SoftDeletes;
    public $table = 'contact_companies';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'company_name',
        'status',
        'nbr_sms',
        'nbr_email',
        'company_email',
        'company_address',
        'company_website',
    ];

    protected $attributes = [
        'status' => 0
    ];

    public function getStatusAttribute($attribute)
    {
        return
            [
                0 => 'Inactive',
                1 => 'Active'

            ][$attribute];
    }


    public function contactContacts()
    {
        return $this->hasMany(ContactContact::class, 'company_id', 'id');
    }
    public function users()
    {
        return $this->hasMany(User::class, 'company_id', 'id');
    }
}