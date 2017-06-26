<?php

namespace DPN\Dmailsubscribe\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Björn Fromme <fromme@dreipunktnull.come>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Subscription Model
 *
 * Model object for a subscription to direct_mail newsletters
 * with subscriptions stored as tt_address records.
 *
 * @package Dmailsubscribe
 */
class Subscription extends AbstractEntity
{
    /**
     * @var string
     * @validate EmailAddress
     */
    protected $email;

    /**
     * @var string
     */
    protected $gender;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DPN\Dmailsubscribe\Domain\Model\Category>
     */
    protected $categories;

    /**
     * @var bool
     */
    protected $receiveHtml;

    /**
     * @var bool
     */
    protected $hidden;

    public function __construct()
    {
        $this->categories = new ObjectStorage();
        $this->receiveHtml = true;
        $this->hidden = true;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @param \DPN\Dmailsubscribe\Domain\Model\Category $category
     */
    public function addCategory(Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DPN\Dmailsubscribe\Domain\Model\Category>
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DPN\Dmailsubscribe\Domain\Model\Category> $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return bool
     */
    public function getReceiveHtml()
    {
        return (bool)$this->receiveHtml;
    }

    /**
     * @param bool $receiveHtml
     */
    public function setReceiveHtml($receiveHtml)
    {
        $this->receiveHtml = (bool)$receiveHtml;
    }

    /**
     * @return bool
     */
    public function getHidden()
    {
        return (bool)$this->hidden;
    }

    /**
     * @param bool $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = (bool)$hidden;
    }
}
