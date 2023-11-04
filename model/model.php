<?php
    class model{
        private $PDO;
        public function __construct(){
            require_once("C:/xampp/htdocs/proyectb/config/db.php");
            $con=new db();
            $this->PDO = $con->conexion();
        }
        /**Usuario */
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
                if (password_verify($password, $data['password'])) {
                    session_start();
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['apellidos'] = $data['apellidos'];
                    //header("Location: index.php");
                    // Retrasar la redirección por unos segundos para mostrar la alerta
                    echo "<script>alert('¡Inicio de sesión exitoso!');</script>";
                    echo "<script>setTimeout(function() { window.location.href = 'index.php'; }, 1000);</script>";
                } else {
                    echo "<script>alert('No son sus datos, vuelva a intentar');</script>";
                }
            }else {
                echo "<script>alert('No son sus datos, vuelva a intentar');</script>";
                echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 500);</script>";
            }
        }
        public function showUsuarios($id){
            $stament=$this->PDO->prepare("SELECT * FROM usuarios WHERE id=:id LIMIT 1");
            $stament->bindParam(":id",$id);
            return($stament->execute())?$stament->fetch():false;
        }
        public function listaUsuarios(){
            $stament=$this->PDO->prepare("SELECT * FROM usuarios");
            return($stament->execute())?$stament->fetchAll():false;
        }
        public function editarUsuarios($id,$nombre,$apellidos,$email){
            $stament=$this->PDO->prepare("UPDATE usuarios SET nombre=:nombre, apellidos=:apellidos, email=:email WHERE id=:id");
            $stament->bindParam(":id",$id);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellidos",$apellidos);
            $stament->bindParam(":email",$email);
            return ($stament->execute())?$id:false;
        }
        public function eliminarUsuarios($id){
            $stament=$this->PDO->prepare("DELETE FROM usuarios WHERE id=:id");
            $stament->bindParam(":id",$id);
            return($stament->execute())?true:false;
        }
        /**Productos */
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