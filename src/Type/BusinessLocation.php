<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * BusinessLocation
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BusinessLocation extends Dto implements TypeInterface
{
    public function __construct(
        /** Address of the business */
        public string $address,
        /** Location of the business */
        public ?Location $location,
    ) {
    }
}
