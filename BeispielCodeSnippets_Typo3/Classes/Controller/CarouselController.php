<?php
namespace Afm\RswnrwCarousel\Controller;

/***
 *
 * This file is part of the "Homepage Carousel" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Seenu Gudipati <sg@afm-koeln.de>, Atelier für mediengestaltung
 *
 ***/

/**
 * CarouselController
 */
class CarouselController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * carouselRepository
     *
     * @var \Afm\RswnrwCarousel\Domain\Repository\CarouselRepository
     * @inject
     */
    protected $carouselRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $carousels = $this->carouselRepository->findAll();
        $this->view->assign('carousels', $carousels);
    }
}
