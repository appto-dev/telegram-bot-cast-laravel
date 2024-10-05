<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * WebAppInfo
 *
 * Describes a Web App.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class WebAppInfo extends Data implements TypeInterface
{
    public function __construct(
        /**
         * An HTTPS URL of a Web App to be opened with additional data as
         * specified in Initializing Web Apps
         */
        public string $url,
    ) {
    }
}
