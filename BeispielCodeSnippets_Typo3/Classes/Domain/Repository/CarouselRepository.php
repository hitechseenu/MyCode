<?php
namespace Afm\RswnrwCarousel\Domain\Repository;

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
 * The repository for Carousels
 */
class CarouselRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function initializeObject()
    {
        $this->defaultQuerySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        $this->defaultQuerySettings->setRespectStoragePage(FALSE);
    }
}
