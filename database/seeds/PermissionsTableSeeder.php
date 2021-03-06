<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => '18',
                'title' => 'crm_status_create',
            ],
            [
                'id'    => '19',
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => '20',
                'title' => 'crm_status_show',
            ],
            [
                'id'    => '21',
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => '22',
                'title' => 'crm_status_access',
            ],
            [
                'id'    => '23',
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => '24',
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => '25',
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => '26',
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => '27',
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => '28',
                'title' => 'crm_note_create',
            ],
            [
                'id'    => '29',
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => '30',
                'title' => 'crm_note_show',
            ],
            [
                'id'    => '31',
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => '32',
                'title' => 'crm_note_access',
            ],
            [
                'id'    => '33',
                'title' => 'crm_document_create',
            ],
            [
                'id'    => '34',
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => '35',
                'title' => 'crm_document_show',
            ],
            [
                'id'    => '36',
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => '37',
                'title' => 'crm_document_access',
            ],
            [
                'id'    => '38',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '39',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '40',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '41',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '42',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '43',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '44',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '45',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '46',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '47',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '48',
                'title' => 'contact_contact_access',
            ],


            [
                'id'    => '49',
                'title' => 'contact_company_history',
            ],

            [
                'id'    => '50',
                'title' =>  'liste_company_access',
            ],

            [
                'id'    => '51',
                'title' =>  'liste_company_create',
            ],

            [
                'id'    => '52',
                'title' =>  'liste_company_show',
            ],

            [
                'id'    => '53',
                'title' =>  'liste_company_edit',
            ],

            [
                'id'    => '54',
                'title' =>  'liste_company_delete',
            ],

            [
                'id'    => '55',
                'title' =>  'evenement_access',
            ],



            [
                'id'    => '56',
                'title' =>  'Sms_access',
            ],


            [
                'id'    => '57',
                'title' =>  'sms_create',
            ],


            [
                'id'    => '58',
                'title' =>  'sms_edit',
            ],


            [
                'id'    => '59',
                'title' =>  'sms_delete',
            ],

            [
                'id'    => '60',
                'title' =>  'Email_access',
            ],

            [
                'id'    => '61',
                'title' =>  'email_create',
            ],

            [
                'id'    => '62',
                'title' =>  'email_edit',
            ],
            [
                'id'    => '63',
                'title' =>  'email_delete',
            ],

            [
                'id'    => '64',
                'title' =>  'event_access',
            ],

            [
                'id'    => '65',
                'title' =>  'event_create',
            ],
            [
                'id'    => '66',
                'title' =>  'event_edit',
            ],
            [
                'id'    => '67',
                'title' =>  'event_delete',
            ],


            [
            'id'    => '68',
            'title' =>  'global_contact_delete',
        ],

            [
                'id'    => '69',
                'title' =>  'envoyer_email',
            ],

            [
                'id'    => '70',
                'title' =>  'envoyer_sms',
            ],
        ];

        Permission::insert($permissions);
    }
}
