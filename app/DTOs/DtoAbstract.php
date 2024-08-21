<?php

namespace App\DTOs;

abstract class DtoAbstract
{

    abstract protected function toArray(): array;


    abstract protected function toJson(): object;
}
