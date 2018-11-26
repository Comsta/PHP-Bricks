<?php
namespace comsta\model;

/**
 * Klasse für Blogeintrag
 */
class Blogentry {

    /**
     * @var int $id Id des gesuchten Eintrags 
     */
    private $id;
    /**
     * @var string $title Title des gesuchten Eintrags 
     */
    private $title;
    private $entry;

    public function __construct($id, $title, $entry) {
        $this->id = $id;
        $this->title = $title;
        $this->entry = $entry;
    }
}
?>
