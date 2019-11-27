<?php

return [
    'userManagement'    => [
        'title'          => 'Utilisateurs',
        'title_singular' => 'Utilisateurs',
    ],
    'permission'        => [
        'title'          => 'Autorisations',
        'title_singular' => 'Droits',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Rôles',
        'title_singular' => 'Rôle',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => 'Utilisateurs',
        'title_singular' => 'Utilisateur',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'basicCRM'          => [
        'title'          => 'Basic CRM',
        'title_singular' => 'Basic CRM',
    ],
    'crmStatus'         => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'crmCustomer'       => [
        'title'          => 'Customers',
        'title_singular' => 'Customer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'first_name'         => 'First name',
            'first_name_helper'  => '',
            'last_name'          => 'Last name',
            'last_name_helper'   => '',
            'status'             => 'Status',
            'status_helper'      => '',
            'email'              => 'Email',
            'email_helper'       => '',
            'phone'              => 'Phone',
            'phone_helper'       => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'skype'              => 'Skype',
            'skype_helper'       => '',
            'website'            => 'Website',
            'website_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'crmNote'           => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'customer'          => 'Customer',
            'customer_helper'   => '',
            'note'              => 'Note',
            'note_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'crmDocument'       => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'customer'             => 'Customer',
            'customer_helper'      => '',
            'document_file'        => 'File',
            'document_file_helper' => '',
            'name'                 => 'Document name',
            'name_helper'          => '',
            'description'          => 'Description',
            'description_helper'   => '',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => '',
        ],
    ],
    'contactManagement' => [
        'title'          => 'Contact management',
        'title_singular' => 'Contact management',
    ],
    'contactCompany'    => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'company_name'           => 'Company name',
            'company_name_helper'    => '',
            'company_address'        => 'Address',
            'company_address_helper' => '',
            'nbr_sms'                => 'nbr Sms',
            'nbr_sms_helper'         => '',
            'nbr_email'                => 'nbr Email',
            'nbr_email_helper'         => '',
            'company_website'        => 'Website',
            'company_website_helper' => '',
            'company_email'          => 'Email',
            'company_email_helper'   => '',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => '',
        ],


    ],

    'contacthistory' => [
        'title'          => 'historique',
    ],
    'contactContact'    => [
        'title'          => 'Contacts',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => '',
            'company'                   => 'Company',
            'company_helper'            => '',
            'contact_first_name'        => 'First name',
            'contact_first_name_helper' => '',
            'contact_last_name'         => 'Last name',
            'contact_last_name_helper'  => '',
            'contact_phone_1'           => 'Phone 1',
            'contact_phone_1_helper'    => '',
            'contact_phone_2'           => 'Phone 2',
            'contact_phone_2_helper'    => '',
            'contact_email'             => 'Email',
            'contact_email_helper'      => '',
            'contact_skype'             => 'Skype',
            'contact_skype_helper'      => '',
            'contact_address'           => 'Address',
            'contact_address_helper'    => '',
            'created_at'                => 'Created at',
            'created_at_helper'         => '',
            'updated_at'                => 'Updated At',
            'updated_at_helper'         => '',
            'deleted_at'                => 'Deleted At',
            'deleted_at_helper'         => '',
        ],
    ],
];
