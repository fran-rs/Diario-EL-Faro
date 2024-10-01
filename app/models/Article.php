<?php
class Article {
    public $title;
    public $content;
    public $category;

    public function __construct($title, $content, $category) {
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
    }

    public function getDetails() {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'category' => $this->category,
        ];
    }
}
?>
