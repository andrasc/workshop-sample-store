<?php

class MyAccountModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param string $idUser
     * @return array
     */
    public function getUserOrders($idUser)
    {
        $result = $this->db->select('*')
            ->from('orders')
            ->join('products', 'products.IdProduct = orders.IdProduct', 'inner')
            ->where('orders.IdUser', $idUser)
            ->get()
            ->result_array();

        return $result;
    }

}
