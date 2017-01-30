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
    

    //buscando por id
    $app->get('/promociones/:id','getpromocionesid');
    $app->get('/peliculas/:id','getpeliculasid');
    $app->get('/listaimagenes/:id','getbannerviewid');
    $app->get('/listaimagenesfooter/:id','getbannerfooterid');
    $app->get('/promociones/:id','getpromocionesid');
    $app->get('/hbo_max/:id','gethbo_max_id');
    $app->get('/ppv/:id','getppvid');
    $app->get('/fox_mas/:id','getfox_mas_id');


    //carruseles nw.js
    $app->get('/hbo_max_primero','gethbo_max_primero');
    $app->get('/hbo_max_segundo','gethbo_max_segundo');
    $app->get('/ppv_primero','getppv_primero');
    $app->get('/ppv_segundo','getppv_segundo');
    $app->get('/fox_mas_primero','getfox_mas_primero');
    $app->get('/fox_mas_segundo','getfox_mas_segundo');
    $app->get('/peliculas_primero','getpeliculas_primero');
    $app->get('/peliculas_segundo','getpeliculas_segundo');

    /*
    $app->get('/programas_tv','getprogramas_tv');
    $app->get('/tv_en_vivo','gettv_en_vivo');
    $app->get('/networks','getget_networks');
    */
    
    //agregar datos
    $app->post('/agregarlistaimagenes','postbannerview');
    $app->post('/agregarlistaimagenesfooter','postbannerfooter');
    $app->post('/agregarpromos','postpromos');
    $app->post('/agregarpelicula','postpelicula');
    $app->post('/agregarhbo_max','posthbo_max');
    $app->post('/agregarppv','postppv');
    $app->post('/agregarfox_mas','postfox_mas');


    //agregar imagenes
    $app->post('/insertarimagenpeliculas','insertandoImagenpeliculas');
    $app->post('/insertarimagenhbo','insertandoImagenhbo');
    $app->post('/insertarimagenpromos','insertandoImagenpromos');
    $app->post('/insertarimagenfooter','insertandoImagenfooter');
    $app->post('/insertarimagen','insertandoImagen');
    $app->post('/insertarimagenppv','insertandoImagenppv');
    $app->post('/insertarimagenfox_mas','insertandoImagenfox_mas');

    //eliminr imagenes
    $app->delete('/eliminarimagenppv/:ruta','eliminandoImagenppv');
    $app->delete('/eliminarimagenhbo/:ruta','eliminandoImagenhbo');
    $app->delete('/eliminarimagenfox_mas/:ruta','eliminandoImagenfox_mas');
    $app->delete('/eliminarimagenpromos/:ruta','eliminandoImagenpromos');
    $app->delete('/eliminarimagen/:ruta','eliminandoImagen');
    $app->delete('/eliminarimagenfooter/:ruta','eliminandoImagenfooter');
    $app->delete('/eliminarimagenpeliculas/:ruta','eliminandoImagenpeliculas');


    //Actualizar 
    $app->put('/actualizarlistaimagenes/:id','putbannerview');
    $app->put('/actualizarlistaimagenesfooter/:id','putbannerfooter');
    $app->put('/actualizarpromo/:id','putpromos');
    $app->put('/actualizarpelicula/:id','putpelicula');
    $app->put('/actualizarhbo_max/:id','puthbo_max');
    $app->put('/actualizarppv/:id','putppv');
    $app->put('/actualizarfox_mas/:id','putfox_mas');

    //Eliminar
    $app->delete('/eliminarlistaimagen/:id','deletebannerview');
    $app->delete('/eliminarlistaimagenfooter/:id','deletebannerfooter');
    $app->delete('/eliminarpromo/:id','deletepromo');
    $app->delete('/eliminarpelicula/:id','deletepelicula');
    $app->delete('/eliminarhbo_max/:id','deletehbo_max');
    $app->delete('/eliminarppv/:id','deleteppv');
    $app->delete('/eliminarfox_mas/:id','deletefox_mas');

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
    function insertandoImagen()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        if(!is_dir("C:/xampp/htdocs/api_imagenes/banner_view"))
        {
            mkdir("C:/xampp/htdocs/api_imagenes/banner_view", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/api_imagenes/banner_view/".$file))
        {
            echo json_decode($file);
        }
    }
    function insertandoImagenfooter()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        if(!is_dir("C:/xampp/htdocs/api_imagenes/banner_footer"))
        {
            mkdir("C:/xampp/htdocs/api_imagenes/banner_footer", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/api_imagenes/banner_footer/".$file))
        {
            echo json_decode($file);
        }
    }
    function insertandoImagenpromos()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        if(!is_dir("C:/xampp/htdocs/api_imagenes/promos"))
        {
            mkdir("C:/xampp/htdocs/api_imagenes/promos", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/api_imagenes/promos/".$file))
        {
            echo json_decode($file);
        }
    }
    function insertandoImagenpeliculas()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        if(!is_dir("C:/xampp/htdocs/api_imagenes/peliculas_renta"))
        {
            mkdir("C:/xampp/htdocs/api_imagenes/peliculas_renta", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/api_imagenes/peliculas_renta/".$file))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagenhbo()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        if(!is_dir("C:/xampp/htdocs/api_imagenes/hbo_max"))
        {
            mkdir("C:/xampp/htdocs/api_imagenes/hbo_max", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/api_imagenes/hbo_max/".$file))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagenppv()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        if(!is_dir("C:/xampp/htdocs/api_imagenes/ppv"))
        {
            mkdir("C:/xampp/htdocs/api_imagenes/ppv", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/api_imagenes/ppv/".$file))
        {
            echo json_decode($file);
        }    
    }
    function insertandoImagenfox_mas()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $file = $_FILES["file"]["name"];
        if(!is_dir("C:/xampp/htdocs/api_imagenes/fox_mas"))
        {
            mkdir("C:/xampp/htdocs/api_imagenes/fox_mas", 0777);
        }
        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "C:/xampp/htdocs/api_imagenes/fox_mas/".$file))
        {
            echo json_decode($file);
        }    
    }
    function eliminandoImagenppv($ruta) 
    {
        $directorio="C:/xampp/htdocs/api_imagenes/ppv/".$ruta;
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
        $directorio="C:/xampp/htdocs/api_imagenes/hbo_max/".$ruta;
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
        $directorio="C:/xampp/htdocs/api_imagenes/hbo_max/".$ruta;
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
        $directorio="C:/xampp/htdocs/api_imagenes/fox_mas/".$ruta;
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
        $directorio="C:/xampp/htdocs/api_imagenes/banner_view/".$ruta;
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
        $directorio="C:/xampp/htdocs/api_imagenes/banner_footer/".$ruta;
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
        $directorio="C:/xampp/htdocs/api_imagenes/peliculas_renta/".$ruta;
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
        $sql = "insert into banner_view (nombre, ruta, descripcion) values(:nombre,:ruta,:descripcion)";
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
    function postbannerfooter()
    {
        $request = Slim\Slim::getInstance()->request();
        $banner_footer = json_decode($request->getBody());
        $sql = "insert into banner_footer (nombre, ruta, descripcion) values(:nombre,:ruta,:descripcion)";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_footer->nombre);
            $stmt->bindParam("ruta", $banner_footer->ruta);
            $stmt->bindParam("descripcion", $banner_footer->descripcion);
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
    function putbannerview($id)
    {
    	$request = Slim\Slim::getInstance()->request();
        $banner_view = json_decode($request->getBody());
        $sql ="update banner_view SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion where id=:id";
        try {
            $db = getConnection();
            $stmt = $db->prepare($sql);
            $stmt->bindParam("nombre", $banner_view->nombre);
            $stmt->bindParam("ruta", $banner_view->ruta);
            $stmt->bindParam("descripcion", $banner_view->descripcion);
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
        $sql ="update banner_footer SET nombre=:nombre, ruta=:ruta, descripcion=:descripcion where id=:id";
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


$app->run();