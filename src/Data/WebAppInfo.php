<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a <a href="https://core.telegram.org/bots/webapps">Web App</a>.
 */
final class WebAppInfo extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * An HTTPS URL of a Web App to be opened with additional data as specified in
         * Initializing Web Apps
         */
        public string $url,
    ) {
    }
}
