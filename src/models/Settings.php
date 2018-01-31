<?php

namespace part4\part4craft\models;

use craft\base\Model;

class Settings extends Model
{
    public $fb_page_id = '';
    public $fb_app_id = '';
    public $fb_app_secret = '';

    public function rules()
    {
        return [
            [['fb_page_id', 'fb_app_id', 'fb_app_secret'], 'required']
        ];
    }
}