<?php

namespace Saxulum\PhpDocGenerator;

/**
 * @link http://www.phpdoc.org/docs/latest/references/phpdoc/tags/param.html
 */
class ParamRow extends AbstractRow
{
    /**
     * @param string      $type
     * @param string      $name
     * @param string|null $description
     */
    public function __construct($type, $name, $description = null)
    {
        $this->addPart($type);
        $this->addPart($name, '$');
        $this->addPart($description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'param';
    }
}
