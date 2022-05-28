<?php

namespace KMA\IikoTransport\Entities\Delivery\Addresses;

use KMA\IikoTransport\Entities\Entity;
use KMA\IikoTransport\Contracts\IRequestBody;

class StreetsRequest extends Entity implements IRequestBody
{
    /**
     * @required
     * @var string Organization ID details of which have to be returned
     * | Can be obtained by /api/1/organizations operation
     */
    public string $organizationId;

    /**
     * @required
     * @var string City ID
     */
    public string $cityId;


    public function __construct(?array $data = null)
    {
        if (null !== $data) {
            $this->organizationId = $data['organizationId'];
            $this->cityId = $data['cityId'];
        }
    }
}
