<?php

namespace App\Ship\Services\Soap\Insis;

use App\Ship\Services\Soap\Insis\Contracts\InsisResponseInterface;
use App\Ship\Services\Soap\Insis\Requests\GetDictionary;
use App\Ship\Services\Soap\Insis\Requests\GetObjectCarByKeyFields;
use App\Ship\Services\Soap\Insis\Requests\GetObjectProperty;
use App\Ship\Services\Soap\Insis\Requests\GetPeopleByKeyFields;
use App\Ship\Services\Soap\Insis\Requests\GetPolicyByKeyFields;
use App\Ship\Services\Soap\Insis\Requests\GetPolicy;
use App\Ship\Services\Soap\Insis\Requests\GetStandartCovers;
use App\Ship\Services\Soap\Insis\Requests\SetObjectLiability;
use App\Ship\Services\Soap\Insis\Requests\SetObjectProperty;
use App\Ship\Services\Soap\Insis\Requests\SetPeople;
use App\Ship\Services\Soap\Insis\Requests\SetPolicy;
use App\Ship\Services\Soap\Insis\Requests\UseDistribution;
use App\Ship\Services\Soap\Insis\Exceptions\InsisException;

class InsisClient
{
    public BaseClient $client;

    public function __construct()
    {
        // ini_set('soap.wsdl_cache_enabled', '0');
        $this->client = new BaseClient(config('services.soap.insis.url'), [
            // Добавление HTTP заголовка с авторизацией
            'stream_context' => stream_context_create([
                'http' => [
                    'header' => implode("\r\n", [
                        'Username: '.config('services.soap.insis.username'),
                        'Password: '.config('services.soap.insis.password'),
                    ]),
                ],
            ]),
            'trace' => true,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        ]);
    }

    /**
     * Справочник
     */
    public function getDictionary(GetDictionary $data): InsisResponseInterface
    {
        return $this->client->call('getDictionary', $data);
    }

    /**
     * Поиск клиента
     *
     * @throws InsisException
     */
    public function getPeopleByKeyFields(GetPeopleByKeyFields $data): InsisResponseInterface
    {
        return $this->client->call('getPeopleByKeyFields', $data);
    }

    /**
     * Создание/обновление клиента
     *
     * @throws InsisException
     */
    public function setPeople(SetPeople $data): InsisResponseInterface
    {
        return $this->client->call('setPeople', $data);
    }

    /**
     * Поиск договоров по ключевым полям
     *
     * @throws InsisException
     */
    public function getPoliciesByKeyFields(GetPolicyByKeyFields $data): InsisResponseInterface
    {
        return $this->client->call('getPoliciesByKeyFields', $data);
    }

    /**
     * Получение договора
     * @param $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function getPolicy(GetPolicy $data): InsisResponseInterface
    {
        return $this->client->call('getPolicy', $data);
    }

    /**
     * Получение объекта недвижимости
     * @param GetObjectProperty $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function getObjectProperty(GetObjectProperty $data): InsisResponseInterface
    {
        return $this->client->call('getObjectProperty', $data);
    }

    /**
     * Поиск объекта транспортного средства
     * @param GetObjectCarByKeyFields $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function getObjectCarByKeyFields(GetObjectCarByKeyFields $data): InsisResponseInterface
    {
        return $this->client->call('getObjectCarByKeyFields', $data);
    }

    /**
     * Рассылка смс/почты
     * @param UseDistribution $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function useDistribution(UseDistribution $data): InsisResponseInterface
    {
        return $this->client->call('useDistribution', $data);
    }

    /**
     * Создание/обновление объекта недвижимости
     * @param SetObjectProperty $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function setObjectProperty(SetObjectProperty $data): InsisResponseInterface
    {
        return $this->client->call('setObjectProperty', $data);
    }

    /**
     * Создание объекта ГПО перед третьими лицами
     * @param SetObjectLiability $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function setObjectLiability(SetObjectLiability $data): InsisResponseInterface
    {
        return $this->client->call('setObjectLiability', $data);
    }

    /**
     * Получение покрытий по договору
     * @param GetStandartCovers $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function getStandartCovers(GetStandartCovers $data): InsisResponseInterface
    {
        return $this->client->call('getStandartCovers', $data);
    }

    /**
     * Создание договора
     * @param SetPolicy $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function setPolicy(SetPolicy $data): InsisResponseInterface
    {
        return $this->client->call('setPolicy', $data);
    }
}
