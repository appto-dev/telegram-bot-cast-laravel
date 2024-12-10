<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a <a href="/bots/webapps">Web App</a>.
 */
final class WebAppInfo extends Data implements TelegramTypeInterface
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
