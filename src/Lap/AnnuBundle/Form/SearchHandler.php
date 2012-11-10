<?php

namespace Lap\AnnuBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Lap\AnnuBundle\Entity\Search;

/**
 * Description of SearchHandler
 *
 * @author lolostates
 */
class SearchHandler {
    protected $form;
    protected $request;
    
    public function __construct(Form $form, Request $request){
        $this->form    = $form;
        $this->request = $request;
    }
    
     public function process()
    {
        if( $this->request->getMethod() == 'POST' )
        {
            $this->form->bindRequest($this->request);

            if( $this->form->isValid() )
            {
                $keyword = $this->form->getData();

                return $keyword;
            }
        }

        return false;
    }
}

?>
