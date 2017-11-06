<?php
declare(strict_types=1);

namespace Braddle\Register;

interface EmailSender
{

    function sendEmail(string $toEmail, string $toName, string $subject, string $message);
}
