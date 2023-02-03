<?php

include_once ("FormField.php");

class ChoiceFormField extends FormField
{
    protected $choices;
    protected $multiple;

    public function __construct(array $choices, bool $multiple = false)
    {
        $this->choices = $choices;
        $this->multiple = $multiple;
    }

     public function getHtml(): string
    {
        $html = '';
        $idx = 0;
        $name = $this->multiple ? $this->label . '[]' : $this->label;
        foreach ($this->choices as $value => $label) {
            $id = $this->label . '_' . $idx;
            $html .= '<li>';
            $html .= '<input type="' . ($this->multiple ? 'checkbox' : 'radio') . '" id="' . $id . '" name="' . $name . '" value="' . $value . '">';
            $html .= '<label for="' . $id . '">' . $label . '</label>';
            $html .= '</li>';
            $idx++;
        }
        return '<form>' . $this->label . ' ' . $html . '</form>';
    }

    public function validate(): bool
    {
        if($this->choices === [])
        {
            return false;
        }
        return true;
    }

}

$genderField = new ChoiceFormField(['m' => 'Male', 'f' => 'Female']);
$genderField->setLabel('Gender');

$hobbiesField = new ChoiceFormField(['0' => 'Video games', '1' => 'Sports', '2' => 'Dinosaurs', '3' => 'Else'], true);
$hobbiesField->setLabel('Hobbies');

$form = '<form method="post">' . $genderField->getHtml() . $hobbiesField->getHtml() . '</form>';
echo $form;