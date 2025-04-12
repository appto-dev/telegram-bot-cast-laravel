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
         * Type of the transaction, currently one of "invoice_payment" for payments via
         * invoices, "paid_media_payment" for payments for paid media, "gift_purchase" for
         * gifts sent by the bot, "premium_purchase" for Telegram Premium subscriptions
         * gifted by the bot, "business_account_transfer" for direct transfers from managed
         * business accounts
         * @var string
         */
        public string $transaction_type,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
        /**
         * Information about the affiliate that received a commission via this transaction.
         * Can be available only for "invoice_payment" and "paid_media_payment"
         * transactions.
         * @var AffiliateInfo
         */
        public ?AffiliateInfo $affiliate,
        /**
         * Bot-specified invoice payload. Can be available only for "invoice_payment"
         * transactions.
         * @var string
         */
        public ?string $invoice_payload,
        /**
         * The duration of the paid subscription. Can be available only for
         * "invoice_payment" transactions.
         * @var int
         */
        public ?int $subscription_period,
        /**
         * Information about the paid media bought by the user; for "paid_media_payment"
         * transactions only
         * @var PaidMedia[]
         */
        public ?array $paid_media,
        /**
         * Bot-specified paid media payload. Can be available only for "paid_media_payment"
         * transactions.
         * @var string
         */
        public ?string $paid_media_payload,
        /**
         * The gift sent to the user by the bot; for "gift_purchase" transactions only
         * @var Gift
         */
        public ?Gift $gift,
        /**
         * Number of months the gifted Telegram Premium subscription will be active for;
         * for "premium_purchase" transactions only
         * @var int
         */
        public ?int $premium_subscription_duration,
    ) {
    }
}
