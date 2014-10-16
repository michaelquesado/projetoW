<?php

/**
 * Description of Model
 *
 * @author Michael Fillip da Silva Quesado
 */
include_once('PDO/PDOConnection.php');

abstract class Model {

    private $db;
    private $tabela = null;

    public function __construct() {
        $this->db = new PDOConnection();
        $this->db = $this->db->getConnection();
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function insert(Array $dados) {
        if (is_null($this->tabela)) {
            throw new RuntimeException("Impossivel inserir sem tabela definida!");
        }
        
        $valores = array();
        $campos_v = array();
        foreach ($dados as $key => $values) {
            $campos[] = $key;
            $campos_v[] = $key;
            $valores[] = utf8_decode($values);
        }
        $campos_v = ":" . implode(', :', $campos_v);

        return $this->setDados($campos, $valores, $campos_v);
    }

    private function setDados($campos, $valores, $campos_v) {
        $camp_sql = implode(',', $campos);

        $sql = "INSERT INTO $this->tabela ({$camp_sql}) VALUES ({$campos_v})";

        $stmt = $this->db->prepare($sql);

        foreach ($campos as $c => $v) {
            $stmt->bindValue(":" . $v, $valores[$c]);
        }

        try {

            $stmt->execute();
            $id_inserido = $this->db->lastInsertId();
            return (int) $id_inserido;
        } catch (PDOException $ex) {
            print $ex->getTraceAsString();
        }
    }

    protected function read($campos = null, $where = null) {

        if (!is_string($this->tabela) || is_null($this->tabela)) {
            return false;
        }
        $this->tabela = strtolower($this->tabela);
        $campos = ($campos != '') ? $campos : " * ";
        $where = (!is_null($where)) ? "WHERE " . $where : " ";
        $sql = "SELECT {$campos} FROM {$this->tabela} {$where}";
        $query = $this->db->query($sql);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        return $query->fetchALL();

        $sql = "SELECT {$campos} FROM {$tabela} WHERE calories < ? AND colour = ?";
        $sth = $this->db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(150, 'red'));
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        return $sth->fetchAll();
    }

    public function update($campos, $where) {
        if (!is_string($this->tabela) || !is_string($campos) || !is_string($where))
            return false;
        if (is_null($this->tabela) || is_null($campos) || is_null($where))
            return false;
        $campos;
    }

    public function delete() {
        
    }

    public function setTabela($tabela) {
        $this->tabela = strtolower($tabela);
    }

}
