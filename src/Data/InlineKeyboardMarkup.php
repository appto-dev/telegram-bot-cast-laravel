<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReplyMarkup;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a> that
 * appears right next to the message it belongs to.
 */
final class InlineKeyboardMarkup extends Data implements TelegramBotData, ReplyMarkup
{
    public function __construct(
        /**
         * Array of button rows, each represented by an Array of InlineKeyboardButton objects
         * @var array<array<InlineKeyboardButton>>
         */
        public array $inline_keyboard,
    ) {
    }
}
