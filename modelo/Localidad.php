<?php
class Localidad implements JsonSerializable
{
    protected $id;
    protected $name;
    protected $active;

    function __construct()
    {
    }
    function loadfromJSON(string $json)
    {
        $tempo = json_decode($json, true);
        $this->id = $tempo["id"];
        $this->name = $tempo["name"];
        $this->active = $tempo["active"];
    }
    public function  jsonSerialize()
    {
        return
            [
                'id'   => $this->getId(),
                'name' => $this->getName(),
                'active' => $this->isActive()
            ];
    }
    function getName(): string
    {
        return $this->name;
    }
    function getId(): int
    {
        return $this->id;
    }
    function isActive(): bool
    {
        return $this->active;
    }
    function setName(string $name)
    {
        $this->name = $name;
    }
    function setId(int $id)
    {
        $this->id = $id;
    }
    function setActive(bool $active)
    {
        $this->active = $active;
    }
}
