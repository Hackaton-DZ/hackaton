@extends('layouts.app')
@section('content')

<div class="container col-md-6 col-md-offset-3" style="margin-top: 60px">

    <form class="well form-horizontal" action=" " method="post"  id="form-postventa">
<fieldset>

<!-- Form Name -->
<legend class="text-center" style="background: #ff6e00; color:white">Formulario de devolución</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Nº Comprobante</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fas fa-file-invoice-dollar"></i></span>
  <input name="phone" placeholder="Nº Comprobante" class="form-control" type="text" id="input-comprobante">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nombres</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="Nombres" class="form-control"  type="text" id="input-nombres">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Apellidos</label> 
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Apellidos" class="form-control"  type="text" id="input-apellidos">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">DNI</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fas fa-id-card"></i></span>
  <input name="email" placeholder="DNI" class="form-control"  type="text" id="input-documento">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Fecha de compra</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="address" placeholder="Fecha de compra" class="form-control" type="text"  id="input-dcompra">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Importe</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fas fa-money-check-alt"></i></span>
  <input name="city" placeholder="Importe" class="form-control"  type="text" id="input-mventa">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Producto</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fab fa-product-hunt"></i></span>
  <input name="city" placeholder="Producto" class="form-control"  type="text" id="input-prdFullName">
    </div>
  </div>
</div>

<!-- 
 
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-6 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>Alabama</option>
      <option>Alaska</option>
      <option >Arizona</option>
      <option >Arkansas</option>
      <option >California</option>
      <option >Colorado</option>
      <option >Connecticut</option>
      <option >Delaware</option>
      <option >District of Columbia</option>
      <option> Florida</option>
      <option >Georgia</option>
      <option >Hawaii</option>
      <option >daho</option>
      <option >Illinois</option>
      <option >Indiana</option>
      <option >Iowa</option>
      <option> Kansas</option>
      <option >Kentucky</option>
      <option >Louisiana</option>
      <option>Maine</option>
      <option >Maryland</option>
      <option> Mass</option>
      <option >Michigan</option>
      <option >Minnesota</option>
      <option>Mississippi</option>
      <option>Missouri</option>
      <option>Montana</option>
      <option>Nebraska</option>
      <option>Nevada</option>
      <option>New Hampshire</option>
      <option>New Jersey</option>
      <option>New Mexico</option>
      <option>New York</option>
      <option>North Carolina</option>
      <option>North Dakota</option>
      <option>Ohio</option>
      <option>Oklahoma</option>
      <option>Oregon</option>
      <option>Pennsylvania</option>
      <option>Rhode Island</option>
      <option>South Carolina</option>
      <option>South Dakota</option>
      <option>Tennessee</option>
      <option>Texas</option>
      <option> Uttah</option>
      <option>Vermont</option>
      <option>Virginia</option>
      <option >Washington</option>
      <option >West Virginia</option>
      <option>Wisconsin</option>
      <option >Wyoming</option>
    </select>
  </div>
</div>
</div>

 -->


<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Necesita ser validado por un acesor experto?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="valiproducto" value="yes" /> Si
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="valiproducto" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Project Description</label>
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success hidden" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="button" name="Aceptar" value="aceptar" class="btn btn-block btn-lg btn-promart" id="btn-postventa" >
    
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

@stop



