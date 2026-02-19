<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Appto\TelegramBot\Support\Resolvers\PaidMediaResolver;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with a user.
 */
final class TransactionPartnerUser extends Data implements TelegramBotData, TransactionPartner
{
    public function __construct(
        /** Type of the transaction partner, always "user" */
        public string $type,
        /**
         * Type of the transaction, currently one of "invoice_payment" for payments via invoices, "paid_media_payment" for payments
         * for paid media, "gift_purchase" for gifts sent by the bot, "premium_purchase" for Telegram Premium subscriptions gifted
         * by the bot, "business_account_transfer" for direct transfers from managed business accounts
         */
        public string $transaction_type,
        /** Information about the user */
        public User $user,
        /**
         * Information about the affiliate that received a commission via this transaction. Can be available only for
         * "invoice_payment" and "paid_media_payment" transactions.
         */
        public ?AffiliateInfo $affiliate,
        /** Bot-specified invoice payload. Can be available only for "invoice_payment" transactions. */
        public ?string $invoice_payload,
        /** The duration of the paid subscription. Can be available only for "invoice_payment" transactions. */
        public ?int $subscription_period,
        /**
         * Information about the paid media bought by the user; for "paid_media_payment" transactions only
         * @var array<PaidMedia>
         */
        public ?array $paid_media,
        /** Bot-specified paid media payload. Can be available only for "paid_media_payment" transactions. */
        public ?string $paid_media_payload,
        /** The gift sent to the user by the bot; for "gift_purchase" transactions only */
        public ?Gift $gift,
        /** Number of months the gifted Telegram Premium subscription will be active for; for "premium_purchase" transactions only */
        public ?int $premium_subscription_duration,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['paid_media']) || !$properties['paid_media']) {
            return $properties;
        }

        $properties['paid_media'] = (new PaidMediaResolver())
            ->resolveCollection($properties['paid_media']);

        return $properties;
    }
}
