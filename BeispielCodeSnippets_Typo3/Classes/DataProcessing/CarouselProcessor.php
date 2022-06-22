<?php
namespace Afm\RswnrwCarousel\DataProcessing;

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

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * Class for data processing for the content element "My new content element"
 */
class CarouselProcessor implements DataProcessorInterface
{

    /**
     * Process data for the content element "My new content element"
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
       ContentObjectRenderer $cObj,
       array $contentObjectConfiguration,
       array $processorConfiguration,
       array $processedData
    )
    {

        $objectManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $carouselRepository = $objectManager->get('Afm\\RswnrwCarousel\\Domain\\Repository\\CarouselRepository');

        $carousel = $carouselRepository->findOneByParent($processedData['data']['uid']);
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($carousel, 'CarouselProcessor');
        $processedData['carousel'] = $carousel;

        return $processedData;
    }
}
