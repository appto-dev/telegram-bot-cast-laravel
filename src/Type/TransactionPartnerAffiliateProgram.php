<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class TransactionPartnerAffiliateProgram extends Data implements TelegramType, TransactionPartner
{
    public function __construct(
        /** @var  string  Type of the transaction partner, always "affiliate_program" */
        public string $type,
        /** @var  User|null  Information about the bot that sponsored the affiliate program */
        public ?User $sponsor_user,
        /**
         * @var  int  The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by
         * the affiliate program sponsor from referred users
         */
        public int $commission_per_mille,
    ) {
    }
}
