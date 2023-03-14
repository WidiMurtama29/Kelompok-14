@extends('layout.index')

@section('content')
    <main>
        <div id="wrap" class="oe_structure oe_empty">
            <section>
                <div id="header-gifts" class="bg-primary">
                    <div class="text-center pt-4 text-white">
                        <h2 class="mt-4">My Special Gifts</h2>
                        <p>Thanks for trusting us! This is special gifts only for you</p>
                    </div>
                    <div class="w-50 m-auto mt-4 pt-2">
                        <div id="search-bar" class="shadow-sm py-1 px-1 bg-white rounded rounded-3">
                            <form class="d-flex" role="search">
                                <i class="fa fa-search text-muted" style="margin-top: 10px; margin-left: 10px;"></i>
                                <input class="form-control border-none shadow-none" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button
                                    class="d-none d-md-block btn btn-white rounded rounded-0 dropdown-toggle p-0 px-2 shadow-none border-start border-1"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Voucher
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="body-gifts" class="my-4">
                    <div id="item-container" class="m-auto row row-cols-1 row-cols-md-3 row-cols-lg-4">
                        @foreach ($vouchers as $voucher)
                            <div class="body-item-container col">
                                <div class="body-item bg-white">
                                    <div class="item-header">
                                        <h4 class="m-0 fw-bold text-primary">
                                            {{ intval($voucher->value) }}{{ $voucher->type == 'discount' ? '% OFF' : '' }}
                                        </h4>
                                    </div>
                                    <div class="item-body px-1">
                                        <p class="item-body-title fs-6 fw-bold m-0 mt-2 mb-1">
                                            {{ $voucher->name }}
                                        </p>
                                        <p class="item-body-description m-0 mb-1">
                                            {{ $voucher->description }}
                                        </p>
                                        <p class="item-body-exp fw-bold">Expired date:
                                            {{ date('d M Y', strtotime($voucher->valid_to)) }}</p>
                                        @if ($voucher->is_claimmed)
                                            <button class="btn btn-sm btn-claimed w-100 fw-bold">
                                                Claimed! view detail
                                            </button>
                                        @else
                                            <form action="{{ route('my-gifts.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="voucher_id" value="{{ $voucher->id }}">
                                                <button class="btn btn-sm btn-unclaimed w-100 fw-bold">
                                                    Claim
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

    </main>
@endsection
