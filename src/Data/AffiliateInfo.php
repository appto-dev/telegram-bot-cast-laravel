<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Contains information about the affiliate that received a commission via this transaction.
 */
final class AffiliateInfo extends Data implements TelegramBotData
{
    public function __construct(
        /** The bot or the user that received an affiliate commission if it was received by a bot or a user */
        public ?User $affiliate_user,
        /** The chat that received an affiliate commission if it was received by a chat */
        public ?Chat $affiliate_chat,
        /**
         * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred
         * users
         */
        public int $commission_per_mille,
        /**
         * Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for
         * refunds
         */
        public int $amount,
        /**
         * The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be
         * negative for refunds
         */
        public ?int $nanostar_amount,
    ) {
    }
}
