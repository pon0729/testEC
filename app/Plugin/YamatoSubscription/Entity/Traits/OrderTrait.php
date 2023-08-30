<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\YamatoSubscription\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Plugin\YamatoSubscription\Entity\YamatoSubsHistory;
use Eccube\Annotation\EntityExtension;

/**
  * @EntityExtension("Eccube\Entity\Order")
 */
trait OrderTrait
{
	/**
	 * @var \Plugin\YamatoSubscription\Entity\YamatoSubsHistory
	 *
	 * @ORM\OneToMany(targetEntity="\Plugin\YamatoSubscription\Entity\YamatoSubsHistory", mappedBy="Order", cascade={"persist"})
	 * @ORM\JoinColumns({
	 *   @ORM\JoinColumn(name="id", referencedColumnName="order_id")
	 * })
	 */
	private $YamatoSubsHistory;   

	/**
	 * Get YamatoSubsHistory.
	 *
	 * @return \Plugin\YamatoSubscription\Entity\YamatoSubsHistory|null
	 */
	public function YamatoSubsHistory()
	{
		return $this->YamatoSubsHistory;
	}
}
