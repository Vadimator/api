<?php
//[PHPCOMPRESSOR(remove,start)]
/**
 * Created by PhpStorm.
 * User: Myslyvyi
 * Date: 09.02.16
 * Time: 13:35
 */
namespace samson\activerecord;

use samsonframework\orm\Record;

/**
 * This is emulated classes that should be generated by
 * ORM module. This is needed for IDE and databaseless testing.
 */
if (!class_exists('\samson\activerecord\gallery', false)) {
    class gallery extends Record
    {
        /** @var integer Primary key */
        public $PhotoID;

        /** @var integer Material identifier */
        public $MaterialID;

        /** @var integer MaterialField identifier */
        public $materialFieldid;

        /** @var integer Priority inside material relation */
        public $priority;

        /** @var string Path for picture */
        public $Path;

        /** @var string Name identifier */
        public $Src;

        /** @var int Size picture */
        public $size;

        /** @var int The field with upload date picture */
        public $Loaded;

        /** @var string Description alt value for picture */
        public $Description;

        /** @var string Additional field name */
        public $Name;

        /** @var bool Internal existence flag */
        public $Active;
    }
}
//[PHPCOMPRESSOR(remove,end)]
