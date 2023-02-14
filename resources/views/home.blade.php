@extends('layouts.app')
@section('nav')
@include('includes.nav')
@endsection
@section('content')
<!--Filter Card-->
<div class="col-md-4">
    <div id="filter-card" class="card m-4">
        <h3 class=" ml-4 mt-4 p-4">{{ __('FILTERS') }}</h3>

        <div class="card-body">
            <form method="POST" action="#">
                @csrf
                <div class="row mb-3">

                    <div class="form-group mx-auto">
                    <label for="email" class=" col-form-label text-md-end">{{ __('Distributor') }}</label>

                        <input id="distributor" type="distributor" class="form-control rounded-0 p-2" name="filter"  placeholder="Enter Id, First Name or Last Name">
                    </div>
                </div>

                <div class="row mb-3">


                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <label for="from_date" class=" col-form-label text-md-end">{{ __('Date From') }}</label>
                            <input id="from_date" type="date" class="form-control rounded-0 p-2" name="from_date" placeholder="2/02/2023">
                        </div>

                        <div class="form-group">
                            <label for="to_date" class=" col-form-label text-md-end">{{ __('To Date') }}</label>
                            <input id="to_date" type="date" class="form-control rounded-0 p-2" name="to_date" placeholder="4/03/2023">
                        </div>

                    </div>
                </div>


                <div class="row mb-0">
                    <div class="d-flex justify-content-end">
                        <button id="button" type="submit" style="background:#d9e8fb; " class="btn text-dark">
                            {{ __('Filter') }}
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Filter Card-->

<!-- Table Section --->
<section class="intro">
    <div class="bg-image h-100" style="background-color: #f5f7fa;">
      <div class="mask d-flex align-items-center h-100">
        <div class="container-fluid mx-auto">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative;">
                    <table class="table table-striped mb-0 table-bordered">
                      <thead style="background-color:#d9e8fb;">
                        <tr>
                          <th scope="col">Invoice</th>
                          <th scope="col">Purchaser</th>
                          <th scope="col">Distributor</th>
                          <th scope="col">Referred Distributor</th>
                          <th scope="col">Order Date</th>
                          <th scope="col">Order Total</th>
                          <th scope="col">Percentage</th>
                          <th scope="col">Distributor's Commission</th>
                          <th scope="col">Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->invoice_number }}</td>
                            <td>{{ $order->user->first_name." ". $order->user->last_name }}</td>
                            <td>Velda Fisher</td>
                            <td>1</td>
                            <td>{{ $order->order_date }}</td>
                            <td>100.00</td>
                            <td>5%</td>
                            <td>5.00</td>
                            <td><a href="#">View Item</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- End of Table Section --->



@include('includes.sidebar')
@section('css')
<style>
html,
body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: auto;
}

thead th {
  color: #000;
}





.table-scroll table thead th {
  font-size: 1.25rem;
}
thead {
  top: 0;
  position: sticky;
}


#filter-card.active{
    left:0;
}

#arrow{
    position: relative;
    z-index: 10;
    left: 39px;
}
</style>

@endsection
@section('js')
<script>
  const show = () =>{
    document.getElementById('filter-card').classList.toggle('active')
  }
</script>
@endsection
@endsection
