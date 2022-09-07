<?php
namespace App\Traits\Api;


Trait Response
{
    public $response;
    public function setResponse($data)
    {
        $this->response=[
            'status_code'=>(!isset($data['status_code']))?'':$data['status_code'],
            'message'=>[
                'success'=>(!isset($data['success']))?[]:$data['success'],
                'error'=>(!isset($data['error']))?[]:$data['error'],
                'info'=>(!isset($data['info']))?[]:$data['info'],
                'warning'=>(!isset($data['warning']))?[]:$data['warning']
            ],
            'data'=>(!isset($data['data']))?[]:$data['data']

        ];
        return $this->response;

    }

    public function getResponse()
    {
        return response()->json($this->response, $this->response['status_code']);


    }




}
