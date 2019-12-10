<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UserCollection extends Resource
{

    public function toArray($request)
    {
        return
            [

                'name'=>$this->name,
                'company_id' => $this->company_id,
                'active' => $this->active,
                'links' => [
                    'href' =>route('api.users.show',$this->id)
                ]



            ];
    }
}
