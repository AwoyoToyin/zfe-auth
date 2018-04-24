<?php

/**
 * Description of ProviderInterface
 *
 * @author: Awoyo Oluwatoyin Stephen alias AwoyoToyin <awoyotoyin@gmail.com>
 */
namespace Zfe\Auth\Provider;

use Zfe\Common\Provider\AbstractProvider;

class UserProvider extends AbstractProvider
{
    protected $entityClass = 'Zfe\Auth\Entity\User';
}
