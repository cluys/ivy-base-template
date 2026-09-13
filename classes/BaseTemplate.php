<?php

namespace Cluys\Template\Base;

use Ivy\Template\Application\Contracts\TemplateInterface;
use Ivy\Template\Infrastructure\Manager\AssetManager;
use Ivy\Template\Infrastructure\Manager\TemplateManager;
use Ivy\User\Application\Service\AuthService;

class BaseTemplate implements TemplateInterface
{
    public function register(AuthService $auth): void
    {
        AssetManager::addCSS('css/style.css');
        AssetManager::addJS('js/twinspark.min.js');

        TemplateManager::require('routes/web.php');
        TemplateManager::require('routes/user.php');
        TemplateManager::require('routes/admin.php');
        TemplateManager::require('routes/error.php');
    }

    public function install(): void
    {
    }

    public function uninstall(): void
    {
    }
}
