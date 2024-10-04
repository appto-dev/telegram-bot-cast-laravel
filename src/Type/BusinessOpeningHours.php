<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * BusinessOpeningHours
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BusinessOpeningHours extends Dto implements TypeInterface
{
    public function __construct(
        /** Unique name of the time zone for which the opening hours are defined */
        public string $time_zone_name,
        /**
         * List of time intervals describing business opening hours
         * @var array<BusinessOpeningHoursInterval>
         */
        public array $opening_hours,
    ) {
    }
}
