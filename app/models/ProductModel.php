<?php
class Product extends Model
{
    private $table = "products";

    public function all()
    {
        $sql = "SELECT * FROM $this->table";
        $conn = $this->connect();
        $stm = $conn->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $conn = $this->connect();
        $stm = $conn->prepare($sql);
        $stm->execute([
            'id' => $id
        ]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data = [])
    {
        $sql = "INSERT INTO $this->table(name, price) 
                VALUES(:name, :price)";

        $conn = $this->connect();
        $stm = $conn->prepare($sql);

        return $stm->execute([
            'name'  => $data['name'],
            'price' => $data['price']
        ]);
    }

    public function update($id, $data = [])
    {
        $sql = "UPDATE $this->table 
                SET name = :name, price = :price
                WHERE id = :id";

        $conn = $this->connect();
        $stm = $conn->prepare($sql);

        return $stm->execute([
            'name'  => $data['name'],
            'price' => $data['price'],
            'id'    => $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $conn = $this->connect();
        $stm = $conn->prepare($sql);

        return $stm->execute([
            'id' => $id
        ]);
    }
}
