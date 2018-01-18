<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 18.01.18
 * Time: 22:10
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity
 * @ORM\Table(name="Phones")
 */
class Phone
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */

    private $id;

    /**
     * @ORM\Column(type="string")
     * @ORM\ManyToOne(targetEntity="Contact")
     * @ORM\JoinColumn(name="id", referencedColumnName="cid")
     */
    private $cid;

    /**
     * @ORM\Column(type="string")
     */
    private $phoneNumber;
}