<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with a user.
 *
 * @version Telegram Bot API 7.10
 */
final class TransactionPartnerUser extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "user"
         * @var string
         */
        public string $type,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
        /**
         * Bot-specified invoice payload
         * @var string
         */
        public ?string $invoice_payload,
        /**
         * Information about the paid media bought by the user
         * @var PaidMedia[]
         */
        public ?array $paid_media,
        /**
         * Bot-specified paid media payload
         * @var string
         */
        public ?string $paid_media_payload,
    ) {
    }
}
