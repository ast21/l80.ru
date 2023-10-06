<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use App\Containers\User\Models\IdentityDocument;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class PeopleDocument extends Data
{
    public function __construct(
        public string $docType = 'IC',
        public string $docIssueDate = '',
        public string|Optional $docEndDate = '',
        public string|Optional $docIssueOrg = '',
        public string $docNumber = '',
    ) {
    }

    public static function fromModel(IdentityDocument $model): self
    {
        return new self(
            docType: $model->type->key,
            docIssueDate: $model->issue_date->toISOString(),
            docEndDate: $model->expiration_date ? $model->expiration_date->toISOString() : '',
            docIssueOrg: $model->issuer ?? '',
            docNumber: $model->number,
        );
    }

    /**
     * String DocType – тип документа (справочник DOCUMENTTYPES);
     * Date DocIssueDate – дата выдачи документа;
     * Date DocEndDate – дата окончания срока действия документа;
     * String DocIssueOrg – организация выдавшая документ;
     * String DocNumber – номер документа;
     * byte[] DocAttachment – скан копия документа; // пока не используется
     */
}
