<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichMessage extends Data implements TelegramType
{
    public function __construct(
        /** @var  RichBlock[]  Content of the message */
        public array $blocks,
        /** @var  bool|null  True, if the rich message must be shown right-to-left */
        public ?bool $is_rtl,
    ) {
    }
}
