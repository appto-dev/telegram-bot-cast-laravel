<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * BotShortDescription
 *
 * This object represents the bot's short description.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BotShortDescription extends Data implements TypeInterface
{
    public function __construct(
        /** The bot's short description */
        public string $short_description,
    ) {
    }
}
