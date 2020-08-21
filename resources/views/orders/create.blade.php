@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Pasti</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="ml-4" for="name">Antipasti</label>
                            <select class="col-md-12 selectpicker" multiple>
                                <option value="php">PHP</option>
                                <option value="react">React</option>
                                <option value="jquery">JQuery</option>
                                <option value="javascript">Javascript</option>
                                <option value="angular">Angular</option>
                                <option value="vue">Vue</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="ml-4" for="name">Pizze</label>
                            <select class="col-md-12 selectpicker" multiple>
                                <option value="php">PHP</option>
                                <option value="react">React</option>
                                <option value="jquery">JQuery</option>
                                <option value="javascript">Javascript</option>
                                <option value="angular">Angular</option>
                                <option value="vue">Vue</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="ml-4" for="name">Pizze Speciali</label>
                            <select class="col-md-12 selectpicker" multiple>
                                <option value="php">PHP</option>
                                <option value="react">React</option>
                                <option value="jquery">JQuery</option>
                                <option value="javascript">Javascript</option>
                                <option value="angular">Angular</option>
                                <option value="vue">Vue</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="ml-4" for="name">Panini</label>
                            <select class="col-md-12 selectpicker" multiple>
                                <option value="php">PHP</option>
                                <option value="react">React</option>
                                <option value="jquery">JQuery</option>
                                <option value="javascript">Javascript</option>
                                <option value="angular">Angular</option>
                                <option value="vue">Vue</option>
                            </select>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('select').selectpicker();
</script>
@endsection