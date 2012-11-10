<?php

namespace Lap\AnnuBundle\Menu;

/**
 * Description of Builder
 *
 * @author lolostates
 */
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    /**
     * Generate main menu on the left site of webpage. Use KnpMenuBundle 
     * to generate this. Manage current page to set active on html attribute.
     * This method generate menu when user is loggedin.
     * @param FactoryInterface $factory
     * @param array $options
     * @return type 
     */
    public function connectedMainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-list');

        $menu->addChild('Tout le monde', array('route' => 'LapAnnuBundle_homepage'));
        $menu->addChild('Mon Service', array('route' => 'LapAnnuBundle_myService'));
        $menu->addChild('Mes favoris', array('route' => 'LapAnnuBundle_showFavorite'));
        return $menu;
    }

     /**
     * Generate main menu on the left site of webpage. Use KnpMenuBundle 
     * to generate this. Manage current page to set active on html attribute.
     * This method generate menu when user is no logged-in.
     * @param FactoryInterface $factory
     * @param array $options
     * @return type 
     */
    public function NotConnectedMainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-list');

        $menu->addChild('Tout le monde', array('route' => 'LapAnnuBundle_homepage'));

        return $menu;
    }

}

?>
