<?php

namespace App\Ship\Services\Soap\Insis;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use App\Ship\Services\Soap\Insis\Contracts\InsisResponseInterface;
use App\Ship\Services\Soap\Insis\Exceptions\InsisException;
use SoapClient;

class BaseClient extends SoapClient
{
    /**
     * Вызов soap метода
     * @param string $method
     * @param InsisRequestInterface $data
     * @return InsisResponseInterface
     * @throws InsisException
     */
    public function call(string $method, InsisRequestInterface $data): InsisResponseInterface
    {
        $params = $data->toArray();
        try {
            $response = $this->__soapCall($method, [$params]);
            $response = json_decode(json_encode($response), true);
            return new BaseResponse($response['return']);
        } catch (\Exception $exception) {
            //? TODO: дополнительная обработка ошибок?
            throw new InsisException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
