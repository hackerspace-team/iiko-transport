<?php

namespace KMA\IikoTransport\Entities;

class TerminalGroup
{
    /**
     * @required
     * @var string <uuid> Organization ID
     * Can be obtained by /api/1/organizations operation
     */
    public string $organizationId;

    /**
     * @required
     * @var \KMA\IikoTransport\Entities\TerminalGroupItem[] Items for organization.
     */
    public array $items;
}
