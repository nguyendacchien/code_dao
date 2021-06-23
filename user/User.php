<?php


class User
{
    public string $name;
    public int $pass;

    /**
     * User constructor.
     * @param string $name
     * @param int $pass
     */
    public function __construct(string $name, int $pass)
    {
        $this->name = $name;
        $this->pass = $pass;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPass(): int
    {
        return $this->pass;
    }

    /**
     * @param int $pass
     */
    public function setPass(int $pass): void
    {
        $this->pass = $pass;
    }


}