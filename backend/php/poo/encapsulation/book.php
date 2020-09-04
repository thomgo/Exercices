<?php
class Book {
  protected string $title;
  protected int $pages;

  public function __construct(array $data) {
    $this->setTitle($data["title"]);
    $this->setPages($data["pages"]);
  }

  public function setTitle(string $title):Book  {
    $this->title = $title;
    return $this;
  }

  public function getTitle():string {
    return $this->title;
  }

  public function setPages(int $pages):Book {
    $this->pages = $pages;
    return $this;
  }

  public function getPages():int {
    return $this->pages;
  }
}
