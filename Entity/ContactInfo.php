<?php
namespace WFS\Entity;

use Wheregroup\XML\Entity\BaseEntity;

/**
 * Class ContactInfo
 *
 * @package WFS
 * @author  Andriy Oblivantsev <eslider@gmail.com>
 */
class ContactInfo extends BaseEntity
{
    /** @var \WFS\Entity\Address */
    protected $address;

    /** @var \WFS\Entity\Phone */
    protected $phone;
}