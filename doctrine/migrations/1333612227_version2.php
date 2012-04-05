<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->changeColumn('mailbox', 'access_restriction', 'string', '100', array(
             'default' => 'ALL',
             'notnull' => '1',
             ));

         Doctrine_Query::create()->update('Mailbox')->set('access_restriction',"'ALL'")->where('access_restriction = ?', "BOTH" )->execute();
         Doctrine_Query::create()->update('Mailbox')->set('access_restriction',"'imap'")->where('access_restriction = ?', "IMAP" )->execute();
         Doctrine_Query::create()->update('Mailbox')->set('access_restriction',"'pop3'")->where('access_restriction = ?', "POP3" )->execute();
    }

    public function down()
    {
    }
}