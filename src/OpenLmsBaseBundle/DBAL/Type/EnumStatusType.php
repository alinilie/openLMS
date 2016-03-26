<?php
namespace OpenLmsBaseBundle\DBAL\Type;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class EnumStatusType extends Type
{
    const ENUM_STATUS     = 'enum_status';
    const STATUS_ACTIVE   = 'active';
    const STATUS_INACTIVE = 'inactive';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return "ENUM('active', 'inactive')";
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (!in_array($value, array(self::STATUS_ACTIVE, self::STATUS_INACTIVE))) {
            throw new \InvalidArgumentException("Invalid value ({$value}) for type " . self::ENUM_STATUS);
        }

        return $value;
    }

    public function getName()
    {
        return self::ENUM_STATUS;
    }
}