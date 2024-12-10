<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with a user.
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
         * Information about the affiliate that received a commission via this transaction
         * @var AffiliateInfo
         */
        public ?AffiliateInfo $affiliate,
        /**
         * Bot-specified invoice payload
         * @var string
         */
        public ?string $invoice_payload,
        /**
         * The duration of the paid subscription
         * @var int
         */
        public ?int $subscription_period,
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
        /**
         * The gift sent to the user by the bot
         * @var Gift
         */
        public ?Gift $gift,
    ) {
    }
}
