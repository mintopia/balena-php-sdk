<?php
namespace Mintopia\BalenaSdk;

class Manager {
    protected $apiKey;

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}