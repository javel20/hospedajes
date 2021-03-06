{!!Form::open(['url' => $url, 'method' => $method])!!}

       <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$licencia->nombre,['class' => 'form-control', 'placeholder'=>'nombre','maxlength'=>'60'])}}
                
                 @if($errors->has('nombre'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
            <br>
            </div>


            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Inicio</label>
                <!--<input validate="date" class="form-control" id="date" name="fechai" placeholder="MM/DD/YYYY" maxlength="10" value={{$licencia->fechai}}>-->
                {{Form::date('fechai',$licencia->fechai,['class' => 'form-control', 'placeholder'=>'fechai','maxlength'=>'10'])}}

                   @if($errors->has('fechai'))
                    <span style='color:red;'>{{$errors->first('fechai')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
                 <label class="control-label" for="date">Fecha Termino</label>
                 {{Form::date('fechaf',$licencia->fechaf,['class' => 'form-control', 'placeholder'=>'fechaf','maxlength'=>'10'])}}
                <!--<input validate="date" class="form-control" id="date" name="fechaf" placeholder="MM/DD/YYYY" maxlength="10"  value={{$licencia->fechaf}}>-->

                   @if($errors->has('fechaf'))
                    <span style='color:red;'>{{$errors->first('fechaf')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Estado</label>
                <select class="form-control" name="estado" id="estado" value={{$licencia->estado}}>
                    <option value="">--seleccionar--</option>
                    <option value="De permiso" <?php echo ($licencia->estado=="De permiso" ? 'selected="selected"' : '');?>>De permiso</option>
                    <option value="De retorno" <?php echo ($licencia->estado=="De retorno" ? 'selected="selected"' : '');?>>De retorno</option>
                </select>

                 @if($errors->has('estado'))
                    <span style='color:red;'>{{$errors->first('estado')}}</span>
                @endif
                <br>
            </div>


            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$licencia->descripcion,['class' => 'form-control', 'placeholder'=>'Descripcion','maxlength'=>'100'])}}
                
                 @if($errors->has('descripcion'))
                    <span style='color:red;'>{{$errors->first('descripcion')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Trabajador</label>

                <select class="form-control" name="trabajador" id="trabajador" value={{$licencia->trabajador_id}}>
                        <option value="">--seleccionar--</option>
                @foreach ($trabajadors as $trab)
                        @if($licencia->trabajador_id==$trab->id)
                            <option value="{{$trab->id}}" selected> {{$trab->nombre}} </option>
                            @else
                            <option value="{{$trab->id}}"> {{$trab->nombre}} </option>
                        @endif
                @endforeach
                </select>

                 @if($errors->has('trabajador'))
                    <span style='color:red;'>{{$errors->first('trabajador')}}</span>
                @endif
                <br>
            </div>

            

            <div class="col-md-12 form-group text-right">
                <div class="form-group text-right">
                    <a href="{{url('/licencias')}}">Regresar al listado de licencia</a>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </div>
            </div>

        {!! Form::close() !!}