<?php

require_once 'models/pedido.php';

class pedidoController {

    public function hacer() {
        require_once 'views/pedido/hacer.php';
    }

    public function add() {
        if (isset($_SESSION['identity'])) {
            $usuario_id = $_SESSION['identity']->id;
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;

            if ($provincia && $localidad && $direccion) {
                $pedido = new Pedido();
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setUsuario_id($usuario_id);
                $pedido->setCoste($coste);

                $save = $pedido->save();

                $save_linea = $pedido->save_linea();

                if ($save && $save_linea) {
                    $_SESSION['pedido'] = "complete";
                } else {
                    $_SESSION['pedido'] = "failed";
                }
            } else {
                $_SESSION['pedido'] = "failed";
            }
            Utils::forceReload(base_url.'pedido/confirmado');
        } else {
            //redirigir al index
            Utils::forceReload(base_url);
        }
    }

    public function confirmado() {
        if (isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);

            $pedido = $pedido->getOnebyUser();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($pedido->id);
            Utils::deleteSession("carrito");
        }
        require_once 'views/pedido/confirmado.php';
    }

    public function pagarPedido(){
        require_once "views/pedido/pay.php";
    }


    public function mis_pedidos() {
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();

        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle() {
        Utils::isIdentity();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            //sacar el pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();
            //productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($id);

            require_once 'views/pedido/detalle.php';
        } else {
            Utils::forceReload(base_url.'pedido/mis_pedidos');
        }
    }

    public function gestion() {
        Utils::isAdmin();
        $gestion = true;

        $pedido = new Pedido();
        $pedidos = $pedido->getAll();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function estado() {
        Utils::isAdmin();
        if (isset($_POST['pedido_id']) && isset($_POST['estado'])) {
            //update del pedido
            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->updateOne();
            
            Utils::forceReload(base_url."pedido/detalle&id=".$id);
        } else {
            Utils::forceReload(base_url);
        }
    }

}
