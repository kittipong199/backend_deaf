<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentsResource extends JsonResource
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
            'id' => $this->id,
            'coure_id' => $this->coure_id,
            'contentname' => $this->contentname,
            'video' => $this->video,
            'image' => $this->image,
            'content_text' => $this->content_text,
        ];
    }
}
