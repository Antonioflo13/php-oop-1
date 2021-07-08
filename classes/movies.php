<?php 
class Movies 
{
    public $title;
    public $language;
    public $cast;
    public $description;
    public $image;

    function __construct($title,$language,$cast,$description,$image) 
    {
        $this->title = $title;
        $this->language = $language;
        $this->cast = $cast;
        $this->description = $description;
        $this->image = $image;
    }

    public function getLengthtext () {
        return substr($this->description, 0, 110) . "....";
    }
}
?>
