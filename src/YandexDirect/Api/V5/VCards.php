<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V5SoapClient;

/**
 * Auto-generated code.
 */
class VCards extends V5SoapClient
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/vcards?wsdl';

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     * @param User $user
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        parent::__construct(self::ENDPOINT, $dispatcher, $user, array(
            'classmap' => array(
                'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'VCardFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VCardFieldEnum',
                'Phone' => 'Biplane\YandexDirect\Api\V5\Contract\Phone',
                'InstantMessenger' => 'Biplane\YandexDirect\Api\V5\Contract\InstantMessenger',
                'MapPoint' => 'Biplane\YandexDirect\Api\V5\Contract\MapPoint',
                'VCardAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardAddItem',
                'VCardGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardGetItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetVCardsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetVCardsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddVCardsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddVCardsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsResponse'
            )
        ));
    }

    /**
     * add.
     *
     * @param Contract\AddVCardsRequest $parameters
     * @return Contract\AddVCardsResponse
     */
    public function add(Contract\AddVCardsRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * get.
     *
     * @param Contract\GetVCardsRequest $parameters
     * @return Contract\GetVCardsResponse
     */
    public function get(Contract\GetVCardsRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteVCardsRequest $parameters
     * @return Contract\DeleteVCardsResponse
     */
    public function delete(Contract\DeleteVCardsRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }


}

