<?php

namespace Lap\AnnuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Description of SearchType
 *
 * @author lolostates
 */
class SearchType extends AbstractType{
    
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('keyword', 'text', array('label' => 'Recherche'));
            
    }

    public function getName()
    {
        return 'Lap_annubundle_searchtype';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Lap\AnnuBundle\Entity\Search',
        );
    }
}

?>
