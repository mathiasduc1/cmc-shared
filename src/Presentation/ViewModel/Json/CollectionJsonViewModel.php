<?php

declare(strict_types=1);

namespace ChooseMyCompany\Shared\Presentation\ViewModel\Json;

class CollectionJsonViewModel implements JsonViewModel
{
    public function __construct(public readonly array $data)
    {
    }

    public function getHttpCode(): int
    {
        return 200;
    }
}
