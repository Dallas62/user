<?php

namespace spec\Black\Component\User\Infrastructure\CQRS\Handler;

use Black\Component\User\Domain\Model\UserId;
use Black\Component\User\Infrastructure\CQRS\Command\ConnectUserCommand;
use Black\Component\User\Infrastructure\Doctrine\UserManager;
use PhpSpec\ObjectBehavior;

class ConnectUserHandlerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Infrastructure\CQRS\Handler\ConnectUserHandler');
        $this->shouldImplement('Black\DDD\CQRSinPHP\Infrastructure\CQRS\CommandHandler');
    }

    public function let(UserManager $userManager)
    {
        $this->beConstructedWith($userManager);
    }

    public function it_should_handle_a_command()
    {
        $command = new ConnectUserCommand(new UserId('1'));

        $this->handle($command);
    }
}
