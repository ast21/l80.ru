<?php

namespace App\Ship\Services\Soap\Bmg;

use SoapClient;

class BmgClient
{
    protected SoapClient $client;

    public function __construct()
    {
        $options = array_merge(
            config('services.soap.bmg.options'),
            app()->isProduction() ? [] : [
                'stream_context' => stream_context_create([
                    'ssl' => [
                        // set some SSL/TLS specific options
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true,
                    ],
                ])
            ],
        );
        $userId = config('services.soap.bmg.options.login');
        $this->client = new SoapClient(config('services.soap.bmg.url'), $options);
        # Добавление Soap заголовка без неймспейса
        $headerVar = new \SoapVar("<userId>$userId</userId>", XSD_ANYXML);
        $header = new \SoapHeader('http://schemas.xmlsoap.org/soap/envelope/', 'RequestParams', $headerVar);
        $this->client->__setSoapHeaders($header);
    }

    /**
     * Проверка телефона и ИИН в БМГ
     *
     * @param array $params
     * @return bool
     */
    public function getVerifyPhoneInfo(array $params): bool
    {
        $result = $this->client->getVerifyPhoneInfo($params);
        $result = json_decode(json_encode($result), true);
        if (isset($result['return']['response']['responseData']['data']['result'])) {
            # Ответ от БМГ приходит строкой
            return mb_strtolower($result['return']['response']['responseData']['data']['result']) == 'true';
        } else {
            return false;
        }
    }
}
