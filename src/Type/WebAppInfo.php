<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes a <a href="/bots/webapps">Web App</a>.
 *
 * @version Telegram Bot API 7.10
 */
final class WebAppInfo extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * An HTTPS URL of a Web App to be opened with additional data as specified in
         * Initializing Web Apps
         * @var string
         */
        public string $url,
    ) {
    }
}
