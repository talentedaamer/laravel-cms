<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Test extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    	return array('hello', 'world');

        //return parent::toArray($request);
        //return [
	    	//'type' => 'tests',
	    	//'id' => $this->id,
		 //   'attributes' => [
			//    'subject' => $this->subject,
			//    'class' => $this->class,
			//    'section' => $this->section,
			//    'marks_total' => $this->marks_total,
			//    'marks_obtained' => $this->marks_obtained,
			//    'stu_roll' => $this->stu_roll,
			//    'created_at' => $this->created_at,
			//    'updated_at' => $this->updated_at,
		 //   ]
        //];
    }
}
