<?php

namespace Scpigo\LaravelCore\Factory;

class DtoFactory {
    public static function createArray(array $items, string $class): array {
        $array = [];

        foreach ($items as $key => $item) {
            $dto = DtoFactory::dtoOfArray($item, $class);

            $array[$key] = $dto;
        }

        return $array;
    }

    public static function dtoOfArray(array $items, string $class) {
        $dto = app()->make($class);

        foreach ($items as $key => $value) {
            if (property_exists($dto, $key)) {
                $dto->$key = $value;
            }
            else return false;
        }

        return $dto;
    }
}