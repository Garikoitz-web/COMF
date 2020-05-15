<?php

    /* INSTRUMENTO */
    function obtenerInstrumentos() {
        include '../assets/db/db.php';

        $query = "SELECT * FROM instrumento";
        $result = mysqli_query($connection, $query);

        $json = array();
        
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'codInstrumento' => $row['id_inst'],
                'nomInstrumento' => $row['instrumento'],
            );
        }  

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }


    /* AFINACION */
    function obtenerAfinaciones($codInstrumento) {
        include '../assets/db/db.php';

        $query1 = "SELECT * FROM afinacion WHERE id_inst = $codInstrumento";
        $result1 = mysqli_query($connection, $query1);

        $json1 = array();
        
        while($row1 = mysqli_fetch_array($result1)) {
            $json1[] = array(
                'codAfinacion' => $row1['id_afin'],
                'nomAfinacion' => $row1['afinacion'],
            );
        }

        $jsonstring1 = json_encode($json1);
        echo $jsonstring1;
    }


    /* TONALIDAD */
    function obtenerTonalidades($codAfinacion) {
        include '../assets/db/db.php';

        $query2 = "SELECT * FROM tonalidad WHERE id_afin = $codAfinacion";
        $result2 = mysqli_query($connection, $query2);

        $json2 = array();
        
        while($row2 = mysqli_fetch_array($result2)) {
            $json2[] = array(
                'codTonalidad' => $row2['id_tona'],
                'nomTonalidad' => $row2['tonalidad'],
            );
        }  

        $jsonstring2 = json_encode($json2);
        echo $jsonstring2;
    }


    /* 1 ACORDE */
    function obtenerAcordes($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor = mysqli_query($connection, $con_acor);

        $json_acor = array();
        
        while($row_acor = mysqli_fetch_array($result_acor)) {
            $json_acor[] = array(
                'codAcorde' => $row_acor['id_acor'],
                'nomAcorde' => $row_acor['acorde'],
            );
        }

        $jsonstring_acor = json_encode($json_acor);
        echo $jsonstring_acor;
    }


    /* 2 ACORDE */
    function obtenerAcordes2($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor2 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor2 = mysqli_query($connection, $con_acor2);

        $json_acor2 = array();
        
        while($row_acor2 = mysqli_fetch_array($result_acor2)) {
            $json_acor2[] = array(
                'codAcorde' => $row_acor2['id_acor'],
                'nomAcorde' => $row_acor2['acorde'],
            );
        }

        $jsonstring_acor2 = json_encode($json_acor2);
        echo $jsonstring_acor2;
    }


    /* 3 ACORDE */
    function obtenerAcordes3($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor3 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor3 = mysqli_query($connection, $con_acor3);

        $json_acor3 = array();
        
        while($row_acor3 = mysqli_fetch_array($result_acor3)) {
            $json_acor3[] = array(
                'codAcorde' => $row_acor3['id_acor'],
                'nomAcorde' => $row_acor3['acorde'],
            );
        }

        $jsonstring_acor3 = json_encode($json_acor3);
        echo $jsonstring_acor3;
    }


    /* 4 ACORDE */
    function obtenerAcordes4($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor4 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor4 = mysqli_query($connection, $con_acor4);

        $json_acor4 = array();
        
        while($row_acor4 = mysqli_fetch_array($result_acor4)) {
            $json_acor4[] = array(
                'codAcorde' => $row_acor4['id_acor'],
                'nomAcorde' => $row_acor4['acorde'],
            );
        }

        $jsonstring_acor4 = json_encode($json_acor4);
        echo $jsonstring_acor4;
    }


    /* 5 ACORDE */
    function obtenerAcordes5($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor5 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor5 = mysqli_query($connection, $con_acor5);

        $json_acor5 = array();
        
        while($row_acor5 = mysqli_fetch_array($result_acor5)) {
            $json_acor5[] = array(
                'codAcorde' => $row_acor5['id_acor'],
                'nomAcorde' => $row_acor5['acorde'],
            );
        }

        $jsonstring_acor5 = json_encode($json_acor5);
        echo $jsonstring_acor5;
    }


    /* 6 ACORDE */
    function obtenerAcordes6($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor6 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor6 = mysqli_query($connection, $con_acor6);

        $json_acor6 = array();
        
        while($row_acor6 = mysqli_fetch_array($result_acor6)) {
            $json_acor6[] = array(
                'codAcorde' => $row_acor6['id_acor'],
                'nomAcorde' => $row_acor6['acorde'],
            );
        }

        $jsonstring_acor6 = json_encode($json_acor6);
        echo $jsonstring_acor6;
    }


    /* 7 ACORDE */
    function obtenerAcordes7($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor7 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor7 = mysqli_query($connection, $con_acor7);

        $json_acor7 = array();
        
        while($row_acor7 = mysqli_fetch_array($result_acor7)) {
            $json_acor7[] = array(
                'codAcorde' => $row_acor7['id_acor'],
                'nomAcorde' => $row_acor7['acorde'],
            );
        }

        $jsonstring_acor7 = json_encode($json_acor7);
        echo $jsonstring_acor7;
    }


    /* 8 ACORDE */
    function obtenerAcordes8($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor8 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor8 = mysqli_query($connection, $con_acor8);

        $json_acor8 = array();
        
        while($row_acor8 = mysqli_fetch_array($result_acor8)) {
            $json_acor8[] = array(
                'codAcorde' => $row_acor8['id_acor'],
                'nomAcorde' => $row_acor8['acorde'],
            );
        }

        $jsonstring_acor8 = json_encode($json_acor8);
        echo $jsonstring_acor8;
    }


    /* 9 ACORDE */
    function obtenerAcordes9($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor9 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor9 = mysqli_query($connection, $con_acor9);

        $json_acor9 = array();
        
        while($row_acor9 = mysqli_fetch_array($result_acor9)) {
            $json_acor9[] = array(
                'codAcorde' => $row_acor9['id_acor'],
                'nomAcorde' => $row_acor9['acorde'],
            );
        }

        $jsonstring_acor9 = json_encode($json_acor9);
        echo $jsonstring_acor9;
    }


    /* 10 ACORDE */
    function obtenerAcordes10($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor10 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor10 = mysqli_query($connection, $con_acor10);

        $json_acor10 = array();
        
        while($row_acor10 = mysqli_fetch_array($result_acor10)) {
            $json_acor10[] = array(
                'codAcorde' => $row_acor10['id_acor'],
                'nomAcorde' => $row_acor10['acorde'],
            );
        }

        $jsonstring_acor10 = json_encode($json_acor10);
        echo $jsonstring_acor10;
    }


    /* 11 ACORDE */
    function obtenerAcordes11($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor11 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor11 = mysqli_query($connection, $con_acor11);

        $json_acor11 = array();
        
        while($row_acor11 = mysqli_fetch_array($result_acor11)) {
            $json_acor11[] = array(
                'codAcorde' => $row_acor11['id_acor'],
                'nomAcorde' => $row_acor11['acorde'],
            );
        }

        $jsonstring_acor11 = json_encode($json_acor11);
        echo $jsonstring_acor11;
    }


    /* 12 ACORDE */
    function obtenerAcordes12($codTonalidad) {
        include '../assets/db/db.php';

        $con_acor12 = "SELECT * FROM acorde WHERE id_tona = $codTonalidad";
        $result_acor12 = mysqli_query($connection, $con_acor12);

        $json_acor12 = array();
        
        while($row_acor12 = mysqli_fetch_array($result_acor12)) {
            $json_acor12[] = array(
                'codAcorde' => $row_acor12['id_acor'],
                'nomAcorde' => $row_acor12['acorde'],
            );
        }

        $jsonstring_acor12 = json_encode($json_acor12);
        echo $jsonstring_acor12;
    }



    if( isset($_POST['codigoInst']) ) {
        $codInstrumento = $_POST['codigoInst'];
        obtenerAfinaciones($codInstrumento);
    } else if( isset($_POST['codigoAfin']) ) {
        $codAfinacion = $_POST['codigoAfin'];
        obtenerTonalidades($codAfinacion);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes2($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes3($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes4($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes5($codTonalidad);
    }  else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes6($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes7($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes8($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes9($codTonalidad);
    }  else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes10($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes11($codTonalidad);
    } else if ( isset($_POST['codigoTona']) ) {
        $codTonalidad = $_POST['codigoTona'];
        obtenerAcordes12($codTonalidad);
    } else {
        obtenerInstrumentos();
    }
?>