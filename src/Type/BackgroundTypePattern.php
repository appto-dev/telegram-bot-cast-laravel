<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The background is a PNG or TGV (gzipped subset of SVG with MIME type
 * "application/x-tgwallpattern") pattern to be combined with the background fill
 * chosen by the user.
 */
final class BackgroundTypePattern extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the background, always "pattern"
         * @var string
         */
        public string $type,
        /**
         * Document with the pattern
         * @var Document
         */
        public Document $document,
        /**
         * The background fill that is combined with the pattern
         * @var BackgroundFill
         */
        public BackgroundFill $fill,
        /**
         * Intensity of the pattern when it is shown above the filled background; 0-100
         * @var int
         */
        public int $intensity,
        /**
         * True, if the background fill must be applied only to the pattern itself. All
         * other pixels are black in this case. For dark themes only
         * @var true
         */
        public ?true $is_inverted,
        /**
         * True, if the background moves slightly when the device is tilted
         * @var true
         */
        public ?true $is_moving,
    ) {
    }
}
