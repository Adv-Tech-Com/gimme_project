<?php

/**
 * Overload of CWebUser to set some more methods.
 */
class WebUserExtended extends CWebUser
{
        public function getIsAdmin()
        {
        	return ( $this->getName() < 2 );
        }

        public function getIsCompany()
        {
        	return ( $this->getName() < 3 );
        }
        
        public function getIsManager()
        {
        	return ( $this->getName() < 4 );
        }
        
        public function getIsEmployee()
        {
        	return ( $this->getName() < 5 );
        }
}