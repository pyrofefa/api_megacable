<?php
    require 'Slim/Slim.php';
    require 'conexion/conector.php';
    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim();
    $app->response()->header('Content-Type', 'application/json;charset=utf-8');
    
    $app->get('/','getinicio');
    
    //todos los datos del mes
    $app->get('/listaimagenes','getbannerview');
    $app->get('/listaimagenesfooter','getbannerfooter');
    $app->get('/promociones','getpromociones');
    $app->get('/fox_mas','getfox_mas');
    $app->get('/hbo_max','gethbo_max');
    $app->get('/peliculas','getpeliculas');
    $app->get('/ppv','getppv');
    $app->get('/cable','getcable');
    $app->get('/television_cable','gettelevision_cable');

    $app->get('/internet','getinternet');
    $app->get('/telefonia','gettelefonia');
    $app->get('/paquete_uno','getpaquete1');
    $app->get('/paquete_dos_internet','getpaquete2');
    $app->get('/paquete_dos_telefonia','getpaquete2t');
    $app->get('/paquete_tres','getpaquete3');
    $app->get('/paquete_tres/:id','getpaquete3id');

    $app->get('/ruleta','getruleta');
    $app->get('/ruleta/:id','getruletaid');


    //buscando por id
    $app->get('/promociones/:id','getpromocionesid');
    $app->get('/peliculas/:id','getpeliculasid');
    $app->get('/listaimagenes/:id','getbannerviewid');
    $app->get('/listaimagenesfooter/:id','getbannerfooterid');
    $app->get('/promociones/:id','getpromocionesid');
    $app->get('/hbo_max/:id','gethbo_max_id');
    $app->get('/ppv/:id','getppvid');
    $app->get('/fox_mas/:id','getfox_mas_id');
    $app->get('/cable/:id','getcable_id');
    $app->get('/internet/:id','getinternet_id');
    $app->get('/telefonia/:id','gettelefonia_id');
    $app->get('/networks/:id','getnetworks_id');
    $app->get('/programas_tv/:id','getprogramas_tv_id');
    $app->get('/tv_en_vivo/:id','gettv_en_vivo_id');

    //carruseles nw.js
    $app->get('/hbo_max_primero','gethbo_max_primero');
    $app->get('/hbo_max_segundo','gethbo_max_segundo');
    $app->get('/ppv_primero','getppv_primero');
    $app->get('/ppv_segundo','getppv_segundo');
    $app->get('/fox_mas_primero','getfox_mas_primero');
    $app->get('/fox_mas_segundo','getfox_mas_segundo');
    $app->get('/peliculas_primero','getpeliculas_primero');
    $app->get('/peliculas_segundo','getpeliculas_segundo');

    $app->get('/programas_tv','getprogramas_tv');
    $app->get('/programas_tv_primero','getprogramas_tv_primero');
    $app->get('/programas_tv_segundo','getprogramas_tv_segundo');

    $app->get('/tv_en_vivo','gettv_en_vivo');
    $app->get('/tv_en_vivoprimero','gettv_en_vivo_primero');
    $app->get('/tv_en_vivosegundo','gettv_en_vivo_segundo');    
    $app->get('/tv_en_vivotercero','gettv_en_vivo_tercero');
    $app->get('/tv_en_vivocuarto','gettv_en_vivo_cuarto');
    $app->get('/tv_en_vivocinco','gettv_en_vivo_cinco');    
    
    $app->get('/networks','get_networks');
    $app->get('/networksprimero','get_networks_primero');
    $app->get('/networkssegundo','get_networks_segundo');

    //agregar datos
    $app->post('/agregarlistaimagenes','postbannerview');
    $app->post('/agregarlistaimagenesfooter','postbannerfooter');
    $app->post('/agregarpromos','postpromos');
    $app->post('/agregarpelicula','postpelicula');
    $app->post('/agregarhbo_max','posthbo_max');
    $app->post('/agregarppv','postppv');
    $app->post('/agregarfox_mas','postfox_mas');
    $app->post('/agregartelevision','posttelevision');
    $app->post('/agregarinternet','postinternet');
    $app->post('/agregartelefonia','posttelefonia');
    $app->post('/agregarnetwork','postnetwork');
    $app->post('/agregarprogramas_tv','postprogramas_tv');
    $app->post('/agregar_tv_en_vivo','posttv_en_vivo');
    $app->post('/agregarpaquete','postpaquete');

    //agregar imagenes
    $app->post('/insertarimagenpeliculas','insertandoImagenpeliculas');
    $app->post('/insertarimagenhbo','insertandoImagenhbo');
    $app->post('/insertarimagenpromos','insertandoImagenpromos');
    $app->post('/insertarimagenfooter','insertandoImagenfooter');
    $app->post('/insertarimagen','insertandoImagen');
    $app->post('/insertarimagenppv','insertandoImagenppv');
    $app->post('/insertarimagenfox_mas','insertandoImagenfox_mas');
    $app->post('/insertarimagennetwork','insertandoImagennetwork');
    $app->post('/insertarimagenprogramas_tv','insertandoImagenprogramas_tv');
    $app->post('/insertarimageninternet','insertandoImageninternet');
    $app->post('/insertarimagentv_en_vivo','insertandoImagentv_en_vivo');

    //eliminr imagenes
    $app->delete('/eliminarimagenppv/:ruta','eliminandoImagenppv');
    $app->delete('/eliminarimagenhbo/:ruta','eliminandoImagenhbo');
    $app->delete('/eliminarimagenfox_mas/:ruta','eliminandoImagenfox_mas');
    $app->delete('/eliminarimagenpromos/:ruta','eliminandoImagenpromos');
    $app->delete('/eliminarimagen/:ruta','eliminandoImagen');
    $app->delete('/eliminarimagenfooter/:ruta','eliminandoImagenfooter');
    $app->delete('/eliminarimagenpeliculas/:ruta','eliminandoImagenpeliculas');
    $app->delete('/eliminarimagentv_en_vivo/:ruta','eliminandoImagentv_en_vivo');
    $app->delete('/eliminarimagennetworks/:ruta','eliminandoImagennetworks');
    $app->delete('/eliminarimagenprogramas_tv/:ruta','eliminandoImagenprogramas_tv');

    //Actualizar 
    $app->put('/actualizarlistaimagenes/:id','putbannerview');
    $app->put('/actualizarlistaimagenesfooter/:id','putbannerfooter');
    $app->put('/actualizarpromo/:id','putpromos');
    $app->put('/actualizarpelicula/:id','putpelicula');
    $app->put('/actualizarhbo_max/:id','puthbo_max');
    $app->put('/actualizarppv/:id','putppv');
    $app->put('/actualizarfox_mas/:id','putfox_mas');
    $app->put('/actualizarcable/:id','putcable');
    $app->put('/actualizarinternet/:id','putinternet');
    $app->put('/actualizartelefonia/:id','puttelefonia');
    $app->put('/actualizarnetworks/:id','putnetworks');
    $app->put('/actualizarprogramas_tv/:id','putprogramas_tv');
    $app->put('/actualizartv_en_vivo/:id','puttv_en_vivo');
    $app->put('/actualizarruleta/:id','putruleta');

    //Eliminar
    $app->delete('/eliminarlistaimagen/:id','deletebannerview');
    $app->delete('/eliminarlistaimagenfooter/:id','deletebannerfooter');
    $app->delete('/eliminarpromo/:id','deletepromo');
    $app->delete('/eliminarpelicula/:id','deletepelicula');
    $app->delete('/eliminarhbo_max/:id','deletehbo_max');
    $app->delete('/eliminarppv/:id','deleteppv');
    $app->delete('/eliminarfox_mas/:id','deletefox_mas');
    $app->delete('/eliminarcable/:id','deletecable');
    $app->delete('/eliminarinternet/:id','deleteinternet');
    $app->delete('/eliminartelefonia/:id','deletetelefonia');
    $app->delete('/eliminartv_en_vivo/:id','deletetv_en_vivo');
    $app->delete('/eliminarnetworks/:id','deletenetwork');
    $app->delete('/eliminarprogramas_tv/:id','deleteprogramas_tv');
    $app->delete('/eliminarpaquete/:id','deletepaquete');

    
    function getinicio()
    {
        echo "Pagina de gestion API REST MEGACABLE";
    }
    function getcategorias()
    {
        $sql = "select * from categorias";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getbannerview()
    {
        $sql = "select * from banner_view";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getbannerviewid($id)
    {
        $sql = "select * from banner_view where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getbannerfooter()
    {
        $sql = "select * from banner_footer";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getbannerfooterid($id)
    {
        $sql = "select * from banner_footer where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getruletaid($id)
    {
        $sql = "select * from ruleta where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getruleta()
    {
        $sql = "select * from ruleta";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getpromociones()
    {
        $sql = "select * from promos";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getpaquete1()
    {
        $sql = "select paquetes.id, paquetes.precio, paquetes.precio_pronto, paquetes.tipo, television.nombre, television.numero_canales, television.numero_musica from paquetes join television on paquetes.id_television = television.id where paquetes.tipo=1 ORDER BY paquetes.id";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getpaquete2()
    {
        $sql = "select paquetes.id, internet.velocidades, paquetes.precio, paquetes.precio_pronto, paquetes.tipo, television.nombre, television.numero_canales, television.numero_musica from paquetes join television on paquetes.id_television = television.id  join internet on paquetes.id_internet = internet.id where paquetes.tipo=2 ORDER BY paquetes.id";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getpaquete2t()
    {
        $sql = "select paquetes.id, paquetes.precio, paquetes.precio_pronto, paquetes.tipo, television.nombre, television.numero_canales, television.numero_musica,telefonia.descripcion from paquetes join television on paquetes.id_television = television.id join telefonia on paquetes.id_telefonia = telefonia.id where paquetes.tipo=2 ORDER BY paquetes.id";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getpaquete3()
    {
        $sql = "select paquetes.id, paquetes.precio, paquetes.precio_pronto, paquetes.tipo, television.nombre, television.numero_canales, television.numero_musica, internet.velocidades, telefonia.descripcion from paquetes join television on paquetes.id_television = television.id  join internet on paquetes.id_internet = internet.id  join telefonia on paquetes.id_telefonia = telefonia.id where paquetes.tipo=3 ORDER BY paquetes.id";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        } 
    }
    function getcable()
    {
        $sql = "select * from television";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function gettelevision_cable()
    {
        $sql = "select * from television where television = 1";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getinternet()
    {
        $sql = "select * from internet";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function gettelefonia()
    {
        $sql = "select * from telefonia";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getpaquete3id($id)
    {
        $sql = "select paquetes.precio_pronto, paquetes.tipo, paquetes.precio, internet.velocidades, internet.descripcion, telefonia.nombre, telefonia.descripcion AS telefonia, television.numero_musica, television.numero_canales, television.nombre AS television FROM internet JOIN paquetes ON internet.id = paquetes.id_internet JOIN telefonia ON telefonia.id = paquetes.id_telefonia JOIN television ON television.id = paquetes.id_television WHERE paquetes.tipo = 3 and paquetes.id = :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getpromocionesid($id)
    {
        $sql = "select * from promos where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getfox_mas()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from fox_mas where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."'";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getfox_mas_id($id)
    {
        $sql = "select * from fox_mas where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getnetworks_id($id)
    {
        $sql = "select * from networks where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getprogramas_tv_id($id)
    {
        $sql = "select * from programas_tv where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getfox_mas_primero()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from fox_mas where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getfox_mas_segundo()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from fox_mas where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4,8";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function gethbo_max()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from hbo_max where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."'";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function gethbo_max_id($id)
    {
        $sql = "select * from hbo_max where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function gethbo_max_primero()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from hbo_max where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function gethbo_max_segundo()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from hbo_max where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4,8";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getpeliculas()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from peliculas_renta where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."'";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getpeliculas_primero()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from peliculas_renta where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getpeliculas_segundo()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from peliculas_renta where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4,8";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getpeliculasid($id)
    {
        $sql = "select * from peliculas_renta where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getppv()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from ppv where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."'";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function getppvid($id)
    {
        $sql = "select * from ppv where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getcable_id($id)
    {
        $sql = "select * from television where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getinternet_id($id)
    {
        $sql = "select * from internet where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function gettelefonia_id($id)
    {
        $sql = "select * from telefonia where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function getppv_segundo()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from ppv where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4,8";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getppv_primero()
    {
        $ano=date("Y");
        $mes=date("m");
        $sql = "select * from ppv where YEAR(mes)='".$ano."' and MONTH(mes)='".$mes."' limit 4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function gettv_en_vivo()
    {

        $sql = "select * from tv_en_vivo";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function gettv_en_vivo_id($id)
    {
        $sql = "select * from tv_en_vivo where id= :id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $c = $stmt->fetchObject();  
            $db = null;
            echo json_encode($c); 
        }
        catch(PDOException $e) 
        {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function gettv_en_vivo_primero()
    {
        
        $sql = "select * from tv_en_vivo limit 4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function gettv_en_vivo_segundo()
    {
        
        $sql = "select * from tv_en_vivo limit 4,4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function gettv_en_vivo_tercero()
    {
        
        $sql = "select * from tv_en_vivo limit 8,4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function gettv_en_vivo_cuarto()
    {
       $sql = "select * from tv_en_vivo limit 12,4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }    
    }
    function gettv_en_vivo_cinco()
    {
        $sql = "select * from tv_en_vivo limit 16,4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }    
    }
    function get_networks()
    {
        $sql = "select * from networks";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function get_networks_primero()
    {
        $sql = "select * from networks limit 4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function get_networks_segundo()
    {
        $sql = "select * from networks limit 4,4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getprogramas_tv()
    {

        $sql = "select * from programas_tv";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function getprogramas_tv_primero()
    {
        $sql = "select * from programas_tv limit 4";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
     function getprogramas_tv_segundo()
    {
        $sql = "select * from programas_tv limit 4,8";
        try {
            $db = getConnection();
            $stmt = $db->query($sql);
            $c = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($c);
        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }   
    }
    function insertandoImagen()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);
 
        if(!is_dir("../api_megacable/imagenes/banner_view"))
        {
            mkdir("../api_megacable/imagenes/banner_view", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/banner_view/".$cambio))
        {
            echo json_decode($file);
        }
    }
    function insertandoImagenfooter()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/banner_footer"))
        {
            mkdir("../api_megacable/imagenes/banner_footer", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/banner_footer/".$cambio))
        {
            echo json_decode($file);
        }
    }
    function insertandoImagenpromos()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/promos"))
        {
            mkdir("../api_megacable/imagenes/promos", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/promos/".$cambio))
        {
            echo json_decode($file);
        }
    }
    function insertandoImagenpeliculas()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);


        if(!is_dir("../api_megacable/imagenes/peliculas_renta"))
        {
            mkdir("../api_megacable/imagenes/peliculas_renta", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/peliculas_renta/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagenhbo()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes//hbo_max"))
        {
            mkdir("../api_megacable/imagenes/hbo_max", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/hbo_max/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagenppv()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/ppv"))
        {
            mkdir("../api_megacable/imagenes/ppv", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/ppv/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagenfox_mas()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/fox_mas"))
        {
            mkdir("../api_megacable/imagenes/fox_mas", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/fox_mas/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagennetwork()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/networks"))
        {
            mkdir("../api_megacable/imagenes/networks", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/networks/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagentv_en_vivo()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/tv_en_vivo"))
        {
            mkdir("../api_megacable/imagenes/tv_en_vivo", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/tv_en_vivo/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagenprogramas_tv()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/programas_tv"))
        {
            mkdir("../api_megacable/imagenes/programas_tv", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/programas_tv/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImageninternet()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        $cambio = str_replace(" ", "_", $file);

        if(!is_dir("../api_megacable/imagenes/internet"))
        {
            mkdir("../api_megacable/imagenes/internet", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../api_megacable/imagenes/internet/".$cambio))
        {
            echo json_decode($file);
        }    
    }
    function eliminandoImagenprogramas_tv($ruta)
    {
        $directorio="../api_megacable/imagenes/programas_tv/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagennetworks($ruta)
    {
        $directorio="../api_megacable/imagenes/networks/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagenppv($ruta) 
    {
        $directorio="../api_megacable/imagenes/ppv/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
        
    }
    function eliminandoImagenhbo($ruta)
    {
        $directorio="../api_megacable/imagenes/hbo_max/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagenpromos($ruta)
    {
        $directorio="../api_megacable/imagenes/promos/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagenfox_mas($ruta)
    {
        $directorio="../api_megacable/imagenes/fox_mas/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagen($ruta)
    {
        $directorio="../api_megacable/imagenes/banner_view/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagenfooter($ruta)
    {
        $directorio="../api_megacable/imagenes/banner_footer/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagenpeliculas($ruta)
    {
        $directorio="../api_megacable/imagenes/peliculas_renta/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function eliminandoImagentv_en_vivo($ruta)
    {
        $directorio="../api_megacable/imagenes/tv_en_vivo/".$ruta;
        echo ($directorio);

        if (isset($directorio)) 
        {
            unlink($directorio);
        }
        else
        {
            echo json_decode($directorio);
        }
    }
    function postbannerview()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $sql = "insert into banner_view (nombre, ruta, descripcion,tipo) values(:nombre,:ruta,:descripcion,:tipo)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_view->nombre);
            $stmt->bindParam("ruta", $banner_view->ruta);
            $stmt->bindParam("descripcion", $banner_view->descripcion);
            $stmt->bindParam("tipo", $banner_view->tipo);
            $banner_view->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postbannerfooter()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_footer = json_decode($request->getBody());
        $sql = "insert into banner_footer (nombre, ruta, descripcion, tipo) values(:nombre,:ruta,:descripcion, :tipo)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_footer->nombre);
            $stmt->bindParam("ruta", $banner_footer->ruta);
            $stmt->bindParam("descripcion", $banner_footer->descripcion);
            $stmt->bindParam("tipo", $banner_footer->tipo);
            $banner_footer->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postpromos()
    {
        $request = Slim\Slim::getInstance()->request();
        $promos = json_decode($request->getBody());
        $sql = "insert into promos (nombre, ruta, descripcion, encabezado) values(:nombre,:ruta,:descripcion, :encabezado)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $promos->nombre);
            $stmt->bindParam("ruta", $promos->ruta);
            $stmt->bindParam("descripcion", $promos->descripcion);
            $stmt->bindParam("encabezado", $promos->encabezado);
            $promos->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postpelicula()
    {
        $request = Slim\Slim::getInstance()->request();
        $peliculas = json_decode($request->getBody());
        $sql = "insert into peliculas_renta (nombre, ruta, descripcion, mes) values(:nombre,:ruta,:descripcion, :mes)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $peliculas->nombre);
            $stmt->bindParam("ruta", $peliculas->ruta);
            $stmt->bindParam("descripcion", $peliculas->descripcion);
            $stmt->bindParam("mes", $peliculas->mes);
            $peliculas->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function posthbo_max()
    {
        $request = Slim\Slim::getInstance()->request();
        $hbo = json_decode($request->getBody());
        $sql = "insert into hbo_max (nombre, ruta, descripcion, mes) values(:nombre,:ruta,:descripcion, :mes)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $hbo->nombre);
            $stmt->bindParam("ruta", $hbo->ruta);
            $stmt->bindParam("descripcion", $hbo->descripcion);
            $stmt->bindParam("mes", $hbo->mes);
            $hbo->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postppv()
    {
        $request = Slim\Slim::getInstance()->request();
        $ppv = json_decode($request->getBody());
        $sql = "insert into ppv (nombre, ruta, descripcion, mes) values(:nombre,:ruta,:descripcion, :mes)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $ppv->nombre);
            $stmt->bindParam("ruta", $ppv->ruta);
            $stmt->bindParam("descripcion", $ppv->descripcion);
            $stmt->bindParam("mes", $ppv->mes);
            $ppv->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postfox_mas()
    {
        $request = Slim\Slim::getInstance()->request();
        $fox_mas = json_decode($request->getBody());
        $sql = "insert into fox_mas (nombre, ruta, descripcion, mes) values(:nombre,:ruta,:descripcion, :mes)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $fox_mas->nombre);
            $stmt->bindParam("ruta", $fox_mas->ruta);
            $stmt->bindParam("descripcion", $fox_mas->descripcion);
            $stmt->bindParam("mes", $fox_mas->mes);
            $fox_mas->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function posttelevision()
    {
        $request = Slim\Slim::getInstance()->request();
        $fox_mas = json_decode($request->getBody());
        $sql = "insert into television (nombre, numero_canales, numero_musica) values(:nombre, :numero_canales, :numero_musica)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $fox_mas->nombre);
            $stmt->bindParam("numero_canales", $fox_mas->numero_canales);
            $stmt->bindParam("numero_musica", $fox_mas->numero_musica);
            $fox_mas->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postpaquete()
    {
        $request = Slim\Slim::getInstance()->request();
        $fox_mas = json_decode($request->getBody());
        $sql = "insert into paquetes (precio, precio_pronto, tipo, id_television, id_telefonia, id_internet) values(:precio, :precio_pronto, :tipo, :id_television, :id_telefonia, :id_internet)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("precio", $fox_mas->precio);
            $stmt->bindParam("precio_pronto", $fox_mas->precio_pronto);
            $stmt->bindParam("tipo", $fox_mas->tipo);
            $stmt->bindParam("id_television", $fox_mas->id_television);
            $stmt->bindParam("id_telefonia", $fox_mas->id_telefonia);
            $stmt->bindParam("id_internet", $fox_mas->id_internet);

            $fox_mas->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postinternet()
    {
        $request = Slim\Slim::getInstance()->request();
        $internet = json_decode($request->getBody());
        $sql = "insert into internet (velocidades, descripcion, ruta) values(:velocidades, :descripcion, :ruta)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("velocidades", $internet->velocidades);
            $stmt->bindParam("descripcion", $internet->descripcion);
            $stmt->bindParam("ruta", $internet->ruta);
            $internet->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function posttelefonia()
    {
        $request = Slim\Slim::getInstance()->request();
        $telefonia = json_decode($request->getBody());
        $sql = "insert into telefonia (nombre, descripcion) values(:nombre, :descripcion)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $telefonia->nombre);
            $stmt->bindParam("descripcion", $telefonia->descripcion);
            $telefonia->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postnetwork()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $sql = "insert into networks (nombre, ruta, descripcion) values(:nombre,:ruta,:descripcion)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_view->nombre);
            $stmt->bindParam("ruta", $banner_view->ruta);
            $stmt->bindParam("descripcion", $banner_view->descripcion);
            $banner_view->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function posttv_en_vivo()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $sql = "insert into tv_en_vivo (nombre, ruta, descripcion) values(:nombre,:ruta,:descripcion)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_view->nombre);
            $stmt->bindParam("ruta", $banner_view->ruta);
            $stmt->bindParam("descripcion", $banner_view->descripcion);
            $banner_view->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function postprogramas_tv()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $sql = "insert into programas_tv (nombre, ruta, descripcion) values(:nombre,:ruta,:descripcion)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_view->nombre);
            $stmt->bindParam("ruta", $banner_view->ruta);
            $stmt->bindParam("descripcion", $banner_view->descripcion);
            $banner_view->id = $db->lastInsertId();
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putruleta($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        var_dump($banner_view);
        $sql ="update ruleta SET numero=:nombre where id=:id";
        //try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_view->nombre);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        //} catch(PDOException $e) {
            //echo '{"error":{"text":'. $e->getMessage() .'}}';
        //}
    }
    function putbannerview($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $sql ="update banner_view SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion, tipo=:tipo where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_view->nombre);
            $stmt->bindParam("ruta", $banner_view->ruta);
            $stmt->bindParam("descripcion", $banner_view->descripcion);
            $stmt->bindParam("tipo", $banner_view->tipo);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putbannerfooter($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_footer = json_decode($request->getBody());
        $sql ="update banner_footer SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion, tipo=:tipo where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_footer->nombre);
            $stmt->bindParam("ruta", $banner_footer->ruta);
            $stmt->bindParam("descripcion", $banner_footer->descripcion);
            $stmt->bindParam("tipo", $banner_footer->tipo);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putnetworks($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_footer = json_decode($request->getBody());
        $sql ="update networks SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_footer->nombre);
            $stmt->bindParam("ruta", $banner_footer->ruta);
            $stmt->bindParam("descripcion", $banner_footer->descripcion);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putprogramas_tv($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_footer = json_decode($request->getBody());
        $sql ="update programas_tv SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_footer->nombre);
            $stmt->bindParam("ruta", $banner_footer->ruta);
            $stmt->bindParam("descripcion", $banner_footer->descripcion);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function puttv_en_vivo($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_footer = json_decode($request->getBody());
        $sql ="update tv_en_vivo SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_footer->nombre);
            $stmt->bindParam("ruta", $banner_footer->ruta);
            $stmt->bindParam("descripcion", $banner_footer->descripcion);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putpromos($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $promos = json_decode($request->getBody());
        $sql ="update promos SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion, encabezado=:encabezado where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $promos->nombre);
            $stmt->bindParam("ruta", $promos->ruta);
            $stmt->bindParam("descripcion", $promos->descripcion);
            $stmt->bindParam("encabezado", $promos->encabezado);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putpelicula($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $peliculas = json_decode($request->getBody());
        $sql ="update peliculas_renta SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion, mes=:mes where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $peliculas->nombre);
            $stmt->bindParam("ruta", $peliculas->ruta);
            $stmt->bindParam("descripcion", $peliculas->descripcion);
            $stmt->bindParam("mes", $peliculas->mes);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function puthbo_max($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $hbo_max = json_decode($request->getBody());
        $sql ="update hbo_max SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion, mes=:mes where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $hbo_max->nombre);
            $stmt->bindParam("ruta", $hbo_max->ruta);
            $stmt->bindParam("descripcion", $hbo_max->descripcion);
            $stmt->bindParam("mes", $hbo_max->mes);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putppv($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $ppv = json_decode($request->getBody());
        $sql ="update ppv SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion, mes=:mes where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $ppv->nombre);
            $stmt->bindParam("ruta", $ppv->ruta);
            $stmt->bindParam("descripcion", $ppv->descripcion);
            $stmt->bindParam("mes", $ppv->mes);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putfox_mas($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $fox_mas = json_decode($request->getBody());
        $sql ="update fox_mas SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion, mes=:mes where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $fox_mas->nombre);
            $stmt->bindParam("ruta", $fox_mas->ruta);
            $stmt->bindParam("descripcion", $fox_mas->descripcion);
            $stmt->bindParam("mes", $fox_mas->mes);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putcable($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $fox_mas = json_decode($request->getBody());
        $sql ="update television SET nombre=:nombre, numero_musica=:numero_musica, numero_canales=:numero_canales where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $fox_mas->nombre);
            $stmt->bindParam("numero_musica", $fox_mas->numero_musica);
            $stmt->bindParam("numero_canales", $fox_mas->numero_canales);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function putinternet($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $internet = json_decode($request->getBody());
        $sql ="update internet SET velocidades=:velocidades, descripcion=:descripcion where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("velocidades", $internet->velocidades);
            $stmt->bindParam("descripcion", $internet->descripcion);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function puttelefonia($id)
    {
        $request = Slim\Slim::getInstance()->request();
        $telefonia = json_decode($request->getBody());
        $sql ="update telefonia SET nombre=:nombre, descripcion=:descripcion where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $telefonia->nombre);
            $stmt->bindParam("descripcion", $telefonia->descripcion);
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }
    function deletebannerview($id)
    {
        $sql = "delete from banner_view where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletebannerfooter($id)
    {
        $sql = "delete from banner_footer where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }        
    }
    function deletepromo($id)
    {
        $sql = "delete from promos where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletepelicula($id)
    {
        $sql = "delete from peliculas_renta where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletehbo_max($id)
    {
        $sql = "delete from hbo_max where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deleteppv($id)
    {
        $sql = "delete from ppv where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletefox_mas($id)
    {
        $sql = "delete from fox_mas where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletecable($id)
    {
        $sql = "delete from television where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deleteinternet($id)
    {
        $sql = "delete from internet where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletetelefonia($id)
    {
        $sql = "delete from telefonia where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletetv_en_vivo($id)
    {
        $sql = "delete from tv_en_vivo where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletenetwork($id)
    {
        $sql = "delete from networks where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deleteprogramas_tv($id)
    {
        $sql = "delete from programas_tv where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
    }
    function deletepaquete($id)
    {
        $sql = "delete from paquetes where id=:id";
        try 
        {
            $db = getConnection();
            $stmt = $db->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $db = null;
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }   
    }
$app->run();