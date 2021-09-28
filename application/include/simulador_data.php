<div class ="box"  >


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

        <div class="form-group" >
            <label for="" class="col-sm-2 control-label" style="color:#009900">Valor</label>
            <div class="col-sm-10">
                <input name="amount" type="number" class="form-control" placeholder="Valor do Financimento" name="lamout" required>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Periodo Incial</label>
            <div class="col-sm-10">
                <input name="amount" type="date" class="form-control" placeholder="Periodo de Vigencia" name="pinit" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Periodo Inicial</label>
            <div class="col-sm-10">
                <input name="amount" type="date" class="form-control" placeholder="Periodo de Vigencia" name="pfinal" required>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Taxa de Juros</label>
            <div class="col-sm-10">
                <input name="amount" type="text" class="form-control" placeholder="Taxa de Juro" name="irate" required>
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Taxa de Desconto</label>
            <div class="col-sm-10">
                <input name="amount" type="text" class="form-control" placeholder="Rendimento Mensal" required>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" id="save" class="btn btn-primary btn-flat" name="simular"><i class="fa fa-times">&nbsp;Simular</i></button>
        </div>
</div>  

<script>
    $("#lamout").change(function()
        {
            calloan();
        }

    );

    $("#irate").change(function()
        {
            calloan();
        }

    );

    $("#pinit").change(function()
        {
            calloan();
        }

    );

    function callon()
    {
        if($("#lamout").val() == "")
        {
            return false;
        }

        else if($("#pinit").val() == "")
        {
            return false;
        }

        else if($("#irate").val() == "")
        {
            return false;
        }

    else{
        var totalamount = 0;
        totalamount = (Number($("#lamount").val())* (Number($("#irate").val())/100) * (Number($("#lamount").val())

    }
    }

</script>

