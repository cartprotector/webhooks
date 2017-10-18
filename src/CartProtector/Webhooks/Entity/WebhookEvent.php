<?php

namespace CartProtector\Webhooks\Entity;

use CartProtector\ApiObject\ApiObject;

class WebhookEvent extends ApiObject
{

    protected $timestamp;
    protected $trackerId;
    protected $visitorId;
    protected $trackId;
    protected $eventType;
    protected $eventStage;
    /** @var WebhookClientContacts */
    protected $contacts;
    /** @var WebhookSentEmail */
    protected $sentEmail;

    protected function getPropertiesList()
    {
        return [
            'timestamp',
            'trackerId',
            'visitorId',
            'trackId',
            'eventType',
            'eventStage',
            'contacts',
            'sentEmail'
        ];
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp > 0 ? (int)$timestamp : 0;
        return $this;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTrackerId($trackerId)
    {
        $this->trackerId = $trackerId > 0 ? (int)$trackerId : 0;
        return $this;
    }

    public function getTrackerId()
    {
        return $this->trackerId;
    }

    public function setVisitorId($visitorId)
    {
        $this->visitorId = $visitorId ? (string)$visitorId : null;
        return $this;
    }

    public function getVisitorId()
    {
        return $this->visitorId;
    }

    public function setTrackId($trackId)
    {
        $this->trackId = $trackId ? (string)$trackId : null;
        return $this;
    }

    public function getTrackId()
    {
        return $this->trackId;
    }

    public function setEventType($eventType)
    {
        $this->eventType = $eventType ? (string)$eventType : null;
        return $this->eventType;
    }

    public function getEventType()
    {
        return $this->eventType;
    }

    public function setEventStage($eventStage)
    {
        $this->eventStage = $eventStage ? $eventStage : null;
        return $this;
    }

    public function getEventStage()
    {
        return $this->eventStage;
    }

    public function setContacts($contacts)
    {
        $this->contacts = new WebhookClientContacts($contacts);
        return $this;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    public function setSentEmail($sentEmail)
    {
        $this->sentEmail = new WebhookSentEmail($sentEmail);
        return $this;
    }

    public function getSentEmail()
    {
        return $this->sentEmail;
    }

}