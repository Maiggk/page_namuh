<link rel="stylesheet" href="<?php echo base_url().'assets/css/sweetalertAdmin/sweetalert.css'; ?>">
<script text="text/javascript" src="<?php echo base_url().'assets/js/sweetalert/sweetalert.min.js'; ?>"></script>

<section class="header-section fading-title parallax">
    <div class="section-shade sep-top-5x sep-bottom-3x">
      <div class="container">
        <div class="section-title upper light">
          <h2 class="small-space">Método de pago - Tarjeta</h2>
        </div>
      </div>
    </div>
 </section>
<div id="servicios"></div>
<br>
<br>
<!-- Feature Area  -->
<div id="feature">
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-4" style="border-right: 1px solid #ccc; text-align: right;" >
                <img src="<?php echo base_url();?>assets/transacciones/cards1.png"  />
            </div>
            <div class="col-md-8" >
                <img src="<?php echo base_url();?>assets/transacciones/cards2.png"  />
            </div>
        </div>

        <form class="form-horizontal" style="display:none;">
            <fieldset>
                <legend></legend>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput"></label>
                    <div class="col-md-4">
                        <input type="text"
                               class="form-control input-md inputText disableOnSubmit" id="apiKey"
                               value="pk_42a53c504bdd451fa783f0ce149e7e9e"
					           size="50" />
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput"></label>
                    <div class="col-md-4">
                        <input type="text"
                               class="form-control input-md inputText disableOnSubmit"
                               id="id" value="mdk69ifh7gkdr8czjl2o" size="50" />
                        <span class="help-block"></span>
                    </div>
                </div>
            </fieldset>
        </form>
        <!-- formulario final  -->
        <!-- formulario final  -->
        <form class="form-horizontal" method="POST" id="processCard">
            <fieldset>
                <legend><center>Transacción</center></legend>
                <input type="hidden" name="token_id" id="token_id">
                <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Nombre del titular</label>
                        <div class="col-md-4">
                            <input id="holderName"
                                       data-openpay-card="holder_name" autocomplete="off"
                                       type="text" placeholder="Como aparece en la tarjeta"
                                       class="form-control input-md inputText disableOnSubmit" size="50">
                            <span class="help-block" id="erroCompletarNombre" style="display:none; color:red;">
                                    Completar el campo
                            </span>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Número de tarjeta</label>
                        <div class="col-md-4">
                            <input id="cardNumber" data-openpay-card="card_number"
                                   type="text" placeholder="Número de tarjeta" autocomplete="off"
                                   class="form-control input-md inputText disableOnSubmit" size="50">
                            <span class="help-block" id="errorNumeroInvalido" style="display:none; color:red;">
                                El número de la tarjeta es invalido
                            </span>
                            <span class="help-block" id="errorNumeroRechazado" style="display:none; color:red;">
                                El número de su tarjeta ha sido rechazado
                            </span>
                            <span class="help-block" id="errorCompletarValorNumTarjeta" style="display:none; color:red;">
                                Completar el campo
                            </span>
                            <span class="help-block" id="errorNumericoCardNumber" style="display:none; color:red;">
                                El campo solo puede contener datos numericos, por favor verifique su Número de tarjeta
                            </span>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Año de expiración:</label>
                        <div class="col-md-4">
                            <input id="expirationYear" data-openpay-card="expiration_year"
                                   type="text" placeholder=""
                                   class="form-control input-md inputText disableOnSubmit" size="4">
                            <span class="help-block" >
                                Se deben ingresar los dos últimos dígitos del año, por ejemplo del 2016 solo se ingresa 16.
                            </span>
                            <span class="help-block" id="erroYearExpiracion" style="display:none; color:red;">
                                Verificar año de expiración
                            </span>
                            <span class="help-block" id="errorCompletarYear" style="display:none; color:red;">
                                Completar el campo
                            </span>
                            <span class="help-block" id="erroNoEsNumero" style="display:none; color:red;">
                                Verificar el valor ya que no es numerico
                            </span>
                            <span class="help-block" id="erroCantidaDigitos" style="display:none; color:red;">
                                La cantidad de digitos debe ser de 2
                            </span>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Mes de expiración:</label>
                    <div class="col-md-4">
                        <select id="expirationMonth" data-openpay-card="expiration_month"
                                class="form-control inputSelect disableOnSubmit">
				            <option value="" selected="selected">Seleccionar mes</option>
				            <option value="01" >01</option>
				            <option value="02">02</option>
				            <option value="03">03</option>
				            <option value="04">04</option>
                            <option value="05">05</option>
				            <option value="06">06</option>
                            <option value="07">07</option>
				            <option value="08">08</option>
						    <option value="09">09</option>
				            <option value="10">10</option>
				            <option value="11">11</option>
				            <option value="12">12</option>
                        </select>
                        <span class="help-block" id="erroMesExpiracion" style="display:none; color:red;">
                            Verificar mes de expiración
                        </span>
                        <span class="help-block" id="errorCompletarMes" style="display:none; color:red;">
                            Completar el campo
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Código de seguridad</label>
                    <div class="col-md-2">
                        <input id="cvv2" data-openpay-card="cvv2"
                               type="text" placeholder="3 dígitos" autocomplete="off"
                               class="form-control input-md inputText disableOnSubmit" size="12">

                        <span class="help-block" id="errorCodigoInvalido" style="display:none; color:red;">
                            El Código de seguridad es invalido
                        </span>
                        <span class="help-block" id="errorCompletarCVC" style="display:none; color:red;">
                            Completar el campo
                        </span>
                        <span class="help-block" id="errorNumericoCvc" style="display:none; color:red;">
                            El valor ingresado es incorrecto debe ingresar solo numeros (0-9)
                        </span>
                    </div>
                    <div class="col-md-3" >
                            <img src="<?php echo base_url();?>assets/transacciones/cvv.png"  />
                    </div>

                </div>
                <div class="form-group">
                        <div class="col-md-7" style="text-align: right;">
                            <img src="<?php echo base_url();?>assets/transacciones/security.png" />
                        </div>
                        <div class="col-md-2">
                            <span class="help-block" style="font-size: x-small;font-style: oblique;" >
                           Tus pagos se realizan de forma segura con encriptación de 256 bits
                            </span>
                        </div>


                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <center>
                            <button id="no" type="submit" style="display:none"
                                name="button1id" class="btn btn-success">Pagar</button>
   <!-- <button id="button1id" name="button1id" class="btn btn-success">Pagar</button>
      <input type="button" class="disableOnSubmit" id="makeRequestCard" value="Create" />-->
                            <a id="s"  onclick="enviar()" name="button1id" class="btn btn-primary">Pagar</a>
                        </center>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <center>
                            <a id="regresarTienda" href="<?php echo base_url(); ?>index.php/metodoDePago"  name="regresarTienda" class="btn btn-primary btn-sm">
                                Regregar a la tienda
                            </a>
                            <a id="cancelarCompra"   name="cancelarCompra" class="btn btn-primary btn-sm">
                               Cancelar compra
                            </a>
                        </center>
                    </div>
                </div>

            </fieldset>
        </form>
        <!-- formulario final  -->
        <!-- formulario final  -->
        <div>
         <input id="msj"  type="text" class="form-control input-md inputText" value="<?php echo $msj; ?>" >
        </div>
    </div>
</div>
<!-- Feature Area End-->

<script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay.v1.js"></script>
<script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        if($('#msj').val()==1)
        {
            swal({
                title: "Se ha realizado la tranzacion para verificar el estatus entre al apartado de historial.",
                text: "",
                type: "success",
                showCancelButton: true,
                confirmButtonColor: "#656668",
                confirmButtonText: "Agregar otra factura",
                cancelButtonText: "Regresar a la pantalla principal",
                closeOnConfirm: true,
                closeOnCancel: true },
                function(isConfirm)
                {
                    if (isConfirm)
                    {
                        window.parent.location='<?php echo base_url();?>index.php/Metodo_tarjeta';
                        //  location.reload();
                    } else
                    {
                       window.parent.location='<?php echo base_url();?>index.php/Metodo_tarjeta';
                        //    location.reload();
                    }
                }
                );
        }
        OpenPay.setSandboxMode(true);
        OpenPay.setId('mdk69ifh7gkdr8czjl2o');
        OpenPay.setApiKey('pk_42a53c504bdd451fa783f0ce149e7e9e');
        var deviceSessionId = OpenPay.deviceData.setup("processCard", "deviceIdHiddenFieldName");
    });
    $('#no').click(function()
    {
        $("#processCard").attr("action", "<?php echo base_url();?>index.php/Metodo_tarjetaPago");
    });
    function enviar()
    {
        validate();
        // alert('');
        // callDirectCreateToken();
    }
    $('#makeRequestCard').click(function(e)
    {
        $('#showData').val() == 'true' ? callCreateToken() : callDirectCreateToken();
    });

        function setDisableElements(_status){
            $('.disableOnSubmit').attr('disabled', _status);
        };

        function displayResultsCard(_message, _response, _sandboxMode) {
            setDisableElements(false);
            $('#responseCard').text(_message + (_response !== null ? ' ' + JSON.stringify(_response) : ''));
        };

        function successCard(_responseData) {
        //	displayResultsCard('Request proceessed successfully: ', _responseData);
            $('#token_id').val(_responseData.data.id);
           $('#no').click();
        };
        function errorCard(_errorResponseData){
            displayResultsCard('An error has been ocurred: ', _errorResponseData);
        };

        function setMode(mode){
            if(mode ==='Sandbox'){
                OpenPay.setSandboxMode(true);
            } else if(mode === 'Develop'){
                OpenPay.setDevelopMode(true);
            } else {
                OpenPay.setSandboxMode(false);
                OpenPay.setDevelopMode(false);
            }
        }

        function callCreateToken() {
            var _id = '', _apiKey = '', _data = null, _dataCard = '';
             // OpenPay.setSandboxMode(true);
           // OpenPay.setDevelopMode(false);
            setDisableElements(true);
            //$('#responseCard').text('');
            //$('#dataCard').text('');
            //setMode($('#mode').val());
              OpenPay.setSandboxMode(true);
            _id = $('#id').val();
            _apiKey = $('#apiKey').val();
            _dataCard = OpenPay.extractFormInfo($('#processCard'));
            //$('#dataCard').text(JSON.stringify(_dataCard));
            try {
                OpenPay.setId(_id);
                OpenPay.setApiKey(_apiKey);
                OpenPay.token.create(_dataCard, successCard, errorCard);
            } catch (e) {
                setDisableElements(true);
                displayResultsCard('Request failed (invalid data)', null);
            }
        };
        //Envio directo
        function callDirectCreateToken() {
            var _id = '', _apiKey = '', _data = null, _dataCard = '';
    //		  OpenPay.setSandboxMode(true);
           // OpenPay.setDevelopMode(false);
            setDisableElements(true);
            $('#responseCard').text('');
            $('#dataCard').text('');
           // setMode($('#mode').val());
            OpenPay.setSandboxMode(true);
            _id = $('#id').val();
            _apiKey = $('#apiKey').val();
            try {
                OpenPay.setId(_id);
                OpenPay.setApiKey(_apiKey);
                OpenPay.token.extractFormAndCreate($('#processCard'), successCard, errorCard);
            } catch (e) {
                setDisableElements(true);
                displayResultsCard('Request failed (invalid data)', null);
            }
        };






      ///////////////////////////////////////////Validar tarjeta//////////////////////////////////////////////////////////
      ///////////////////////////////////////////Validar tarjeta//////////////////////////////////////////////////////////
      ///////////////////////////////////////////Validar tarjeta//////////////////////////////////////////////////////////
      ///////////////////////////////////////////Validar tarjeta//////////////////////////////////////////////////////////



        $('#makeValidation').click(function(e){

            validate();
        });





            // --------------------------
        ///////////////////////////////////////////////////funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////funcion para validar la tarjeta///////////////////////////////
        function validate() {

            var _number = '', _cvc = '', _month = '', _year = '', _type = '',_bandera=0;
            setDisableElements(true);
            OpenPay.setSandboxMode(true);

            _number = $('#cardNumber').val();
            _cvc = $('#cvv2').val();
            _month = $('#expirationMonth').val();
            _year = $('#expirationYear').val();

            if($('#holderName').val()==''){$('#erroCompletarNombre').show(); _bandera=1;}

            if(_number!='')
            {
                 if($.isNumeric(_number))
                {
                  if (!OpenPay.card.validateCardNumber(_number))
                  {
                     _bandera=1;
                    $('#errorNumeroInvalido').show();
                  }
                  if (!OpenPay.card.validateAcceptCardNumber(_number))
                  {
                    _bandera=1;
                    $('#errorNumeroRechazado').show();
                  }
                }else
                {
                   _bandera=1;
                    $('#errorNumericoCardNumber').show();  //Numero de tarjeta puede ser de 16 o 19 dígitos.
                }
            }else
            {
                _bandera=1;
                $('#errorCompletarValorNumTarjeta').show();
            }



            if(_cvc!='')
            {
                if($.isNumeric(_cvc))
                {
                  if (!OpenPay.card.validateCVC(_cvc))
                    {
                        _bandera=1;
                        $('#errorCodigoInvalido').show();
                    }
                }
                else
                {
                     _bandera=1;
                    $('#errorNumericoCvc').show();
                }
            }else
            {
                _bandera=1;
                $('#errorCompletarCVC').show();
            }



            if(_year!='' && _month!='' )
            {
              if($.isNumeric(_year))
              {

                  if(_year.length==2){
                  _year='20'+_year
                  if (!OpenPay.card.validateExpiry(_month, _year))
                  {
                        $('#erroYearExpiracion').show();
                        $('#erroMesExpiracion').show();
                        _bandera=1;
                  }
                  }else
                  {
                      $('#erroCantidaDigitos').show();
                        _bandera=1;
                  }
              }else
              {
                  $('#erroNoEsNumero').show();
                _bandera=1;
              }
            }else
            {

                _bandera=1;
                if(_year=='')
                {
                    $('#errorCompletarYear').show();
                }
                if(_month=='')
                {
                   $('#errorCompletarMes').show();
                }
            }


            if(_bandera==0){callCreateToken();}
            else{
            setDisableElements(false);
            }
        }


        ///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
        ///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////


         $("#cardNumber").focus(function()
                                     {
                       $("#errorNumeroInvalido").css("display", "none").fadeOut(2000);
                       $("#errorNumeroRechazado").css("display", "none").fadeOut(2000);
                       $("#errorCompletarValorNumTarjeta").css("display", "none").fadeOut(2000);
                       $("#errorNumericoCardNumber").css("display", "none").fadeOut(2000);
                   });
          $("#cvv2").focus(function()
                                     {

                       $("#errorCodigoInvalido").css("display", "none").fadeOut(2000);
                       $("#errorCompletarCVC").css("display", "none").fadeOut(2000);
                       $("#errorNumericoCvc").css("display", "none").fadeOut(2000);
                   });
         $("#expirationMonth").focus(function()
                                     {
                       $("#errorCompletarMes").css("display", "none").fadeOut(2000);
                       $("#erroMesExpiracion").css("display", "none").fadeOut(2000);
                   });
         $("#expirationYear").focus(function()
                                     {
                       $("#erroYearExpiracion").css("display", "none").fadeOut(2000);
                       $("#errorCompletarYear").css("display", "none").fadeOut(2000);
                       $("#erroNoEsNumero").css("display", "none").fadeOut(2000);
                       $("#erroCantidaDigitos").css("display", "none").fadeOut(2000);
                   });
        $("#holderName").focus(function()
                                     {
                       $("#erroCompletarNombre").css("display", "none").fadeOut(2000);
                   });
</script>
