<?php
namespace Afm\RswnrwCarousel\Domain\Model;

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
 * Carousel
 */
class Carousel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * link0
     *
     * @var string
     */
    protected $link0 = '';

    /**
     * link1
     *
     * @var string
     */
    protected $link1 = '';

    /**
     * link2
     *
     * @var string
     */
    protected $link2 = '';

    /**
     * link3
     *
     * @var string
     */
    protected $link3 = '';

    /**
     * backgroundImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $backgroundImage = null;

    /**
     * parent
     *
     * @var int
     */
    protected $parent = 0;

    /**
     * slides
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Afm\RswnrwCarousel\Domain\Model\Slide>
     * @cascade remove
     */
    protected $slides = null;

    /**
     * link0Text
     *
     * @var string
     */
    protected $link0Text = '';

    /**
     * link1Text
     *
     * @var string
     */
    protected $link1Text = '';

    /**
     * link2Text
     *
     * @var string
     */
    protected $link2Text = '';

    /**
     * link3Text
     *
     * @var string
     */
    protected $link3Text = '';

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->slides = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the link0
     *
     * @return string $link0
     */
    public function getLink0()
    {
        return $this->link0;
    }

    /**
     * Sets the link0
     *
     * @param string $link0
     * @return void
     */
    public function setLink0($link0)
    {
        $this->link0 = $link0;
    }

    /**
     * Returns the link1
     *
     * @return string $link1
     */
    public function getLink1()
    {
        return $this->link1;
    }

    /**
     * Sets the link1
     *
     * @param string $link1
     * @return void
     */
    public function setLink1($link1)
    {
        $this->link1 = $link1;
    }

    /**
     * Returns the link2
     *
     * @return string $link2
     */
    public function getLink2()
    {
        return $this->link2;
    }

    /**
     * Sets the link2
     *
     * @param string $link2
     * @return void
     */
    public function setLink2($link2)
    {
        $this->link2 = $link2;
    }

    /**
     * Returns the link3
     *
     * @return string $link3
     */
    public function getLink3()
    {
        return $this->link3;
    }

    /**
     * Sets the link3
     *
     * @param string $link3
     * @return void
     */
    public function setLink3($link3)
    {
        $this->link3 = $link3;
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

    /**
     * Adds a Slide
     *
     * @param \Afm\RswnrwCarousel\Domain\Model\Slide $slide
     * @return void
     */
    public function addSlide(\Afm\RswnrwCarousel\Domain\Model\Slide $slide)
    {
        $this->slides->attach($slide);
    }

    /**
     * Removes a Slide
     *
     * @param \Afm\RswnrwCarousel\Domain\Model\Slide $slideToRemove The Slide to be removed
     * @return void
     */
    public function removeSlide(\Afm\RswnrwCarousel\Domain\Model\Slide $slideToRemove)
    {
        $this->slides->detach($slideToRemove);
    }

    /**
     * Returns the slides
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Afm\RswnrwCarousel\Domain\Model\Slide> $slides
     */
    public function getSlides()
    {
        return $this->slides;
    }

    /**
     * Sets the slides
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Afm\RswnrwCarousel\Domain\Model\Slide> $slides
     * @return void
     */
    public function setSlides(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $slides)
    {
        $this->slides = $slides;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the parent
     *
     * @return int $parent
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the parent
     *
     * @param int $parent
     * @return void
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Returns the link0Text
     *
     * @return string $link0Text
     */
    public function getLink0Text()
    {
        return $this->link0Text;
    }

    /**
     * Sets the link0Text
     *
     * @param string $link0Text
     * @return void
     */
    public function setLink0Text($link0Text)
    {
        $this->link0Text = $link0Text;
    }

    /**
     * Returns the link1Text
     *
     * @return string $link1Text
     */
    public function getLink1Text()
    {
        return $this->link1Text;
    }

    /**
     * Sets the link1Text
     *
     * @param string $link1Text
     * @return void
     */
    public function setLink1Text($link1Text)
    {
        $this->link1Text = $link1Text;
    }

    /**
     * Returns the link2Text
     *
     * @return string $link2Text
     */
    public function getLink2Text()
    {
        return $this->link2Text;
    }

    /**
     * Sets the link2Text
     *
     * @param string $link2Text
     * @return void
     */
    public function setLink2Text($link2Text)
    {
        $this->link2Text = $link2Text;
    }

    /**
     * Returns the link3Text
     *
     * @return string $link3Text
     */
    public function getLink3Text()
    {
        return $this->link3Text;
    }

    /**
     * Sets the link3Text
     *
     * @param string $link3Text
     * @return void
     */
    public function setLink3Text($link3Text)
    {
        $this->link3Text = $link3Text;
    }
}
