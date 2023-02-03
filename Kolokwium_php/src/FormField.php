<?php

abstract class FormField
{
    protected $label;
    protected $name;
    protected $value;
    protected $errors = [];

    public function __construct(string $label, string $name)
    {
        $this->label = $label;
        $this->name = $name;
    }

    public abstract function getHtml(): string;
    public abstract function validate(): bool;

    public function setData(array $data): void
    {
        //ok
        $data->data = $data[$this->name] ?? null;
        if (!$this->validate()) {
            $this->errors[] = ' Invalid data for field ' . $this->name;
        }
    }


    public function isValid(): bool
    {
        return empty($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getValue()
    {
        return $this->value;
    }
}

