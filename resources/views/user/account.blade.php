 @extends('template.user')

 @section('body')
 <!-- My Account Start -->
  <div class="my-account">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab">Dashboard</a>
                    <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab">Account Details</a>
                    <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab">Orders</a>
                    <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab">Payment Method</a>
                    <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab">Address</a>
                    {{-- <a class="nav-link" href="index.html">Logout</a> --}}
                    <form class="" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="nav-link btn" style="width: 100%; text-align: start;" type="submit">Logout</button>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                        <h4>Dashboard</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus. Nulla tristique viverra nisl, sit amet bibendum ante suscipit non. Praesent in faucibus tellus, sed gravida lacus. Vivamus eu diam eros. Aliquam et sapien eget arcu rhoncus scelerisque.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $item)

                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>${{ $item->amount }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td><button>View</button></td>
                                    </tr>
                                    @endforeach

                                    {{-- <tr>
                                        <td>1</td>
                                        <td>Product Name</td>
                                        <td>01 Jan 2020</td>
                                        <td>$22</td>
                                        <td>Approved</td>
                                        <td><button>View</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Product Name</td>
                                        <td>01 Jan 2020</td>
                                        <td>$22</td>
                                        <td>Approved</td>
                                        <td><button>View</button></td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                        <h4>Payment Method</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus. Nulla tristique viverra nisl, sit amet bibendum ante suscipit non. Praesent in faucibus tellus, sed gravida lacus. Vivamus eu diam eros. Aliquam et sapien eget arcu rhoncus scelerisque.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                        <h4>Address</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Payment Address</h5>
                                <p>123 Payment Street, Los Angeles, CA</p>
                                <p>Mobile: 012-345-6789</p>
                                <button>Edit Address</button>
                            </div>
                            <div class="col-md-6">
                                <h5>Shipping Address</h5>
                                <p>123 Shipping Street, Los Angeles, CA</p>
                                <p>Mobile: 012-345-6789</p>
                                <button>Edit Address</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                        <h4>Account Details</h4>

                            <form class="row" action="">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Last Name" value="{{ $user->name }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Mobile" value="">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="{{ $user->email }}" disabled>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Address" value="">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">Update Account</button>
                                    <br><br>
                                </div>
                            </form>

                        <h4>Password change</h4>
                        <form action="" class="row">
                            <div class="col-md-12">
                                <input type="password" placeholder="Current Password">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="New Password">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12">
                                <button>Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- My Account End -->
@endsection
