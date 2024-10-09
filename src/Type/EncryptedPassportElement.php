<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by
 * the user.
 *
 * @version Telegram Bot API 7.10
 */
final class EncryptedPassportElement extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Element type. One of "personal_details", "passport", "driver_license",
         * "identity_card", "internal_passport", "address", "utility_bill",
         * "bank_statement", "rental_agreement", "passport_registration",
         * "temporary_registration", "phone_number", "email".
         * @var string
         */
        public string $type,
        /**
         * Base64-encoded encrypted Telegram Passport element data provided by the user;
         * available only for "personal_details", "passport", "driver_license",
         * "identity_card", "internal_passport" and "address" types. Can be decrypted and
         * verified using the accompanying EncryptedCredentials.
         * @var string
         */
        public ?string $data,
        /**
         * User's verified phone number; available only for "phone_number" type
         * @var string
         */
        public ?string $phone_number,
        /**
         * User's verified email address; available only for "email" type
         * @var string
         */
        public ?string $email,
        /**
         * Array of encrypted files with documents provided by the user; available only for
         * "utility_bill", "bank_statement", "rental_agreement", "passport_registration"
         * and "temporary_registration" types. Files can be decrypted and verified using
         * the accompanying EncryptedCredentials.
         * @var array<PassportFile>
         */
        public ?PassportFile $files,
        /**
         * Encrypted file with the front side of the document, provided by the user;
         * available only for "passport", "driver_license", "identity_card" and
         * "internal_passport". The file can be decrypted and verified using the
         * accompanying EncryptedCredentials.
         * @var PassportFile
         */
        public ?PassportFile $front_side,
        /**
         * Encrypted file with the reverse side of the document, provided by the user;
         * available only for "driver_license" and "identity_card". The file can be
         * decrypted and verified using the accompanying EncryptedCredentials.
         * @var PassportFile
         */
        public ?PassportFile $reverse_side,
        /**
         * Encrypted file with the selfie of the user holding a document, provided by the
         * user; available if requested for "passport", "driver_license", "identity_card"
         * and "internal_passport". The file can be decrypted and verified using the
         * accompanying EncryptedCredentials.
         * @var PassportFile
         */
        public ?PassportFile $selfie,
        /**
         * Array of encrypted files with translated versions of documents provided by the
         * user; available if requested for "passport", "driver_license", "identity_card",
         * "internal_passport", "utility_bill", "bank_statement", "rental_agreement",
         * "passport_registration" and "temporary_registration" types. Files can be
         * decrypted and verified using the accompanying EncryptedCredentials.
         * @var array<PassportFile>
         */
        public ?PassportFile $translation,
        /**
         * Base64-encoded element hash for using in PassportElementErrorUnspecified
         * @var string
         */
        public string $hash,
    ) {
    }
}
