<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Contact as ContactResource;

class Contact extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                        => $this->id,
            'type'                      => $this->type,
            'info'                      => $this->info,
            'person_id'                 => $this->person_id,
            'person_name'               => $this->person->name,
            'created_at'                => $this->created_at->format('d/m/Y'),
            'updated_at'                => $this->updated_at->format('d/m/Y'),
        ];
    }
}
