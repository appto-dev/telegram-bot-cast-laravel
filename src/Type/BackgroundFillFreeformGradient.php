<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The background is a freeform gradient that rotates after every message in the
 * chat.
 */
final class BackgroundFillFreeformGradient extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background fill, always "freeform_gradient"
         * @var string
         */
        public string $type,
        /**
         * A list of the 3 or 4 base colors that are used to generate the freeform gradient
         * in the RGB24 format
         * @var int[]
         */
        public array $colors,
    ) {
    }
}
