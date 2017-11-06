<?php
declare(strict_types=1);

namespace Braddle\Register;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class CustomerRegisterTest extends TestCase
{
    public function testCustomerIsEmailedWhenRegistrationIsSuccessful()
    {
        $customerRegister = new CustomerRegister($spyEmailSender);
        $customer = $customerRegister->registerCustomer('Mark', 'Bradley', 'mark@testing.com');

        $this->assertEquals('Mark', $customer->getFirstName());
        $this->assertEquals('Bradley', $customer->getLastName());
        $this->assertEquals('mark@testing.com', $customer->getEmail());

        m::close();
    }

    public function testCustomerIsNotEmailsWhenEmailAddressIsInvalid()
    {
        $this->expectException(EmailInvalidException::class);

        $customerRegister = new CustomerRegister($spyEmailSender);
        $customerRegister->registerCustomer('Mark', 'Bradley', 'NOT AN EMAIL');

        m::close();
    }
}
