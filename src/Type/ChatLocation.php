<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * ChatLocation
 *
 * Represents a location to which a chat is connected.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatLocation extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * The location to which the supergroup is connected. Can't be a live
         * location.
         */
        public Location $location,
        /** Location address; 1-64 characters, as defined by the chat owner */
        public string $address,
    ) {
    }
}
