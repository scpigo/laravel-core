<?php

namespace Scpigo\Core\Factory;

use Scpigo\Core\Factory\DtoFactory;

class ConfigFactory
{
    public static function initConfig(array $configs): array
    {
        $_configs = [];

        if (!empty($configs)) {
            foreach ($configs as $key => $config) {
                $_configs[$key] = DtoFactory::createArray($config['items'], $config['class']);
            }
        }

        return $_configs;
    }
}