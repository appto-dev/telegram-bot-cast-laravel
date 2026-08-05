<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\PassportElementError;

/**
 * Telegram Passport is a unified authorization method for services that require personal
 * identification. Users can upload their documents once, then instantly share their data with services
 * that require real-world ID (finance, ICOs, etc.). Please see the <a href="/passport">manual</a> for
 * details.
 */
interface TelegramPassport
{
    /**
     * Informs a user that some of the Telegram Passport elements they provided contains errors. The user
     * will not be able to re-submit their Passport to you until the errors are fixed (the contents of the
     * field for which you returned the error must change). Returns <em>True</em> on success.
     * Use this if the data submitted by the user doesn't satisfy the standards your service requires for
     * any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan
     * shows evidence of tampering, etc. Supply some details in the error message to make sure the user
     * knows how to correct the issues.
     *
     * @param  int $user_id User identifier
     * @param  PassportElementError[] $errors A JSON-serialized Array describing the errors
     *
     * @return true
     */
    public function setPassportDataErrors(int $user_id, array $errors): true;
}
