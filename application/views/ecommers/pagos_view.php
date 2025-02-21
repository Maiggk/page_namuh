

        <!--slide-->
        <!-- Service Area Start data-bg-img="<?php echo base_url();?>assets/main_files_cerbero/img/background-img/services-bg.jpg"-->
        <div id="service" class="service-primary" >
            <div class="vc-parent">
                <div class="vc-child">
                    <center><img src="<?php echo base_url();?>assets/img/cerbero_principal.png" width="25%"/></center>
                </div>
            </div>
        </div>
        <!-- Service Area End -->
        <!-- Feature Area Start -->
<div id="servicios"></div>
<br>
<br>

        <div id="feature">
            <div class="container">




                	<h1>OpenPay Javascript API Library Test</h1>

	<div class="table">
		<div class="tableRow">
			<div class="tableCell">
				<p>Mode: </p>
				<select id="mode" class="inputSelect disableOnSubmit">
					<option value="Develop">Develop</option>
					<option value="Sandbox">Sandbox</option>
					<option value="Production">Production</option>
				</select>
			</div>
		</div>
		<div class="tableRow">
			<div class="tableCell">
				<p>Merchant ID:</p>
				<input type="text" class="inputText disableOnSubmit" id="id" value="mdk69ifh7gkdr8czjl2o" size="50" />
			</div>
			<div class="tableCell">
				<p>Request API Key:</p>
				<input type="text" class="inputText disableOnSubmit" id="apiKey" value="pk_42a53c504bdd451fa783f0ce149e7e9e"
					size="50" />
			</div>
		</div>
	</div>


	<fieldset>
		<legend><b>Create a : <select id="objectToCreate" class="inputSelect disableOnSubmit">
					<option value="false">token</option>
				</select> <b></legend>
		<div class="table">
			<div class="tableRow">
				<div class="tableCell">
					<p>Show Data: </p>
					<select id="showData" class="inputSelect disableOnSubmit">
						<option value="true">true</option>
						<option value="false">false</option>
					</select>
				</div>
			</div>
		</div>
		<!-- form to create a card -->
		<div class="table">







			<form id="processCard">
				<div class="tableRow">
					<div class="tableCell">
						<p>Holder Name:</p>
						<input type="text" data-openpay-card="holder_name" class="inputText disableOnSubmit" id="holderName" size="50"
							value="Juan Perez Ramirez" />
					</div>
					<div class="tableCell">
						<p>Card number:</p>
						<input type="text" data-openpay-card="card_number" class="inputText disableOnSubmit" id="cardNumber" size="50"
							value="4111111111111111" />
					</div>
				</div>
				<div class="tableRow">
					<div class="tableCell">
						<p>Expiration year:</p>
						<input type="text" data-openpay-card="expiration_year" class="inputText disableOnSubmit" id="expirationYear" size="4" value="20" />
					</div>
					<div class="tableCell">
						<p>Expiration month:</p>
						<input type="text" data-openpay-card="expiration_month" class="inputText disableOnSubmit" id="expirationMonth" size="4"
							value="04" />
					</div>
				</div>

				<div class="tableRow">
					<div class="tableCell">
						<p>cvv2:</p>
						<input type="text" data-openpay-card="cvv2" class="inputText disableOnSubmit" id="cvv2" size="5" value="110" />
					</div>
				</div>

				<fieldset>
					<legend>Address:</legend>
					<div class="tableRow">
						<div class="tableCell">
							<p>Street:</p>
							<input type="text" data-openpay-card-address="line1" class="inputText disableOnSubmit" id="line1" size="20" value="Av 5 de febrero" />
						</div>
						<div class="tableCell">
							<p>Number:</p>
							<input type="text" data-openpay-card-address="line2" class="inputText disableOnSubmit" id="line2" size="20" value="Roble 207" />
						</div>
						<div class="tableCell">
							<p>References:</p>
							<input type="text" data-openpay-card-address="line3" class="inputText disableOnSubmit" id="line3" size="20" value="Queretaro" />
						</div>
					</div>
					<div class="tableRow">
						<div class="tableCell">
							<p>Postal code:</p>
							<input type="text" data-openpay-card-address="postal_code" class="inputText disableOnSubmit" id="postal_code" size="6" value="76900" />
						</div>
						<div class="tableCell">
							<p>City:</p>
							<input type="text" data-openpay-card-address="city" class="inputText disableOnSubmit" id="city" size="20" value="Queretaro" />
						</div>
						<div class="tableCell">
							<p>State:</p>
							<input type="text" data-openpay-card-address="state" class="inputText disableOnSubmit" id="state" size="20" value="Queretaro" />
						</div>
					</div>
					<div class="tableRow">
						<div class="tableCell">
							<p>Country code:</p>
							<input type="text" data-openpay-card-address="country_code" class="inputText disableOnSubmit" id="country_code" size="3" value="MX" />
						</div>
					</div>
				</fieldset>
			</form>






		</div>
		<div class="table">
			<!-- fin form to create a card -->
			<div class="tableRow">
				<div class="tableCell">
					<p>
						Create Card Request data <span id="responseMode" />:
					</p>
					<textarea id="dataCard" class="inputTextarea disableOnSubmit" rows="19" cols="50">

                </textarea>
				</div>
				<div class="tableCell">
					<p class="response">Request response:</p>
					<textarea id="responseCard" class="inputTextarea disableOnSubmit" rows="19" cols="50">
                </textarea>
				</div>
			</div>
			<div class="tableRow">
				<div class="tableCell">
					<input type="button" class="disableOnSubmit" id="makeRequestCard" value="Create" />
				</div>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend>Validate a card:</legend>
		<div class="table">
			<div class="tableRow">
				<div class="tableCell">
					<p>Select Card Type:</p>
					<select id="cardTypes" class="inputSelect disableOnSubmit">
						<option value="5555555555554444">5555555555554444 [MASTERCARD]</option>
						<option value="5105105105105100">5105105105105100 [MASTERCARD]</option>
						<option value="4111111111111111">4111111111111111 [VISA]</option>
						<option value="4012888888881881">4012888888881881 [VISA]</option>
						<option value="4917300800000000">4917300800000000 [VISA ELECTRON]</option>
						<option value="378282246310005">378282246310005 [AMEX]</option>
						<option value="378734493671000">378734493671000 [AMEX CORPORATE]</option>
						<option value="30569309025904">30569309025904 [DINERS]</option>
						<option value="6011111111111117">6011111111111117[DISCOVER]</option>
						<option value="3530111333300000">3530111333300000 [JCB]</option>
						<option value="630490017740292441">630490017740292441 [LASER]</option>
					</select>
				</div>
				<div class="tableCell">
					<p>Type Card Number:</p>
					<input type="text" id="cardNumber" class="inputText disableOnSubmit" />
				</div>
			</div>
			<div class="tableRow">
				<div class="tableCell">
					<p>Expiry Month / Year</p>
					<select id="expiryMonth" class="inputSelect disableOnSubmit">
						<option value="1" selected="selected">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
						<option value="5">05</option>
						<option value="6">06</option>
						<option value="7">07</option>
						<option value="8">08</option>
						<option value="9">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select> <select id="expiryYear" class="inputSelect disableOnSubmit">
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014" selected="selected">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
					</select>
				</div>
				<div class="tableCell">
					<p>CVC:</p>
					<input type="text" id="cvc" class="inputText disableOnSubmit" />
				</div>
			</div>
			<div class="tableRow">
				<div class="tableCell">
					<p>Validation:</p>
					<label><input type="checkbox" id="valid" class="disableOnSubmit" /> Is the card number valid?</label><br /> <label><input
						type="checkbox" id="accepted" class="disableOnSubmit" /> Is the card number accepted?</label><br /> <label><input
						type="checkbox" id="cvcValid" class="disableOnSubmit" /> Is the CVC valid?</label><br /> <label><input
						type="checkbox" id="cvcExpiry" class="disableOnSubmit" /> Is the expiry date valid?</label><br /> <label><input
						type="checkbox" id="typeNumber" class="disableOnSubmit" /> Which brand is the card number? <span id="typeName"></span></label><br />
				</div>
			</div>
			<div class="tableRow">
				<input type="button" class="disableOnSubmit" id="makeValidation" value="Validate" />
			</div>
		</div>
	</fieldset>






        <!-- formulario final  -->
        <!-- formulario final  -->
<form class="form-horizontal" id="processCard1">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Holder name</label>
  <div class="col-md-4">
  <input id="holderName"  data-openpay-card="holder_name" type="text" placeholder="Nombre" class="form-control input-md inputText disableOnSubmit" size="50">

  <span class="help-block">help</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Numero de tarjeta</label>
  <div class="col-md-4">
  <input id="cardNumber" data-openpay-card="card_number" type="text" placeholder="Numero de tarjeta" class="form-control input-md inputText disableOnSubmit" size="50">

  <span class="help-block">help</span>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Expiration year:</label>
  <div class="col-md-4">
  <input id="expirationYear" data-openpay-card="expiration_year" type="text" placeholder="Numero de tarjeta" class="form-control input-md inputText disableOnSubmit" size="4">

  <span class="help-block">help</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Expiration month:</label>
  <div class="col-md-4">
  <input id="expirationMonth" data-openpay-card="expiration_month" type="text" placeholder="Numero de tarjeta" class="form-control input-md inputText disableOnSubmit" size="4">

  <span class="help-block">help</span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">cvv2:</label>
  <div class="col-md-4">
  <input id="cvv2" data-openpay-card="cvv2" type="text" placeholder="Numero de tarjeta" class="form-control input-md inputText disableOnSubmit" size="5">

  <span class="help-block">help</span>
  </div>
</div>






<!-- Button (Double) -->
<div class="form-group">

  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Pagar</button>

  </div>
</div>

</fieldset>
</form>
        <!-- formulario final  -->
        <!-- formulario final  -->




            </div>
        </div>
        <!-- Feature Area End -->


      <!--    <script src="<?php echo base_url(); ?>assets/main_files_cerbero/js/dat.gui.min.js"></script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5/dat.gui.min.js'></script>-->

       <!--
        <!--slide-
        <script src="<?php echo base_url(); ?>assets/main_files_cerbero/js/index.js"></script>-->

   <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay.v1.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
<script type="text/javascript">
$(document).ready(function(){



	function setDisableElements(_status){
		$('.disableOnSubmit').attr('disabled', _status);
	};

	function displayResultsCard(_message, _response, _sandboxMode) {
		setDisableElements(false);
		$('#responseCard').text(_message + (_response !== null ? ' ' + JSON.stringify(_response) : ''));
	};

	function successCard(_responseData) {
		displayResultsCard('Request proceessed successfully: ', _responseData);
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

		setDisableElements(true);
		$('#responseCard').text('');
		$('#dataCard').text('');
        setMode($('#mode').val());
		_id = $('#id').val();
		_apiKey = $('#apiKey').val();
        _dataCard = OpenPay.extractFormInfo($('#processCard'));
		$('#dataCard').text(JSON.stringify(_dataCard));
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

		setDisableElements(true);
		$('#responseCard').text('');
		$('#dataCard').text('');
        setMode($('#mode').val());
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


	$('#makeRequestCard').click(function(e){
		$('#showData').val() == 'true' ? callCreateToken() : callDirectCreateToken();
	});



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
		//alert('validando...')
		var _number = '', _cvc = '', _month = '', _year = '', _type = '';
		setDisableElements(true);

		$('#valid').prop('checked', false);
		$('#accepted').prop('checked', false);
		$('#cvcValid').prop('checked', false);
		$('#cvcExpiry').prop('checked', false);
		$('#typeNumber').prop('checked', false);
		$('#typeName').text('');

		_number = ($('#cardNumber').val() != '' ? $('#cardNumber').val() : $('#cardTypes').val());
		_cvc = $('#cvc').val();
		_month = $('#expiryMonth').val();
		_year = $('#expiryYear').val();

		if (OpenPay.card.validateCardNumber(_number)) {
			$('#valid').prop('checked', true);

			_type = OpenPay.card.cardType(_number);
			if (_type != '') {
				$('#typeNumber').prop('checked', true);
				$('#typeName').text('[' + _type.toUpperCase() + ']');
			} else {
				$('#typeName').text('UNKNOWN');
			}
		}
		if (OpenPay.card.validateAcceptCardNumber(_number)) {
			$('#accepted').prop('checked', true);
		}
		if (OpenPay.card.validateCVC(_cvc)) {
			$('#cvcValid').prop('checked', true);
		}
		if (OpenPay.card.validateExpiry(_month, _year)) {
			$('#cvcExpiry').prop('checked', true);
		}
		setDisableElements(false);
	}


    ///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
	///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
	///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
	///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
	///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////
	///////////////////////////////////////////////////fin funcion para validar la tarjeta///////////////////////////////









});
</script>
