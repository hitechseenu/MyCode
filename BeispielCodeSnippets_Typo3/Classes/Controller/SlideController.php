<?php
namespace Afm\RswnrwCarousel\Controller;

/***
 *
 * This file is part of the "Radschnellwege NRW Homepage Carousel" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Seenu Gudipati <sg@afm-koeln.de>, Atelier für mediengestaltung
 *
 ***/

/**
 * SlideController
 */
class SlideController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * slideRepository
     *
     * @var \Afm\RswnrwCarousel\Domain\Repository\SlideRepository
     * @inject
     */
    protected $slideRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $slides = $this->slideRepository->findAll();
        $this->view->assign('slides', $slides);
    }
}
