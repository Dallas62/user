<?php

namespace spec\Black\Component\User\Application\Specification;

use Black\Component\User\Domain\Model\User;
use Black\Component\User\Domain\Model\UserId;
use PhpSpec\ObjectBehavior;

class UserIsLockedSpecificationSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\User\Application\Specification\UserIsLockedSpecification');
        $this->shouldImplement('Black\DDD\DDDinPHP\Application\Specification\Specification');
    }

    public function it_should_satisfy_the_specification()
    {
        $user = new User(new UserId(1234), 'test', 'password');
        $this->isSatisfiedBy($user)->shouldReturn(false);
    }
}
