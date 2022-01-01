<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          
        @foreach($data as $product)

          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="/certifimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>{{$product->domain}}</h6>
                <p>{{$product->description}}</p>
                <a class="btn btn-primary" href="
                        {{url('detail',$product->id)}}">Read More</a>
                <form action="{{url('participate',$product->id)}}"
                 method="POST">

                @csrf
                  <input  class="btn btn-success" type="submit" value="Participate">


                

                </form>
              
                  
  
    




              </div>
            </div>
          </div>
        @endforeach
         
        <div class="d-flex justify-content-center">

        {!! $data->links() !!}

        </div>
        </div>
      </div>
    </div>

    
    <div>
                      @comments(['model' => $product])
      
                   </div>