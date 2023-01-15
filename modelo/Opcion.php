<?php
class Opcion implements JsonSerializable
{
    protected $id;
    protected $name;

    function __construct()
    {
    }
    function loadfromJSON(string $json)
    {
        $tempo = json_decode($json, true);
        $this->id = $tempo["id"];
        $this->name = $tempo["name"];
    }
    public function  jsonSerialize()
    {
        return
            [
                'id'   => $this->getId(),
                'name' => $this->getName()
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
    function setName(string $name)
    {
        $this->name = $name;
    }
    function setId(int $id)
    {
        $this->id = $id;
    }
}
