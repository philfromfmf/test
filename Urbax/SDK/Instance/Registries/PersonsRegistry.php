<?php

namespace Urbax\SDK\Instance\Registries;

/**
 * Справочник "Физические лица"
 */
class PersonsRegistry
{

    /**
     * Ключ справочника
     * @return string
     */
    public function getKey(): string
    {
        return 'persons';
    }

    /**
     * Человеко-читаемое имя справочника
     * @return string
     */
    public function getName(): string
    {
        return 'Физические лица';
    }

    /**
     * Список полей справочника
     * @return array
     */
    public function columns(): array
    {
        return [
            
                'foo' => [
                    'class' => \Urbax\SDK\Instance\Types\Columns\IntMax100Type::class,
                    'name' => 'Фу',
                ],
            
                'bar' => [
                    'class' => \Urbax\SDK\Instance\Types\Columns\IntMin10Type::class,
                    'name' => 'Бар',
                ],
            
        ];
    }

}
