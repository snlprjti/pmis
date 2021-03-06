<div class="col-md-5">
    <div class="panel  @if(isset($label))
                        panel-danger
                      @else
                        panel-default
                      @endif
            ">
        <div class="panel-heading">
            @if(isset($label))
                Edit
            @else
                Add
            @endif
            Vital Statistic Type
        </div>

        @if(isset($label))
            {!! Form::model($type,[
                         'action'=>['Configuration\VitalStatisticTypeController@update',$type->id],
                         'class' =>'form-horizontal',
                         'method' =>'PUT'

                 ])
             !!}
        @else
            {!! Form::open([
                         'action'=>'Configuration\VitalStatisticTypeController@store',
                         'class' =>'form-horizontal',

                 ])
             !!}

        @endif


        <div class="panel-body">

            <div class="form-group">

                <label for="name" class="col-sm-3 control-label">Name</label>

                <div class="col-sm-9">

                    {!!
                        Form::text('name', null,[
                            'class'         =>  "form-control",
                            'placeholder'   =>  "Enter Vital Statistic Name",
                            'id'            =>  "name",
                            'required'
                        ])
                    !!}

                    {!! $errors->first('name', '<span class="label label-danger" >:message</span >') !!}

                </div>

            </div>
        </div>

        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <button type="submit" class="btn-success btn">Save</button>
                    @if(isset($label))
                        <a href="{{ action('Configuration\VitalStatisticTypeController@index') }}" class="btn-default btn">Cancel</a>
                    @endif

                    <button type="reset" class="btn-inverse btn">Reset</button>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
</div>