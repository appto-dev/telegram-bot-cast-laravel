<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * BusinessIntro
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BusinessIntro extends Data implements TypeInterface
{
    public function __construct(
        /** Title text of the business intro */
        public ?string $title,
        /** Message text of the business intro */
        public ?string $message,
        /** Sticker of the business intro */
        public ?Sticker $sticker,
    ) {
    }
}
