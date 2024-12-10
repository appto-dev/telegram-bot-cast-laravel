<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the source of a transaction, or its recipient for outgoing
 * transactions. Currently, it can be one of
 *  - <a href="#transactionpartneruser">TransactionPartnerUser</a>
 *  - <a
 * href="#transactionpartneraffiliateprogram">TransactionPartnerAffiliateProgram</a>
 *  - <a href="#transactionpartnerfragment">TransactionPartnerFragment</a>
 *  - <a href="#transactionpartnertelegramads">TransactionPartnerTelegramAds</a>
 *  - <a href="#transactionpartnertelegramapi">TransactionPartnerTelegramApi</a>
 *  - <a href="#transactionpartnerother">TransactionPartnerOther</a>
 */
final class TransactionPartner extends Data implements TelegramTypeInterface
{
}
