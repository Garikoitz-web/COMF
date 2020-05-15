$(document).ready(function () {
    /* --variables para llamar a los select por el id */
    let $instrumento = document.getElementById('instrumento')
    let $afinacion = document.getElementById('afinacion')
    let $tonalidad = document.getElementById('tonalidad')
    let $acorde = document.getElementById('acorde')
    let $acorde2 = document.getElementById('acorde2')
    let $acorde3 = document.getElementById('acorde3')
    let $acorde4 = document.getElementById('acorde4')
    let $acorde5 = document.getElementById('acorde5')
    let $acorde6 = document.getElementById('acorde6')
    let $acorde7 = document.getElementById('acorde7')
    let $acorde8 = document.getElementById('acorde8')
    let $acorde9 = document.getElementById('acorde9')
    let $acorde10 = document.getElementById('acorde10')
    let $acorde11 = document.getElementById('acorde11')
    let $acorde12 = document.getElementById('acorde12')


    /* INSTRUMENTO */
    function cargarInstrumentos() {
        $.ajax({
            url: 'modelo/select.php',
            type: 'GET',
            success: function(response) {
                const instrumentos = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                instrumentos.forEach(instrumento => {
                    template += `<option class="form-control" value="${instrumento.codInstrumento}">${instrumento.nomInstrumento}</option>`;
                })

                $instrumento.innerHTML = template;
            }
        })
    }
    cargarInstrumentos()


    /* AFINACION */
    function cargarAfinaciones(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const afinaciones = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                afinaciones.forEach(afinacion => {
                    template += `<option class="form-control" value="${afinacion.codAfinacion}">${afinacion.nomAfinacion}</option>`;
                })

                $afinacion.innerHTML = template;
            }
        })
    }
    $instrumento.addEventListener('change', () => {
        const codInstrumento = $instrumento.value

        const sendDatos = {
            'codigoInst': codInstrumento
        }
        
        cargarAfinaciones(sendDatos)

        $tonalidad.innerHTML = ''
    })


    /* TONALIDAD */
    function cargarTonalidades(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const tonalidades = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                tonalidades.forEach(tonalidad => {
                    template += `<option class="form-control" value="${tonalidad.codTonalidad}">${tonalidad.nomTonalidad}</option>`;
                })

                $tonalidad.innerHTML = template;
            }
        })
    }
    $afinacion.addEventListener('change', () => {
        const codAfinacion = $afinacion.value

        const sendDatos = {
            'codigoAfin': codAfinacion
        }
        
        cargarTonalidades(sendDatos)

        $acorde.innerHTML = ''
    })


    /* 1 ACORDE */
    function cargarAcordes(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes.forEach(acorde => {
                    template += `<option class="form-control" value="${acorde.codAcorde}">${acorde.nomAcorde}</option>`;
                })

                $acorde.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes(sendDatos)

    })


    /* 2 ACORDE */
    function cargarAcordes2(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes2 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes2.forEach(acorde2 => {
                    template += `<option class="form-control" value="${acorde2.codAcorde}">${acorde2.nomAcorde}</option>`;
                })

                $acorde2.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes2(sendDatos)

    })


    /* 3 ACORDE */
    function cargarAcordes3(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes3 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes3.forEach(acorde3 => {
                    template += `<option class="form-control" value="${acorde3.codAcorde}">${acorde3.nomAcorde}</option>`;
                })

                $acorde3.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes3(sendDatos)

    })


    /* 4 ACORDE */
    function cargarAcordes4(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes4 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes4.forEach(acorde4 => {
                    template += `<option class="form-control" value="${acorde4.codAcorde}">${acorde4.nomAcorde}</option>`;
                })

                $acorde4.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes4(sendDatos)

    })

    /* 5 ACORDE */
    function cargarAcordes5(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes5 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes5.forEach(acorde5 => {
                    template += `<option class="form-control" value="${acorde5.codAcorde}">${acorde5.nomAcorde}</option>`;
                })

                $acorde5.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes5(sendDatos)

    })


    /* 6 ACORDE */
    function cargarAcordes6(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes6 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes6.forEach(acorde6 => {
                    template += `<option class="form-control" value="${acorde6.codAcorde}">${acorde6.nomAcorde}</option>`;
                })

                $acorde6.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes6(sendDatos)

    })


    /* 7 ACORDE */
    function cargarAcordes7(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes7 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes7.forEach(acorde7 => {
                    template += `<option class="form-control" value="${acorde7.codAcorde}">${acorde7.nomAcorde}</option>`;
                })

                $acorde7.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes7(sendDatos)

    })


    /* 8 ACORDE */
    function cargarAcordes8(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes8 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes8.forEach(acorde8 => {
                    template += `<option class="form-control" value="${acorde8.codAcorde}">${acorde8.nomAcorde}</option>`;
                })

                $acorde8.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes8(sendDatos)

    })


    /* 9 ACORDE */
    function cargarAcordes9(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes9 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes9.forEach(acorde9 => {
                    template += `<option class="form-control" value="${acorde9.codAcorde}">${acorde9.nomAcorde}</option>`;
                })

                $acorde9.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes9(sendDatos)

    })


    /* 10 ACORDE */
    function cargarAcordes10(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes10 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes10.forEach(acorde10 => {
                    template += `<option class="form-control" value="${acorde10.codAcorde}">${acorde10.nomAcorde}</option>`;
                })

                $acorde10.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes10(sendDatos)

    })


    /* 11 ACORDE */
    function cargarAcordes11(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes11 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes11.forEach(acorde11 => {
                    template += `<option class="form-control" value="${acorde11.codAcorde}">${acorde11.nomAcorde}</option>`;
                })

                $acorde11.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes11(sendDatos)

    })


    /* 12 ACORDE */
    function cargarAcordes12(sendDatos) {
        $.ajax({
            url: 'modelo/select.php',
            type: 'POST',
            data: sendDatos,
            success: function(response) {
                const acordes12 = JSON.parse(response);
                let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'
    
                acordes12.forEach(acorde12 => {
                    template += `<option class="form-control" value="${acorde12.codAcorde}">${acorde12.nomAcorde}</option>`;
                })

                $acorde12.innerHTML = template;
            }
        })
    }
    $tonalidad.addEventListener('change', () => {
        const codTonalidad = $tonalidad.value

        const sendDatos = {
            'codigoTona': codTonalidad
        }
        
        cargarAcordes12(sendDatos)

    })

})