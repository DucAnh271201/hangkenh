<?php

namespace App\DTOs;

class FileDto extends DtoAbstract
{
    public function __construct(
        private string $name,
        private string $slug,
        private string $mine,
        private int $size,
        private string $ext,
        private string $path,
    )
    {
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'slug' => $this->getSlug(),
            'mine' => $this->getMine(),
            'size' => $this->getSize(),
            'ext' => $this->getExt(),
            'path' => $this->getPath(),
        ];
    }

    public function toJson(): object
    {
      return (object) $this->toArray();
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getExt(): string
    {
        return $this->ext;
    }

    public function setExt(string $ext): void
    {
        $this->ext = $ext;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getMine(): string
    {
        return $this->mine;
    }

    public function setMine(string $mine): void
    {
        $this->mine = $mine;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }


}
