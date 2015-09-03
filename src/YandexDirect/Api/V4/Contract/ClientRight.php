<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ClientRight
{
    const RIGHT_ALLOW_EDIT_CAMPAIGNS = 'AllowEditCampaigns';
    const RIGHT_ALLOW_TRANSFER_MONEY = 'AllowTransferMoney';
    const RIGHT_ALLOW_IMPORT_XLS     = 'AllowImportXLS';

    /**
     * @var string
     */
    protected $RightName;

    /**
     * @var string
     */
    protected $Value;

    /**
     * @var string
     */
    protected $AgencyName;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the RightName.
     *
     * @return string
     */
    public function getRightName()
    {
        return $this->RightName;
    }

    /**
     * Sets the RightName.
     *
     * @param string $RightName
     *
     * @return ClientRight
     */
    public function setRightName($RightName)
    {
        $this->RightName = $RightName;

        return $this;
    }

    /**
     * Gets the Value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets the Value.
     *
     * @param string $Value
     *
     * @return ClientRight
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }

    /**
     * Gets the AgencyName.
     *
     * @return string
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }

    /**
     * Sets the AgencyName.
     *
     * @param string $AgencyName
     *
     * @return ClientRight
     */
    public function setAgencyName($AgencyName)
    {
        $this->AgencyName = $AgencyName;

        return $this;
    }
}