<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a withdrawal transaction to the Telegram Ads platform.
 *
 * @version Telegram Bot API 7.11
 */
final class TransactionPartnerTelegramAds extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "telegram_ads"
         * @var string
         */
        public string $type,
    ) {
    }
}
