<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Interfaces\TransactionPartner;
use Spatie\LaravelData\Data;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 */
final class TransactionPartnerTelegramAds extends Data implements TelegramBotData, TransactionPartner
{
    public function __construct(
        /** Type of the transaction partner, always "telegram_ads" */
        public string $type,
    ) {
    }
}
