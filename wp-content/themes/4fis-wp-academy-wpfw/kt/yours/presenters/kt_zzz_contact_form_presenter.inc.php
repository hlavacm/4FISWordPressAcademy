<?php

class KT_ZZZ_Contact_Form_Presenter extends KT_Contact_Form_Base_Presenter
{
    public function __construct($withProcessing = true)
    {
        parent::__construct($withProcessing);
    }

    // --- veřejné funkce ------------------------------

    public function renderForm()
    {
        $form = $this->getForm();
        $fieldset = $this->getFieldset();

        echo $form->getFormHeader();

        $nameField = $fieldset[KT_Contact_Form_Base_Config::NAME];
        $nameField->addAttrClass("form-control");
        echo "<div class=\"control-group\"><div class=\"form-group floating-label-form-group controls\">";
        echo "<label for=\"{$nameField->getName()}\">{$nameField->getLabel()}</label>";
        echo $nameField->getField();
        echo "</div></div>";

        $phoneField = $fieldset[KT_Contact_Form_Base_Config::PHONE];
        $phoneField->addAttrClass("form-control");
        echo "<div class=\"control-group\"><div class=\"form-group floating-label-form-group controls\">";
        echo "<label for=\"{$phoneField->getName()}\" class=\"phone\">{$phoneField->getLabel()}</label>";
        echo $phoneField->getField();
        echo "</div></div>";

        $emailField = $fieldset[KT_Contact_Form_Base_Config::EMAIL];
        $emailField->addAttrClass("form-control");
        echo "<div class=\"control-group\"><div class=\"form-group floating-label-form-group controls\">";
        echo "<label for=\"{$emailField->getName()}\" class=\"email\">{$emailField->getLabel()}</label>";
        echo $emailField->getField();
        echo "</div></div>";

        $messageField = $fieldset[KT_Contact_Form_Base_Config::MESSAGE];
        $messageField->addAttrClass("form-control");
        $messageField->addAttribute("rows", "5");
        echo "<div class=\"control-group\"><div class=\"form-group floating-label-form-group controls\">";
        echo "<label for=\"{$messageField->getName()}\" class=\"phone\">{$messageField->getLabel()}</label>";
        echo $messageField->getField();
        echo "</div></div>";

        echo "<div class=\"hidden invisible\">";
        echo $fieldset[KT_Contact_Form_Base_Config::FAVOURITE]->getControlHtml();
        echo $fieldset[KT_Contact_Form_Base_Config::NONCE]->getControlHtml();
        echo "</div>";

        echo "<span class=\"btn btn-primary submitButton\"><span>{$form->getButtonValue()}</span></span>";

        echo $form->getFormFooter();
    }

    // --- neveřejné funkce ------------------------------

    protected function initForm()
    {
        /* @var $form KT_Form */
        $form = parent::initForm();
        $form->setButtonClass("btn btn-default submitButton");
        return $form;
    }
}
