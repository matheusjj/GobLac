<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\TailwindRuleStorage;

use Iterator;

class TailwindRulesIterator implements Iterator {
  private int $position = 0;
  private array $keys = [];
  private array $rules = [];
  private bool $isJson;

  public function __construct($rules, $is_json = TRUE) {
    $this->position = 0;
    $this->keys = \array_keys($rules);
    $this->rules = \array_values($rules);
    $this->isJson = $is_json;
  }

  public function rewind(): void {
    $this->position = 0;
  }

  #[\ReturnTypeWillChange]
  public function current() {
    if ($this->isJson) {
      return json_decode($this->rules[$this->position], TRUE);
    }
    return $this->rules[$this->position];
  }

  #[\ReturnTypeWillChange]
  public function key() {
    return $this->keys[$this->position];
  }

  public function next(): void {
    ++$this->position;
  }

  public function valid(): bool {
    return \array_key_exists($this->position, $this->rules);
  }

  public function getKeys(): array {
    return $this->keys;
  }

}
