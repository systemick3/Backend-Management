<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 19/01/15
 * Time: 20:42
 */

namespace Intechnology\BackendManagementBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


class User extends BaseUser
{
    protected $id;

    protected $username;

    protected $password;

    public function __construct()
    {
      parent::__construct();
      // your own logic
    }
} 