<?php

namespace CartProtector\Webhooks\Entity;

use CartProtector\ApiObject\ApiObject;

class WebhookClientContacts extends ApiObject
{

    protected $email;

    protected function getPropertiesList()
    {
        return [
            'email'
        ];
    }

    public function setEmail($email)
    {
        $this->email = $email ? (string)$email : null;
    }

    public function getEmail()
    {
        return $this->email;
    }

}