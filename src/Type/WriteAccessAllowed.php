<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class WriteAccessAllowed extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  bool|null  True, if the access was granted after the user accepted an explicit request from a
         * Web App sent by the method requestWriteAccess
         */
        public ?bool $from_request,
        /**
         * @var  string|null  Name of the Web App, if the access was granted when the Web App was launched from
         * a link
         */
        public ?string $web_app_name,
        /**
         * @var  bool|null  True, if the access was granted when the bot was added to the attachment or side
         * menu
         */
        public ?bool $from_attachment_menu,
    ) {
    }
}
