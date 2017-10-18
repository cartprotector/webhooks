<?php

namespace CartProtector\Webhooks\Entity;

use CartProtector\ApiObject\ApiObject;

class WebhookSentEmail extends ApiObject
{

    protected $senderEmail;
    protected $senderName;
    protected $replyToEmail;
    protected $replyToName;
    protected $receiverEmail;
    protected $subject;
    protected $html;
    protected $text;

    protected function getPropertiesList()
    {
        return [
            'senderEmail',
            'senderName',
            'replyToEmail',
            'replyToName',
            'receiverEmail',
            'subject',
            'html',
            'text'
        ];
    }

    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail ? (string)$senderEmail : null;
        return $this;
    }

    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName ? (string)$senderName : null;
        return $this;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setReplyToEmail($replyToEmail)
    {
        $this->replyToEmail = $replyToEmail ? (string)$replyToEmail : null;
        return $this;
    }

    public function getReplyToEmail()
    {
        return $this->replyToEmail;
    }

    public function setReplyToName($replyToName)
    {
        $this->replyToName = $replyToName ? (string)$replyToName : null;
        return $this;
    }

    public function getReplyToName()
    {
        return $this->replyToName;
    }

    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail ? (string)$receiverEmail : null;
        return $this;
    }

    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject ? (string)$subject : null;
        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setHtml($html)
    {
        $this->html = $html ? (string)$html : null;
        return $this;
    }

    public function getHtml()
    {
        return $this->html;
    }

    public function setText($text)
    {
        $this->text = $text ? (string)$text : null;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

}