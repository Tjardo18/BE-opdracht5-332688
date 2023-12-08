<?php

class AllergieModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllergien($id)
    {
        $sql = "SELECT
                    P.Naam AS PNaam,
                    P.Barcode,
                    A.Naam AS ANaam,
                    A.Omschrijving
                FROM Product AS P
                JOIN ProductPerAllergeen AS PA ON P.Id = PA.ProductId
                JOIN Allergeen AS A ON PA.AllergeenId = A.Id
                WHERE P.Id = $id
                ORDER BY ANaam ASC;";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
