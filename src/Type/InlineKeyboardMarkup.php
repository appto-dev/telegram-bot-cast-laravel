<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents an <a href="/bots/features#inline-keyboards">inline
 * keyboard</a> that appears right next to the message it belongs to.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineKeyboardMarkup extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Array of button rows, each represented by an Array of InlineKeyboardButton
         * objects
         * @var array<InlineKeyboardButton[]>
         */
        public array $inline_keyboard,
    ) {
    }
}
