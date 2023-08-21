<?php

declare(strict_types=1);

namespace Profile;

class Config
{
    private bool $is_production;
    private string $lang;
    private string|null $langParam;

    private function __construct()
    {
        $this->is_production = filter_var($_ENV['IS_PRODUCTION'], FILTER_VALIDATE_BOOLEAN) ?? false;

        $this->lang = $_ENV['LANGUAGE'] ?? 'es';

        $this->langParam = $_GET['lang'] ?? null;

        error_reporting($this->is_production ? 0 : E_ALL);

        ini_set('display_startup_errors', $this->is_production ? 'Off' : 'On');

        ini_set('display_errors', $this->is_production ? 'Off' : 'On');
    }

    public function getIsProduction(): bool
    {
        return $this->is_production;
    }

    public function getLang(): string
    {
        return $this->lang;
    }

    public function getLangParam(): string|null
    {
        return $this->langParam;
    }

    public static function init(): Config
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new Config();
        }
        return $instance;
    }
}
