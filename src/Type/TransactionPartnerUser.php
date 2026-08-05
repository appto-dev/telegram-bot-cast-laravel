<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class TransactionPartnerUser extends Data implements TelegramType, TransactionPartner
{
    public function __construct(
        /** @var  string  Type of the transaction partner, always "user" */
        public string $type,
        /**
         * @var  string  Type of the transaction, currently one of "invoice_payment" for payments via invoices,
         * "paid_media_payment" for payments for paid media, "gift_purchase" for gifts sent by the bot,
         * "premium_purchase" for Telegram Premium subscriptions gifted by the bot, "business_account_transfer"
         * for direct transfers from managed business accounts
         */
        public string $transaction_type,
        /** @var  User  Information about the user */
        public User $user,
        /**
         * @var  AffiliateInfo|null  Information about the affiliate that received a commission via this
         * transaction. Can be available only for "invoice_payment" and "paid_media_payment" transactions.
         */
        public ?AffiliateInfo $affiliate,
        /**
         * @var  string|null  Bot-specified invoice payload. Can be available only for "invoice_payment"
         * transactions.
         */
        public ?string $invoice_payload,
        /**
         * @var  int|null  The duration of the paid subscription. Can be available only for "invoice_payment"
         * transactions.
         */
        public ?int $subscription_period,
        /**
         * @var  PaidMedia[]|null  Information about the paid media bought by the user; for
         * "paid_media_payment" transactions only
         */
        public ?array $paid_media,
        /**
         * @var  string|null  Bot-specified paid media payload. Can be available only for "paid_media_payment"
         * transactions.
         */
        public ?string $paid_media_payload,
        /** @var  Gift|null  The gift sent to the user by the bot; for "gift_purchase" transactions only */
        public ?Gift $gift,
        /**
         * @var  int|null  Number of months the gifted Telegram Premium subscription will be active for; for
         * "premium_purchase" transactions only
         */
        public ?int $premium_subscription_duration,
    ) {
    }
}
