<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * InlineKeyboardMarkup
 *
 * This object represents an inline keyboard that appears right next to the message
 * it belongs to.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class InlineKeyboardMarkup extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * Array of button rows, each represented by an Array of
         * InlineKeyboardButton objects
         * @var array<InlineKeyboardButton>
         */
        public array $inline_keyboard,
    ) {
    }
}
