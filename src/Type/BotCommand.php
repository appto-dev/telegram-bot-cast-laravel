<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * BotCommand
 *
 * This object represents a bot command.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BotCommand extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * Text of the command; 1-32 characters. Can contain only lowercase
         * English letters, digits and underscores.
         */
        public string $command,
        /** Description of the command; 1-256 characters. */
        public string $description,
    ) {
    }
}
