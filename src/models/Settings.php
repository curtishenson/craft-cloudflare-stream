<?php

namespace deuxhuithuit\cfstream\models;

use craft\base\Model;
use craft\helpers\App;

class Settings extends Model
{
    public $accountId = '';
    public $apiToken = '';

    /**
     * @var bool
     */
    public $autoUpload = false;

    public function defineRules(): array
    {
        return [
            [['accountId', 'apiToken'], 'required'],
            ['autoUpload', 'bool'],
        ];
    }

    public function getAccountId(): string
    {
        return App::parseEnv($this->accountId);
    }

    public function getApiToken(): string
    {
        return App::parseEnv($this->apiToken);
    }

    public function isAutoUpload(): bool
    {
        return $this->autoUpload == 1 || $this->autoUpload == true;
    }
}
