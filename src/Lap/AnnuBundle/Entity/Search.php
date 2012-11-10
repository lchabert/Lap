<?php

namespace Lap\AnnuBundle\Entity;

/**
 * Description of Search
 *
 * @author lolostates
 */
class Search {

    protected $keyword;
    
    public function getKeyword() {
        return $this->keyword;
    }

    public function setKeyword($keyword) {
        $this->keyword = $keyword;
    }
}

?>
