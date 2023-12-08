<?php

class LeverancierModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLeverancier($id)
    {
        $sql = "SELECT
                    L.Naam AS LNaam,
                    L.ContactPersoon,
                    L.LeverancierNummer,
                    L.Mobiel,
                    P.Naam AS PNaam,
                    PL.DatumLevering,
                    PL.Aantal,
                    PL.DatumEerstVolgendeLevering AS DatumEVL
                FROM Leverancier L
                JOIN ProductPerLeverancier PL ON L.Id = PL.LeverancierId
                JOIN Product P ON PL.ProductId = P.Id
                WHERE P.Id = $id
                ORDER BY PL.DatumLevering ASC;";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
