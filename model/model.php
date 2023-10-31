<?php
    class model{
        private $PDO;
        public function __construct(){
            require_once("C:/xampp/htdocs/proyectb/config/db.php");
            $con=new db();
            $this->PDO = $con->conexion();
        }
        public function registroUsuarios($nombre,$apellidos,$email,$password){
            $passwordHash=password_hash($password,PASSWORD_DEFAULT);
            $stament=$this->PDO->prepare("INSERT INTO usuarios(id,nombre,apellidos,email,password) VALUES(null,:nombre,:apellidos,:email,:password)");
            $stament->bindParam(':nombre',$nombre);
            $stament->bindParam(':apellidos',$apellidos);
            $stament->bindParam(':email',$email);
            $stament->bindParam(':password',$passwordHash);
            return ($stament->execute())?$this->PDO->lastInsertId():false;
        }
        public function entrarUsuarios($email,$password){
            $stament=$this->PDO->prepare("SELECT * FROM usuarios WHERE email=:email");
            $stament->bindParam(':email',$email);
            $stament->execute();
            $data=$stament->fetch(PDO::FETCH_ASSOC);
            if ($stament->rowCount()>0) {
                if (password_verify($password,$data['password'])) {
                    session_start();
                    $_SESSION['nombre']=$data['nombre'];
                    $_SESSION['apellidos']=$data['apellidos'];
                    //echo "Hola Papu ".$data['nombre']." ".$data['apellidos'];
                    header("Location: index.php");
                }
            }
        }
        public function registroProductos($codigo,$nombre,$precio,$stock){
            $stament=$this->PDO->prepare("INSERT INTO productos (id, codigo,nombre,precio,stock) VALUES(null,:codigo,:nombre,:precio,:stock)");
            $stament->bindParam(":codigo",$codigo);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":stock",$stock);
            return($stament->execute())?$this->PDO->lastInsertId():false;
        }
        public function show($id){
            $stament=$this->PDO->prepare("SELECT * FROM productos WHERE id=:id LIMIT 1");
            $stament->bindParam(":id",$id);
            return($stament->execute())?$stament->fetch():false;
        }
        public function listaProductos(){
            $stament=$this->PDO->prepare("SELECT * FROM productos");
            return($stament->execute())?$stament->fetchAll():false;
        }
        public function editarProductos($id, $codigo, $nombre, $precio, $stock){
            $stament = $this->PDO->prepare("UPDATE productos SET codigo=:codigo, nombre=:nombre, precio=:precio, stock=:stock WHERE id=:id");
            $stament->bindParam(":id", $id);
            $stament->bindParam(":codigo", $codigo);
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":precio", $precio);
            $stament->bindParam(":stock", $stock);
            return ($stament->execute()) ? $id : false;
        }
        public function eliminarProductos($id){
            $stament=$this->PDO->prepare("DELETE FROM productos WHERE id=$id");
            $stament->bindParam(":id", $id);
            return($stament->execute()) ? true:false;
        }
    }
?>