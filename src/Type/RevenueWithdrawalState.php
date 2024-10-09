<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object describes the state of a revenue withdrawal operation. Currently, it
 * can be one of
 *  - <a href="#revenuewithdrawalstatepending">RevenueWithdrawalStatePending</a>
 *  - <a
 * href="#revenuewithdrawalstatesucceeded">RevenueWithdrawalStateSucceeded</a>
 *  - <a href="#revenuewithdrawalstatefailed">RevenueWithdrawalStateFailed</a>
 *
 * @version Telegram Bot API 7.10
 */
final class RevenueWithdrawalState extends Data implements TelegramTypeContract
{
}
