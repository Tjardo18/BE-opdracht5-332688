<?php

class Leverancier extends BaseController
{
    private $leverancierModel;

    public function __construct()
    {
        $this->leverancierModel = $this->model('LeverancierModel');
    }

    public function index($id)
    {
        $result = $this->leverancierModel->getLeverancier($id);

        $rows = "";
        foreach ($result as $leverancier) {

            $rows .= "<tr>
                        <td>$leverancier->PNaam</td>
                        <td>$leverancier->DatumLevering</td>
                        <td>$leverancier->Aantal</td>
                        <td>$leverancier->DatumEVL</td>
                      </tr>";
        }

        $data = [
            'title' => 'Leverings Informatie',
            'naamLeverancier' => $result[0]->LNaam,
            'contactPersoon' => $result[0]->ContactPersoon,
            'leverancierNummer' => $result[0]->LeverancierNummer,
            'mobiel' => $result[0]->Mobiel,
            'rows' => $rows
        ];

        $this->view('leverancier/leverancier', $data);
    }
}
