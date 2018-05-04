<nav>  
    <ul>
        <?php 
                foreach ($secciones as $caja => $total)
                {
                    
                    $destino = '?seccion='.$caja;
                    $activo = ''; 
                    
                            if (!isset($_GET['seccion']) and $caja === 'p1'){
                            $activo = 'class="activo"';
                            }
                   
                             if (isset($_GET['seccion']) and $_GET['seccion'] === $caja ){
                             $activo = 'class="activo"';
                            }

                             if ($caja === 'p1')
                             {

                            $destino = './';        
                            }
        
                    
        
                    echo "<li><a $activo href=\"$destino\"> $total[titulo]</a></li>";
                }
        

        ?>
    </ul>
</nav>