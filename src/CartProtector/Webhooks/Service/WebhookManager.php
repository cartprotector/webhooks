<?php

namespace CartProtector\Webhooks\Service;

use CartProtector\Webhooks\Entity\WebhookEvent;

class WebhookManager
{

    /**
     * Create Webhook event from globals or from custom data
     *
     * @param null|string $eventData
     * @return WebhookEvent
     */
    public static function createWebhookEvent($eventData = null)
    {
        if (is_null($eventData) && array_key_exists('event', $_POST)) {
            $eventData = $_POST['event'];
        }
        return new WebhookEvent($eventData);
    }

}