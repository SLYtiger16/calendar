<?php

declare(strict_types=1);
/**
 * Calendar App
 *
 * @author Georg Ehrke
 * @copyright 2019 Georg Ehrke <oc.list@georgehrke.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\Calendar\AppInfo;

use OCA\Calendar\Dashboard\CalendarPanel;
use OCP\AppFramework\App;
use OCP\Dashboard\RegisterPanelEvent;
use OCP\EventDispatcher\IEventDispatcher;

/**
 * Class Application
 *
 * @package OCA\Calendar\AppInfo
 */
class Application extends App {

	/**
	 * @param array $params
	 */
	public function __construct(array $params=[]) {
		parent::__construct('calendar', $params);

		$container = $this->getContainer();

		// TODO: Migrate to new bootstrap once Calendar supports only Nextcloud 20+
		/** @var IEventDispatcher $dispatcher */
		$dispatcher = $container->getServer()->query(IEventDispatcher::class);
		$dispatcher->addListener(RegisterPanelEvent::class, function (RegisterPanelEvent $event) use ($container) {
			$event->registerPanel(CalendarPanel::class);
		});
	}
}
