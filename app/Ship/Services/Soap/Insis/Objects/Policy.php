<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

/**
 * Long policyID – идентификатор полиса;
 * Long annexID – идентификатор версии полиса (дополнительное соглашение);
 * Integer annexType – тип версии;
 * String annexReason - причина;
 * Long policyRef – ссылка на предыдущий договор (основной);
 * Action policyAction – акция по полису;
 * Double policyTotalPremium – премия по полису;
 * String insrType – продукт страхования (справочник INSRTYPES);
 * Long officeID – идентификатор офиса (справочник OFFICE);
 * Long clientID – идентификатор клиента;
 * Long agentID – идентификатор агента;
 * Integer tempEntry – признак временного въезда (0 – нет, 1 – да);
 * Integer printAction - указывается для того чтобы обозначить печать полиса на нескольких бланках (1 – да, 0 - нет);
 * String paymentType – тип платежа (справочник PAYMENTTYPES);
 * String paymentWay – cпособ оплаты (справочник PAYMENTWAYS);
 * Integer policyState – статус полиса (справочник POLICY_STATE);
 * Integer policyDuration – срок действия полиса;
 * String policyDimension – измерение срока (d – дни, m – месяца, y - года);
 * Integer policyType – тип полиса;
 * String tariffRule – правила тарификации (справочник TARIFFRULES);
 * Date issueDate – дата выдачи;
 * Date beginDate – дата начала;
 * Date endDate – дата окончания;
 * List<PolicyBlanks> blanks – массив бланков;
 * List<People> insureds – массив застрахованных;
 * List<PolicyObject> objects – массив объектов страхования;
 * List<Payment> payments – массив платежей по полису;
 * Long changeUserID – идентификатор пользователя;
 * Date changeDate - дата изменения;
 * Integer salesChanelID – канал продаж (справочник SALESCHANEL);
 * byte[] policyAttachment – прикрепленные фаилы;
 * List<ObjectParam> souvenirs – сувениры по полису;
 */
class Policy extends Data
{
    public function __construct(
        public Optional|int $policyID,
        public Optional|int $annexType,
        public Optional|string $annexReason,
        public Optional|int $policyRef,
        public Optional|Action $policyAction,
        public Optional|float $policyTotalPremium,
        public Optional|string $insrType,

        public Optional|int $clientID,
        public Optional|int $agentID,
        public Optional|int $printAction,

        public Optional|string $issueDate,
        public Optional|string $beginDate,
        public Optional|string $endDate,
//        #[DataCollectionOf(PolicyBlanks::class)]
        public Optional|PolicyBlanks $blanks,
        #[DataCollectionOf(People::class)]
        public Optional|DataCollection $insureds,
        #[DataCollectionOf(PolicyObject::class)]
        public Optional|DataCollection $objects,
        #[DataCollectionOf(Payment::class)]
        public Optional|DataCollection $payments,
        public Optional|string $changeDate,
        public Optional|string $policyAttachment,
        #[DataCollectionOf(ObjectParam::class)]
        public Optional|DataCollection $souvenirs,
        //TODO: move to config?
        public Optional|string $tariffRule,
        public Optional|string $paymentType,
        public Optional|string $paymentWay,
        public Optional|int $policyState,
        public Optional|int $policyDuration,
        public Optional|string $policyDimension,
        public Optional|int $policyType,
        public Optional|int $tempEntry,
        public Optional|int $salesChanelID,
        public Optional|int $officeID,
        public Optional|int $changeUserID,
        public Optional|int $annexID = 0,
        public bool $retroactive = false,
        public bool $doNotUseCSDB = false,
        public bool $doNotUse1C = false,
        public bool $customRefound = false,
        public bool $doNotUseArchiveUsedPolicy = false,
        public bool $VerificationBool = false,
        public bool $OnlineBool = false
    ) {
    }
}
