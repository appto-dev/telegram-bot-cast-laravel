<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The withdrawal is in progress.
 *
 * @version Telegram Bot API 7.10
 */
final class RevenueWithdrawalStatePending extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the state, always "pending"
         * @var string
         */
        public string $type,
    ) {
    }
}
