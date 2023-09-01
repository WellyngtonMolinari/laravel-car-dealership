@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Editar Categoria de Carro </h4> <br><br>
            
            <form method="post" action="{{ route('update.portfolio.category',$portfoliocategory->id) }}" >
                @csrf

               

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Nome da Categoria de Carro</label>
                <div class="col-sm-10">
                    <input name="portfolio_category" class="form-control" type="text" value="{{ $portfoliocategory->portfolio_category }}" id="example-text-input">
                    @error('portfolio_category')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->
  
        
<input type="submit" class="btn btn-info waves-effect waves-light" value="Inserir">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


 

@endsection 
