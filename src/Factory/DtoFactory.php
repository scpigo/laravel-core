<?php

namespace Scpigo\Core\Factory;

class DtoFactory {
    public static function createArray(array $items, string $class): array {
        $array = [];

        foreach ($items as $key => $item) {
            $dto = DtoFactory::createObject($item, $class);

            $array[$key] = $dto;
        }

        return $array;
    }

    public static function dtoOfArray(array $items, string $class) {
        $dto = app()->make($class);

        foreach ($items as $key => $value) {
            $dto->$key = $value;
        }

        return $dto;
    }
}