@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">menu</div>
        
                        <div class="card-body">
                          <ul class="list-group">
                              <a href="" class="list-group-item list-group-item action">View</a>
                              <a href="" class="list-group-item list-group-item action">Create</a>
                          </ul>
                           
                        </div>
                    </div>
                </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">pizza</div>

                <div class="card-body">
                  <div class="form-group">
                      <label for="name">Name of pizza</label>
                      <input type="text" class="form-control" name="name" placeholder="name of pizza">

                   
                </div>
                <div class="form-group">
                        <label for="name">Description of pizza</label>
                        <textarea class="form-control"name="description"></textarea>
  
                     
                  </div>
                  <div class="form-inline">
                    <label>Pizza price ($)</label>
                    <input type="number"class="form-control"placeholder="small pizza price">
                    <input type="number"class="form-control"placeholder="medium pizza price">
                    <input type="number"class="form-control"placeholder="large pizza price">
            </div>
            <div class="form-group">
                    <label for="name">category</label>
                    <select class="form-control">
                        <option value="vegetarian">vegetarian</option>
                        <option value="nonvegetarian">nonvegetarian</option>
                        <option value="traditiona"l>traditional</option>

                    </select>
                    
                    <div class="form-group">

                        <label>image</label>
                        <input type="file"class="form-control"name="image">
                    </div>


                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">save</button>
                 

        </div>
    </div>
</div>
@endsection
