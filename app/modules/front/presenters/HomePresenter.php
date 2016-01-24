<?php

namespace App\Modules\Front;

use App\Model\ORM\Addon\Addon;
use Nextras\Orm\Collection\ICollection;

final class HomePresenter extends BaseAddonPresenter
{

    /** @var ICollection|Addon[] */
    private $newest;

    /** @var ICollection|Addon[] */
    private $lastActive;

    /** @var ICollection|Addon[] */
    private $mostPopular;

    /**
     * Find addons by criteria
     */
    public function actionDefault()
    {
        $this->newest = $this->addonFacade->findNewest(5);
        $this->lastActive = $this->addonFacade->findByLastActivity(5);
    }

    /**
     * CONTROLS ****************************************************************
     */

    /**
     * @return Controls\AddonList\AddonList
     */
    protected function createComponentNewest()
    {
        return $this->createAddonListControl($this->newest);
    }

    /**
     * @return Controls\AddonList\AddonList
     */
    protected function createComponentLastActive()
    {
        return $this->createAddonListControl($this->lastActive);
    }

}
