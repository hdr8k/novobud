<?php


namespace App\Services\CRM\Contracts;


interface CrmApi
{
    public function createLid(array $params): bool;
}
