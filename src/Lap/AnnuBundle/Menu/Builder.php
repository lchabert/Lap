<?php
/**
 * PHP Version 5
 *
 * @category Lap
 * @package Menu
 * @author Chabert Loic <chabert.loic.74@gmail.com>
 * @license http://github.com/lolostates/Lap/blob/master/LICENSE
 * @link https://github.com/lolostates/Lap
 *
 * Copyright 2012 Chabert Loic <chabert.loic.74@gmail.com>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License*
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

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

		$menu
				->addChild('Tout le monde',
						array('route' => 'LapAnnuBundle_homepage'));
		$menu
				->addChild('Mon Service',
						array('route' => 'LapAnnuBundle_myService'));
		$menu
				->addChild('Mes favoris',
						array('route' => 'LapAnnuBundle_showFavorite'));
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
	public function NotConnectedMainMenu(FactoryInterface $factory,
			array $options) {
		$menu = $factory->createItem('root');
		$menu->setChildrenAttribute('class', 'nav nav-list');

		$menu
				->addChild('Tout le monde',
						array('route' => 'LapAnnuBundle_homepage'));

		return $menu;
	}

}

?>
