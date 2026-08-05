<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class AffiliateInfo extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  User|null  The bot or the user that received an affiliate commission if it was received by a
         * bot or a user
         */
        public ?User $affiliate_user,
        /** @var  Chat|null  The chat that received an affiliate commission if it was received by a chat */
        public ?Chat $affiliate_chat,
        /**
         * @var  int  The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars
         * received by the bot from referred users
         */
        public int $commission_per_mille,
        /**
         * @var  int  Integer amount of Telegram Stars received by the affiliate from the transaction, rounded
         * to 0; can be negative for refunds
         */
        public int $amount,
        /**
         * @var  int|null  The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from
         * -999999999 to 999999999; can be negative for refunds
         */
        public ?int $nanostar_amount,
    ) {
    }
}
