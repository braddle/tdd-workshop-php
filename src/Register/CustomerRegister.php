<?php
declare(strict_types=1);

namespace Braddle\Register;

class CustomerRegister
{

    private $emailSender;

    public function __construct(EmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function registerCustomer(string $firstName, string $lastName, string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new EmailInvalidException();
        }

        $customer = new Customer($firstName, $lastName, $email);

        $this->emailSender->sendEmail(
            $email,
            $firstName,
            'Welcome',
            'Hi, We are so please you registered'
        );

        return $customer;
    }
}
