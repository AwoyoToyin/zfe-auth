<?php

/**
 * Description of ProviderInterface
 *
 * @author: Awoyo Oluwatoyin Stephen alias AwoyoToyin <awoyotoyin@gmail.com>
 */
namespace Zfe\User\Provider;

use Zfe\Common\Provider\AbstractProvider;

class UserProvider extends AbstractProvider
{
    protected $entityClass = 'Zfe\User\Entity\User';
}
