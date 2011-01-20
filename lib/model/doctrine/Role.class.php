<?php

/**
 * Role
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    projecttimeboxx
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Role extends BaseRole
{
     public function hasCredential($credential_name) {
        $credentials = $this->getCredentials();

        foreach ($credentials as $credential) {
            if (strcasecmp($credential_name, $credential->getName()) == 0) {
                return true;
            }
        }

        return false;
    }
}