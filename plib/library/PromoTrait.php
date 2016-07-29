<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.

trait Modules_Promo_PromoTrait
{
    public function getTitle()
    {
        return $this->lmsg('title');
    }

    public function getText()
    {
        return $this->lmsg('text');
    }

    public function getIconUrl()
    {
        return pm_Context::getBaseUrl() . ('/images/icon.png');
    }

    public function getHideText()
    {
        return $this->lmsg('hideText');
    }

    public function getButtonUrl()
    {
        return 'https://github.com/plesk/ext-promo';
    }

    public function getButtonText()
    {
        return $this->lmsg('buttonText');
    }
}
