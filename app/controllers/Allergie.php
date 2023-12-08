<?php

class Allergie extends BaseController
{
    private $allergieModel;

    public function __construct()
    {
        $this->allergieModel = $this->model('AllergieModel');
    }

    public function index($id)
    {
        $result = $this->allergieModel->getAllergien($id);

        $rows = "";
        foreach ($result as $allergien) {

            $rows .= "<tr>
                        <td>$allergien->ANaam</td>
                        <td>$allergien->Omschrijving</td>
                      </tr>";
        }

        $data = [
            'title' => 'Overzicht Allergenen',
            'naamProduct' => $result[0]->PNaam,
            'barcode' => $result[0]->Barcode,
            'rows' => $rows
        ];

        $this->view('allergie/allergie', $data);
    }
}
