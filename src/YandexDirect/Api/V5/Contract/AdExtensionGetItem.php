<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionGetItem extends AdExtensionBase
{

    protected $Id = null;

    /**
     * Creates a new instance of AdExtensionGetItem.
     *
     * @return AdExtensionGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }


}

