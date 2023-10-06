<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use App\Containers\User\Models\User;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class People extends Data
{
    public function __construct(
        public string $bin,
        #[DataCollectionOf(Address::class)]
        public DataCollection|Optional $addresses,
        #[DataCollectionOf(PeopleDocument::class)]
        public DataCollection|Optional $documents,
        public array|Optional $contacts = [],
        public int|Optional $manID = 0,
        public string|Optional $rnn = '',
        public string|Optional $activityKindID = '',
        public string|Optional $companyOccupationID = '',
        public int|Optional $manComp = 1,
        public string|Optional $title = '',
        public string|Optional $fName = '',
        public string|Optional $sName = '',
        public string|Optional $lName = '',
        public int|Optional $sex = 1,
        public string|Optional $birthDate = '',
        public string|Optional $foreigner = 'N',
        public string|Optional $foreignerContryID = '',
        public bool|Optional $doNotUseCSDB = true,
        public bool|Optional $Beneficiary = false,
        public bool|Optional $ForeignPublicOfficials = false,
        public bool|Optional $VerificationBool = true,

    ) {
        $this->doNotUseCSDB = config('services.soap.insis.no_csdb');
    }

    public static function fromModel(User $model): self
    {
        return new self(
            bin: $model->iin,
            addresses: Address::collection([$model->address]),
            documents: PeopleDocument::collection($model->documents),
            contacts: [
                [
                    'ParamKey' => 'MOBILE',
                    'ParamValue' => $model->phone,
                ],
                [
                    'ParamKey' => 'EMAIL',
                    'ParamValue' => $model->email,
                ],
            ],
            manID: $model->insis_man_id,
            title: $model->fullName,
            fName: $model->first_name,
            sName: $model->middle_name ?? '',
            lName: $model->last_name,
            sex: $model->gender == 'male' ? 1 : 2,
            birthDate: $model->birth_date->toISOString(),
        );
    }

    /**
     * Long ManID – идентификатор клиента;
     * String RNN – РНН клиента;
     * String BIN – ИИН/БИН клиента;
     * String ActivityKindID – идентификатор Вида экономической деятельности (справочник ACTIVITYKINDS);
     * String CompanyOccupationID – идентификатор кода сектора экономики (справочник COMPANYOCCUPATIONS);
     * Integer ManComp – тип клиента (1 – физическое лицо, 2 - юридическое лицо, 3 – ИП/КХ);
     * List<ObjectParam> contacts – массив контактов;
     * List<Address> addresses – массив адресов;
     * List<PeopleDocument> documents;
     * String Title – наименование клиента;
     * String FName - имя;
     * String SName - фамилия;
     * String LName - отчество;
     * Integer Sex – пол (1-мужской, 2 - женский);
     * Date BirthDate – дата рождения;
     * String Foreigner - резидентство;
     * String ForeignerContryID – идентификатор страны резидентства (справочник LIST_COUNTRY);
     * List<ObjectParam> variableParams – массив переменных значений;
     */
}
