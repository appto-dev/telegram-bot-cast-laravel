<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Telegram Passport is a unified authorization method for services that require personal
 * identification. Users can upload their documents once, then instantly share their data with services
 * that require real-world ID (finance, ICOs, etc.). Please see the <a href="/passport">manual</a> for
 * details.
 */
class EncryptedPassportElement extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Element type. One of "personal_details", "passport", "driver_license",
         * "identity_card", "internal_passport", "address", "utility_bill", "bank_statement",
         * "rental_agreement", "passport_registration", "temporary_registration", "phone_number", "email".
         */
        public string $type,
        /**
         * @var  string|null  Base64-encoded encrypted Telegram Passport element data provided by the user;
         * available only for "personal_details", "passport", "driver_license", "identity_card",
         * "internal_passport" and "address" types. Can be decrypted and verified using the accompanying
         * EncryptedCredentials.
         */
        public ?string $data,
        /** @var  string|null  User's verified phone number; available only for "phone_number" type */
        public ?string $phone_number,
        /** @var  string|null  User's verified email address; available only for "email" type */
        public ?string $email,
        /**
         * @var  PassportFile[]|null  Array of encrypted files with documents provided by the user; available
         * only for "utility_bill", "bank_statement", "rental_agreement", "passport_registration" and
         * "temporary_registration" types. Files can be decrypted and verified using the accompanying
         * EncryptedCredentials.
         */
        public ?array $files,
        /**
         * @var  PassportFile|null  Encrypted file with the front side of the document, provided by the user;
         * available only for "passport", "driver_license", "identity_card" and "internal_passport". The file
         * can be decrypted and verified using the accompanying EncryptedCredentials.
         */
        public ?PassportFile $front_side,
        /**
         * @var  PassportFile|null  Encrypted file with the reverse side of the document, provided by the user;
         * available only for "driver_license" and "identity_card". The file can be decrypted and verified
         * using the accompanying EncryptedCredentials.
         */
        public ?PassportFile $reverse_side,
        /**
         * @var  PassportFile|null  Encrypted file with the selfie of the user holding a document, provided by
         * the user; available if requested for "passport", "driver_license", "identity_card" and
         * "internal_passport". The file can be decrypted and verified using the accompanying
         * EncryptedCredentials.
         */
        public ?PassportFile $selfie,
        /**
         * @var  PassportFile[]|null  Array of encrypted files with translated versions of documents provided
         * by the user; available if requested for "passport", "driver_license", "identity_card",
         * "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration"
         * and "temporary_registration" types. Files can be decrypted and verified using the accompanying
         * EncryptedCredentials.
         */
        public ?array $translation,
        /** @var  string  Base64-encoded element hash for using in PassportElementErrorUnspecified */
        public string $hash,
    ) {
    }
}
