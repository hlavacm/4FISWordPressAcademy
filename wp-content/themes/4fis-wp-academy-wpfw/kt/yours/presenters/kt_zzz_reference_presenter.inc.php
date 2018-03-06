<?php

class KT_ZZZ_Reference_Presenter extends KT_WP_Post_Base_Presenter
{
    public function __construct(KT_ZZZ_Reference_Model $model)
    {
        parent::__construct($model);
    }

    // --- getry & setry ------------------------------

    /** @return KT_ZZZ_Reference_Model */
    public function getModel()
    {
        return parent::getModel();
    }

    // --- veřejné funkce ------------------------------

    public function renderParamDateCreation()
    {
        if ($this->getModel()->isParamDateCreation()) {
            echo "<i class=\"fa fa-calendar\"></i> {$this->getModel()->getParamDateCreation()} ";
        }
    }

    public function renderParamClientName()
    {
        if ($this->getModel()->isParamClientName()) {
            echo "<i class=\"fa fa-user\"></i> {$this->getModel()->getParamClientName()} ";
        }
    }

    public function renderParamTypes()
    {
        if ($this->getModel()->isParamTypes()) {
            $selectedTypes = $this->getModel()->getParamTypes();
            $results = [];
            $allTypes = new KT_ZZZ_Reference_Type_Enum();
            $translates = $allTypes->getTranslates();
            foreach ($allTypes->getAllKeyValues() as $key => $value) {
                if (in_array($value, $selectedTypes)) {
                    $translate = $translates[$value];
                    array_push($results, "<i class=\"fa fa-tag\"></i> $translate");
                }
            }
            echo implode(" ", $results);
        }
    }

    public function renderNextReferenceLink()
    {
        $adjacent = get_adjacent_post(false, "", false);
        if (KT::issetAndNotEmpty($adjacent)) {
            $url = get_permalink($adjacent->ID);
            echo "<a href=\"$url\" title=\"Další naše práce\" class=\"btn btn-primary float-right\">Další reference</a>";
        }
    }

    public function renderPrevReferenceLink()
    {
        $adjacent = get_adjacent_post(false, "", true);
        if (KT::issetAndNotEmpty($adjacent)) {
            $url = get_permalink($adjacent->ID);
            echo "<a href=\"$url\" title=\"Předchozí naše práce\" class=\"btn btn-primary float-left\">Předchozí reference</a>";
        }
    }
}
