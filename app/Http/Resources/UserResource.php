<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return
            [
                'id' => $this->id,
                'name' => $this->name,
                'company_id' => $this->company_id,
                'active' => $this->active,
                'email' => $this->email,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'deleted_at' => $this->deleted_at,
                'email_verified_at' => $this->email_verified_at,

           ];
    }
}






