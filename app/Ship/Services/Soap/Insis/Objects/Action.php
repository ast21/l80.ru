<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

/**
 * Long policyID - идентификатор полиса;
 * Long actionID - идентификатор акции;
 * String actionName - наименование акции;
 * Double actionGiftAmount - подарочная стоимость;
 * List<AditionalAction> aditionalActions - массив дополнительных данных по акции;
 * List<PolicyBlanks> blanks - массив бланков по акции;
 * Поля проверок:
 * boolean discount - доступна ли акция для льготников;
 * Integer duration - срок на который должен быть заключен полис для действия акции;
 */
class Action extends Data
{
    public function __construct(
        public Optional|int $policyID,
        public Optional|int $actionID,
        public Optional|string $actionName,
        public Optional|float $actionGiftAmount,
        #[DataCollectionOf(AditionalAction::class)]
        public Optional|DataCollection $aditionalActions,
        #[DataCollectionOf(PolicyBlanks::class)]
        public Optional|DataCollection $blanks,
        public Optional|bool $discount,
        public Optional|int $duration,
    ) {
    }
}
