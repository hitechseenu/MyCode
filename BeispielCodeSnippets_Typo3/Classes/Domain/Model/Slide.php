<?php
namespace Afm\RswnrwCarousel\Domain\Model;

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
 * Slide
 */
class Slide extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * menuTitle
     *
     * @var string
     */
    protected $menuTitle = '';

    /**
     * menuCaption
     *
     * @var string
     */
    protected $menuCaption = '';

    /**
     * link
     *
     * @var string
     */
    protected $link = '';

    /**
     * backgroundImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $backgroundImage = null;

    /**
     * Returns the menuTitle
     *
     * @return string $menuTitle
     */
    public function getMenuTitle()
    {
        return $this->menuTitle;
    }

    /**
     * Sets the menuTitle
     *
     * @param string $menuTitle
     * @return void
     */
    public function setMenuTitle($menuTitle)
    {
        $this->menuTitle = $menuTitle;
    }

    /**
     * Returns the menuCaption
     *
     * @return string $menuCaption
     */
    public function getMenuCaption()
    {
        return $this->menuCaption;
    }

    /**
     * Sets the menuCaption
     *
     * @param string $menuCaption
     * @return void
     */
    public function setMenuCaption($menuCaption)
    {
        $this->menuCaption = $menuCaption;
    }

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * Returns the backgroundImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $backgroundImage
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    /**
     * Sets the backgroundImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $backgroundImage
     * @return void
     */
    public function setBackgroundImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;
    }
}
