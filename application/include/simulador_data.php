<div class ="box">

    <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Tipo de Credito</label>
            <div class="col-sm-10">
               <select name="credittype" class="form-control" required>
                   <option value="CARC">CARC</option>
                   <option value="CARC">Habitacao</option>
                   <option value="CARC">Consumo</option>
               </select>
            </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Valor</label>
        <div class="col-sm-10">
            <input name="amount" type="text" class="form-control" placeholder="Valor do Financimento" required>
        </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Periodo de Vigencia</label>
        <div class="col-sm-10">
            <input name="amount" type="text" class="form-control" placeholder="Periodo de Vigencia" required>
        </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Taxa de Juros</label>
        <div class="col-sm-10">
            <input name="amount" type="text" class="form-control" placeholder="Taxa de Juro" required>
        </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Rendimento Mensal</label>
        <div class="col-sm-10">
            <input name="amount" type="text" class="form-control" placeholder="Rendimento Mensal" required>
        </div>
    </div>

    <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Taxa de Desconto Mensal</label>
        <div class="col-sm-10">
            <input name="amount" type="text" class="form-control" placeholder="Taxa de Desconto Mensal" required>
        </div>
    </div>
		

    <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
			<div class="col-sm-10">
             	<div class="input-group date">
                 	<div class="input-group-addon">
                    	<i class="fa fa-calendar"></i>
                  	</div>
                  		<input type="text" class="form-control pull-right" id="datepicker" name="pay_date">
                </div>
            </div>
	</div>

</div>