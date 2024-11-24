<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<style>
	.radio-custom:checked ~ label {
	  color: blue;
	}

	label {
	  display: block;
	  flex: 1;
	}

	.input-group {
	  display: block;
	}

	.text-group-field {
	  padding: 10px;
	}

	.inner-block {
	  position: relative;
	  display: flex;
	  flex-direction: row-reverse;
	}
	</style>
</head>

<body>
	<div class="input-group">
   <div class="text-group-field pickup-day choose-time">
     <div class="inner-block">
       <input id="pickup-1" class="radio-custom input-group-field" name="radio-group" type="radio" style="display:none">
       <label for="pickup-1" class="radio-custom-label">10.00 PM</label>
     </div>
   </div>
   <div class="text-group-field pickup-day choose-time">
     <div class="inner-block">
       <input id="pickup-2" class="radio-custom input-group-field" name="radio-group" type="radio" style="display:none">
       <label for="pickup-2" class="radio-custom-label">10.00 PM</label>
     </div>
   </div>
   <div class="text-group-field pickup-day choose-time">
     <div class="inner-block">
       <input id="pickup-3" class="radio-custom input-group-field" name="radio-group" type="radio" style="display:none">
       <label for="pickup-3" class="radio-custom-label">10.00 PM</label>
     </div>
   </div>
</div>
</body>
</html>
